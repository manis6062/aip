<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('general');
        checkAdminAuth();
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->form_validation->set_error_delimiters('<div class="red">', '</div>');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('path');
        $this->load->model('AuthModel');
        $this->load->model('AffiliateModel');
        $this->load->model('LineOwnerModel');
    }

    public function index()
    {
        if ($this->session->userdata(ADMIN_AUTH_TYPE) == 'affiliate') {
            $data['affiliateStatus'] = $this->AffiliateModel->checkAffiliatePaymentSatus($this->session->userdata(ADMIN_AUTH_AFFILIATEID));
        }
        if ($this->session->userdata(ADMIN_AUTH_ROLE) == '5') {
            $refinfo = $this->AffiliateModel->checkreferrerPaymentSatus($this->session->userdata(USER_ID));
            $data['admininfo'] = $this->UserModel->getAdminPaypalInfo();
            $data['referrerStatus'] = $refinfo;
        }
        if ($this->session->userdata(ADMIN_AUTH_TYPE) == 'client') {
            $clientInfo = $this->ClientModel->checkClientPaymentSatus($this->session->userdata(USER_ID));
            $data['clientinfo'] = $clientInfo;
            $data['affinfo'] = $this->ClientModel->getAffiliatePaymentInfo($clientInfo->affiliate_id);
            $data['referrerStatus'] = $clientInfo->payment_status;
            $regdate = strtotime($clientInfo->reg_date);
            $data['expdate'] = $expdate = mdate('%F %d, %Y', strtotime("+1 month", $regdate));
            $today = strtotime(date('Y-m-d'));
            $enddate = strtotime($expdate);
            $data['days'] = $days = ceil(abs($enddate - $today) / 86400);
        }

        if ($this->session->userdata(ADMIN_AUTH_TYPE) == 'line') {
            redirect(ADMIN_PATH . 'home/lineowner_dashboard');
        }
        $data['title'] = "Home";
        $data['main_content'] = ADMIN_PATH . "home_view";
        $this->load->view(ADMIN_PATH . 'inc/template', $data);
    }

    function lineowner_dashboard()
    {
        $user_id = $this->session->userdata(USER_ID);
        $line = $this->LineOwnerModel->getTradelinOwnerDetailsWithUserId($user_id);
        $data['completed_clients'] = $this->ClientModel->getCompletedClientByLine($line->to_id);
        $data['process_clients'] = $this->ClientModel->getProcessClientByLine($line->to_id);
        $data['cardinfo'] = $this->LineOwnerModel->getCardDetailsWithUserId($this->session->userdata(USER_ID));
        $data['title'] = "Home";
        $data['main_content'] = ADMIN_PATH . "line_dashboard";
        $this->load->view(ADMIN_PATH . 'incs/template', $data);
    }

    function changeRole()
    {
        $this->session->set_userdata(ROLE_NAME, $this->input->post(ROLE_NAME));
        $this->session->set_userdata(ROLE_LABEL, $this->input->post(ROLE_LABEL));
    }
}
