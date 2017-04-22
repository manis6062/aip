<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Courses
 *
 * @author rh
 */
class Courses extends MY_Controller {
    
    public function __construct() {
            parent::__construct();
            $this->load->model('courses_model');
               if (!$this->ion_auth->logged_in()) {
            redirect('Users/auth/login', 'refresh');
        }
        
    }
    
     public function index() {
         $data['view_access'] = $this->user_permission->has_permission('view_course' , 'access');
        $data['create_access'] = $this->user_permission->has_permission('create_course' , 'access');
        $data['edit_access'] = $this->user_permission->has_permission('edit_course' , 'access');
         $data['get_all_courses'] = $this->courses_model->getCourses();
         $this->load->template('index' , $data);
    }
    
    
        // create a new branch
    public function create_course() {

        $data['get_all_courses'] = $this->courses_model->getCourses();

        
        //user access
        $data['view_access'] = $this->user_permission->has_permission('view_course' , 'access');
        $data['create_access'] = $this->user_permission->has_permission('create_course' , 'access');
        $data['edit_access'] = $this->user_permission->has_permission('edit_course' , 'access');
        
        
        // validate form input
        $this->form_validation->set_rules('course', "Course", 'required');
        $this->form_validation->set_rules('duration', "Duration", 'required');
        $this->form_validation->set_rules('fee', "Fee", 'required');


        if ($this->form_validation->run() == TRUE) {

            $status = $this->input->post('status');
            if ($status == 1) {
                $status = 1;
            } else {
                $status = 0;
            }

            $posted_data = array(
                'name' => $this->input->post('course'),
                'duration' => $this->input->post('duration'),
                'fee' => $this->input->post('fee'),
                'description' => $this->input->post('description'),
                'status' => $status,
            );

            $new_course_id = $this->courses_model->create_course($posted_data);
            if ($new_course_id) {
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
