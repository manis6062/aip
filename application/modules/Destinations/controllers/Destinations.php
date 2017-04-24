<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Destinations extends MY_Controller {


    public function __construct() {
        
        
        parent::__construct();
        $this->load->model('Destinations_model');
        
            if (!$this->ion_auth->logged_in()) {
            redirect('Users/auth/login', 'refresh');
        }
    }

    public function index() {
        $data['view_access'] = $this->user_permission->has_permission('view_destination' , 'access');
        $data['create_access'] = $this->user_permission->has_permission('create_destination' , 'access');
        $data['edit_access'] = $this->user_permission->has_permission('edit_destination' , 'access');
        $data['destinations'] = $this->Destinations_model->getDestinations();
        $this->load->template('index', $data);
    }

    // create a new branch
    public function create_destination() {

        $data['destinations'] = $this->Destinations_model->getDestinations();

        
        //user access
        $data['view_access'] = $this->user_permission->has_permission('view_destination' , 'access');
        $data['create_access'] = $this->user_permission->has_permission('create_destination' , 'access');
        $data['edit_access'] = $this->user_permission->has_permission('edit_destination' , 'access');
        
        
        // validate form input
        $this->form_validation->set_rules('name', "Destination", 'required');
        $this->form_validation->set_rules('description', "Description", 'required');


        if ($this->form_validation->run() == TRUE) {

            $status = $this->input->post('status');
            if ($status == 1) {
                $status = 1;
            } else {
                $status = 0;
            }

            $posted_data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'status' => $status,
            );

            $new_destination_id = $this->Destinations_model->create_destinations($posted_data);
            if ($new_destination_id) {
                $data['message'] = $this->session->set_flashdata('message', "Successfully Added");
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
