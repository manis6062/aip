<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Branch extends MX_Controller {

    var $authAccess;
    var $auth_perm;
    var $authAccessArray;

    public function __construct() {
        parent::__construct();
        $this->load->model('branch_model');
        // User Auth Access
        $this->load->library('form_validation');
        $this->load->helper(array('url', 'language'));
        $this->lang->load('auth');
    }

    public function index() {
        $this->has_permission('branch');
        $data['branches'] = $this->branch_model->getAllBranch();
        $data['countries'] = $this->branch_model->getCountries();
        $this->load->template('index', $data);
    }

    // create a new branch
    public function create_branch() {

        $data['branches'] = $this->branch_model->getAllBranch();
        $data['countries'] = $this->branch_model->getCountries();
        // validate form input
        $this->form_validation->set_rules('branch', "Branch", 'required');

        if ($this->form_validation->run() == TRUE) {

            $status = $this->input->post('status');
            if ($status == 1) {
                $status = 1;
            } else {
                $status = 0;
            }

            $posted_data = array(
                'parent_id' => $this->input->post('country_id'),
                'name' => $this->input->post('branch'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'status' => $status,
            );

            $new_branch_id = $this->branch_model->create_branch($posted_data);
            if ($new_branch_id) {
                $data['message'] = $this->session->set_flashdata('message', "Successfully added");
                $this->load->template('index', $data);
            }
        } else {

            if (validation_errors()) {
                $data['message'] = validation_errors();
                $this->load->template('index', $data);
            }
        }
    }

    function has_permission($perm_name) {

        if (!empty($this->session->userdata('user_id'))) {
            $this->authAccess = $this->ion_auth->getAuthAccess($this->session->userdata('user_id'));
        }
        if (!empty($this->authAccess)) {
            $this->authAccessArray = explode(',', $this->authAccess->auth_ids);
        }

        //user permission
        if (!$this->ion_auth->logged_in()) {
            redirect('Users/auth/login', 'refresh');
        }


        if (!$this->ion_auth->is_admin()) {
            // Check User Access
            $this->auth_perm = $this->ion_auth->getAuthPerm($perm_name);
            $perm_id = $this->auth_perm->id;
            if (!in_array($perm_id, $this->authAccessArray)) {
                show_error(PAGE_NO_PERMISSION);
            }
        }
    }

}
