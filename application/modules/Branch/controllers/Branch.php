<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Branch extends MY_Controller {

    var $authAccess;
    var $auth_perm;
    var $authAccessArray;

    public function __construct() {
        
        
        parent::__construct();
        $this->load->model('Branch_model');
        
            if (!$this->ion_auth->logged_in()) {
            redirect('Users/auth/login', 'refresh');
        }
    }

    public function index() {
        $data['view_access'] = $this->user_permission->has_permission('view_branch' , 'access');
        $data['create_access'] = $this->user_permission->has_permission('create_branch' , 'access');
        $data['edit_access'] = $this->user_permission->has_permission('edit_branch' , 'access');
        $data['branches'] = $this->Branch_model->getAllBranch();
        $data['countries'] = $this->Branch_model->getCountries();
        $this->load->template('index', $data);
    }

    // create a new branch
    public function create_branch() {

        $data['branches'] = $this->Branch_model->getAllBranch();
        $data['countries'] = $this->Branch_model->getCountries();
        
        //user access
        $data['view_access'] = $this->user_permission->has_permission('view_branch' , 'access');
        $data['create_access'] = $this->user_permission->has_permission('create_branch' , 'access');
        $data['edit_access'] = $this->user_permission->has_permission('edit_branch' , 'access');
        
        
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

  

}
