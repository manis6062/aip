<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Leads extends MY_Controller {


    public function __construct() {
        
        
            parent::__construct();
      
        $this->load->module_model('Courses_model' , 'Courses');
//        
//        
//        
//        var_dump($data['branches']);

        
    }

    public function index() {
        $this->load->template('index');
        
    }
    
     public function create_leads() {
         $data['get_all_countries'] = $this->getAllCountries();
         $data['get_education'] = $this->getAllEducation();
          $courses = $this->Courses_model->getCourses();
           $data['get_groups'] = $this->ion_auth->groups()->result();
           
           $users = $this->ion_auth->users(1)->result();
          foreach ($courses as $value) {
              $course_name[] = $value->name ;
              
          }
          $data['get_courses'] = $course_name;
          
          
          
         $this->load->template('create_leads' , $data);
        
        
    }
    
     
    public function getUserGroups($group_id = NULL) {
        $group_id = $this->input->post('id');
        if(!empty($group_id)){
            $users = $this->ion_auth->users($group_id);
            echo json_encode($users);
        }
        
    }
    
    

  

}
