<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Leads extends MY_Controller {


    public function __construct() {
        
        
            parent::__construct();
      
//        $this->load->module_model('Branch_model' , 'Branch');
//        $data['branches'] = $this->Branch_model->getAllBranch();
//        
//        
//        var_dump($data['branches']);

        
    }

    public function index() {
        
        
//        $data['view_access'] = $this->user_permission->has_permission('view_branch' , 'access');
//        $data['create_access'] = $this->user_permission->has_permission('create_branch' , 'access');
//        $data['edit_access'] = $this->user_permission->has_permission('edit_branch' , 'access');
//        $data['branches'] = $this->branch_model->getAllBranch();
//        $data['countries'] = $this->branch_model->getCountries();
        $this->load->template('index');
        
    }
    
     public function create_leads() {
         $data['get_all_countries'] = $this->getAllCountries();
         $this->load->template('create_leads' , $data);
        
        
    }
    
    

  

}
