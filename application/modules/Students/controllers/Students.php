<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends MY_Controller {


    public function __construct() {
        
        
            parent::__construct();
      
        $this->load->model('Students_model');
    }

    public function index() {

        $data['getAllStudents'] = $this->Students_model->getAllStudents();
        $this->load->template('index' , $data);
        
    }
    
     public function create_student() {
        $this->load->template('create_student');
        
    }
    
    

  

}
