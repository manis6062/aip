<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Leads extends MY_Controller {


    public function __construct() {
        
        
            parent::__construct();
        $this->load->model('Leads_model');
        $this->load->module_model('Courses_model' , 'Courses');
        $this->load->module_model('Destinations_model' , 'Destinations');
//        
//        
//        var_dump($data['branches']);

        
    }

    public function index() {
        $this->load->template('index');
        
    }
    
     public function create_leads() {
         $data['get_all_countries'] = $this->getAllCountries();
          $courses = $this->Courses_model->getCourses();
          $data['get_groups'] = $this->ion_auth->groups()->result();
          $data['get_destinations'] = $this->Destinations_model->getDestinations();       
          foreach ($courses as $value) {
              $course_name[] = $value->name ;
              
          }
          $data['get_courses'] = $course_name;
          
          $data['services'] = $this->Leads_model->getServices();
         $this->load->template('create_leads' , $data);
        
        
    }
    
     
    public function getUserGroups($group_id = NULL) {
        $group_id = $this->input->post('id');
        if(!empty($group_id)){
            $users = $this->ion_auth->users($group_id)->result();
            echo json_encode($users);
        }
        
    }
    
    
        public function getEnquiryServices($id = NULL) {
        $id = $this->input->post('id');
        if(!empty($id)){
            $enq_services = $this->Leads_model->getEnqServices($id);            
            echo json_encode($enq_services);
        }
        
    }
    
    

  

}
