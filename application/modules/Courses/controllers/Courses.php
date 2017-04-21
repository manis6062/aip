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
         $data['get_all_courses'] = $this->courses_model->getCourses();
            $this->load->template('index' , $data);
    }
    
    
}
