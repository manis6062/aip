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
          $now = date('Y-m-d H:i:s');
          if($_POST){
              $this->user_permission->has_permission('create_lead');
              $data['title'] = "Add Leads";
        
              
              $education = array('degree' => $this->input->post('degree'),
                'university' => $this->input->post('university'),
                'affiliate_university' => $this->input->post('affiliate_university'),
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date'));
            $education_id = $this->Leads_model->insert('education' , $education);
              
            $students = array(
                 'salutation' => $this->input->post('salutation'),
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'dob' => date("Y-m-d",strtotime(str_replace('/','-',$this->input->post('dob')))),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'mobile' => $this->input->post('mobile'),
                'current_address' => $this->input->post('current_address'),
                'permanent_address' => $this->input->post('permanent_address'),
                'country' => $this->input->post('country'),
                'fathers_name' => $this->input->post('fathers_name'),
                'mothers_name' => $this->input->post('mothers_name'),
                'guardians_name' => $this->input->post('mothers_name'),
                'nationality' => $this->input->post('nationality'),
                'referred_by' => $this->input->post('referred_by'),
                'remarks' => $this->input->post('remarks'),
                
                'created_by' => $this->session->userdata('id'),
                'created_on' => $now,
                'education_id' => $education_id,
            );            
            $student_id = $this->Leads_model->insert('students' , $students);

             
             // Student Enquiry Service
            $enquiry_service = array(
                'enquiry_student_id' => $this->input->post('assigned_to'),
                'enquiry_service_type_id' => $student_id,
                'date' => $now,
            );
            $enquiry_service_id =  $this->Leads_model->insert('enquiry' , $enquiry_service);
            
            
            
             // Assigned Post & Service Type
            $assigned = array(
                'counsellor_job_user_id' => $this->input->post('assigned_to'),
                'status' => 1,
                'enquiry_id' => $enquiry_service_id,
                'date' => $now,
            );
             $this->Leads_model->insert('counsellor_job' , $assigned);
             
             
            
          }
          
          
          
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
