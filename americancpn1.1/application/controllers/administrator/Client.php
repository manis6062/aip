<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Client extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('general');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('path');
        $this->load->helper('string');
        $this->load->model('ClientModel');

    }

    public function index()
    {
        $data['head'] = 'Client Management';
        $data['title'] = 'Clients';
        $data['clients'] = $this->ClientModel->getClients();
        $data['title'] = "Clients List";
        $data['main_content'] = ADMIN_PATH . "clients";
        $this->load->view(ADMIN_PATH . 'inc/template', $data);
    }

    public function addClient()
    {

        // From User Table
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim|xss_clean|callback_emailCheck');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[12]|trim');
        $this->form_validation->set_rules('cpassword', 'Password Confirmation', 'required|min_length[5]|max_length[12]|matches[password]|trim', array('matches' => 'Password Doesn\'t Match.'));

        //From Profile Table

        if (($this->input->post('roleid')) && (in_array(2, $this->input->post('roleid')))) {
            $this->form_validation->set_rules('broker_email_id', 'Broker Email ID', 'required|valid_email|callback_checkBrokerEmailId[broker_client]');
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
            $this->clientForm();

        } else {
            if (!empty($this->brokerUserId) && (in_array(2, $this->input->post('roleid')) || in_array(4, $this->input->post('roleid')))) {
                $brokeruserid = $this->brokerUserId;
                $table = $this->table_name;
                $referraluserid = '';

            } elseif (in_array(3, $this->input->post('roleid'))) {
                $referraluserid = $this->referralUserId;
                $table = $this->table;
                $brokeruserid = '';
            } else {
                $brokeruserid = '';
                $referraluserid = '';
                $table = '';
            }

            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->UserModel->insertUser($email, $password, $brokeruserid, $referraluserid, $table);
            redirect(base_url() . 'administrator/client');
        }

    }

    public function clientForm()
    {

        $data['title'] = "Add Client";
//            $data['roles'] = $this->RoleModel->getPublicRoles();
        $data['main_content'] = ADMIN_PATH . "clientForm";
        $this->load->view(ADMIN_PATH . 'inc/template', $data);
    }


}

?>

