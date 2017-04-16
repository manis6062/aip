<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Tradeline extends AdminController
{
    private $allowed = array();
    private $errors = "";

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->form_validation->set_error_delimiters('<div class="red">', '</div>');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('path');
        $this->load->helper('general');
        $this->load->model('AuthModel');
        $this->load->model('TradelineModel');
        $this->load->model('CardTypeModel');
        checkAdminAuth();
        $this->load->helper('security');
    }

    public function index()
    {
        $this->show($page = '');
    }

    function show()
    {
        $data['flag'] = '';
        $data['allowed'] = $this->allowed;
        $data['error'] = $this->errors;
        $data['usertype'] = checkUserType();
        $data['title'] = "List Tradeline Schemes";
        $data['main_content'] = ADMIN_PATH . "tradelineschemes_view";
        $this->load->view(ADMIN_PATH . 'inc/template', $data);
    }


    function tradelineForm()
    {
        $data['allowed'] = $this->allowed;
        $data['error'] = $this->errors;
        $data['title'] = "add tradeline";
        $data['card_types'] = $this->CardTypeModel->getCardTypesArray();
        $data['card_names'] = '';
        $owners = array();
        $roleName = $this->roleName;
        if ($roleName == BROKER || $roleName == REFERRER || $roleName == SUPER_BROKER) {
            $owners = $this->UserModel->getTradelineOwners($this->session->userdata(USER_ID));
        } else {
            $owners = array($this->session->userdata(USER_ID) => $this->session->userdata(NAME));
        }
        $data['owners'] = $owners;
        $usertype = checkUserType();
        $data['usertype'] = $usertype;
        $data['main_content'] = ADMIN_PATH . "tradelineForm";
        $this->load->view(ADMIN_PATH . 'inc/template', $data);
    }

    function tradelines()
    {
        $data['tradelines'] = $this->TradelineModel->getTradelines();
        $data['title'] = "Tradelines";
        $data['main_content'] = ADMIN_PATH . "tradelines";
        $this->load->view(ADMIN_PATH . 'inc/template', $data);
    }

    function addTradeline()
    {
        if ($this->TradelineModel->insertTradeline()) {
            redirect(ADMIN_PATH . 'tradeline/tradelines');
        }
    }

    function getCardNames()
    {
        echo json_encode($this->TradelineModel->getCardNames($this->input->get('type')));
    }


    function tradelinecardschemes($owner_id, $card_detail_id, $owner_name)
    {
        $data['availableamountforscheme'] = $this->TradelineModel->getavailableschemebalance($card_detail_id);
        $data['flag'] = 'scheme';
        $data['getdetailsofcard'] = $this->TradelineModel->getcarddetails($card_detail_id);
        $data['schemeList'] = $this->TradelineModel->getAllByScheme($card_detail_id);
        $data['allowed'] = $this->allowed;
        $data['error'] = $this->errors;
        $data['usertype'] = checkUserType();
        $data['owner_id'] = $owner_id;
        $data['card_detail_id'] = $card_detail_id;
        $data['owner_name'] = $owner_name;
        $data['title'] = "List Tradeline Schemes";
        $data['title1'] = "Generate Card Schemes";
        $data['main_content'] = ADMIN_PATH . "tradelineschemes_view";
        $this->load->view(ADMIN_PATH . 'inc/template', $data);
    }

    function generatescheme()
    {
        $flag = FALSE;
        foreach ($this->input->post('amount') as $key => $value) {
            $charge = $this->input->post('charge');
            $charge = $charge[$key];
            if ($this->TradelineModel->generatescheme($value, $charge, $this->input->post('card_detail_id'))) {
                $flag = TRUE;
            } else {
                $flag = FALSE;
            }
        }
        if ($flag) {
            $this->session->set_flashdata('su_message', 'Scheme Generated Successful.');
            redirect('administrator/tradeline');
        } else {
            $this->session->set_flashdata('su_message', 'Scheme Generated Unsuccessful.');
            redirect('administrator/tradeline');
        }
    }

    function card_types()
    {
        $data['data'] = $this->CardTypeModel->getCards();
        $data['title'] = "";
        $data['main_content'] = ADMIN_PATH . "cards";
        $this->load->view(ADMIN_PATH . 'inc/template', $data);
    }
}

?>