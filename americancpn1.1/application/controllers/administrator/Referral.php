<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Referral extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->helper('general');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('path');
        $this->load->helper('string');
        $this->load->model('ReferralModel');

    }



    public function index() {

        $data['head'] = 'Referral Management';
        $data['title'] = 'Referrals';
        $data['referrals'] = $this->ReferralModel->getReferrals();
        $data['main_content'] = ADMIN_PATH . "referrals";
        $this->load->view(ADMIN_PATH . 'inc/template', $data);
    }
    public function referralForm() {
        $random_number = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
        $vals = array(
            'word' => $random_number,
            'img_path' => './captcha/',
            'img_url' => base_url() . 'captcha/',
            'img_width' => 250,
            'img_height' => 34,
            'expiration' => 7200
        );
        $data['main_content'] = ADMIN_PATH . "referralForm";
        $this->load->view(ADMIN_PATH . 'inc/template', $data);
    }
    public function addreferral()
    {

        // From User Table
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim|xss_clean|callback_emailCheck');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[12]|trim');
        $this->form_validation->set_rules('cpassword', 'Password Confirmation', 'required|min_length[5]|max_length[12]|matches[password]|trim', array('matches' => 'Password Doesn\'t Match.'));

        //From Profile Table

        if (($this->input->post('roleid')) && (in_array(2, $this->input->post('roleid')))) {
            $this->form_validation->set_rules('referral_email_id', 'referral Email ID', 'required|valid_email|callback_checkreferralEmailId[referral_referral]');
            $this->form_validation->set_rules('ssn', 'SSN', 'required');
            $this->form_validation->set_rules('dob', 'Date of Birth', 'callback_checkDateFormat');
        }

        $this->form_validation->set_rules('first_name', 'First Name', 'required|trim|callback_alpha_space');
        if ($this->input->post('middleInitial')) {
            $this->form_validation->set_rules('middle_initial', 'Middle Name', 'trim|callback_alpha_space');
        }
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|trim|callback_alpha_space');
        $this->form_validation->set_rules('primary_phone_no', 'Primary Contact', 'required|callback_validate_phone_number');

        if ($this->form_validation->run() == FALSE) {
            $this->referralForm();

        } else {
            if (!empty($this->referralUserId) && (in_array(2, $this->input->post('roleid')) || in_array(4, $this->input->post('roleid')))) {
                $referraluserid = $this->referralUserId;
                $table = $this->table_name;
                $referraluserid = '';

            } elseif (in_array(3, $this->input->post('roleid'))) {
                $referraluserid = $this->referralUserId;
                $table = $this->table;
                $referraluserid = '';
            } else {
                $referraluserid = '';
                $referraluserid = '';
                $table = '';
            }

            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->UserModel->insertUser($email, $password, $referraluserid, $referraluserid, $table);
            redirect(base_url() . 'administrator/referral');
        }

    }





}
