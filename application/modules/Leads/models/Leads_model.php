<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Branch_model
 *
 * @author rh
 */
class Leads_model extends CI_Model{
    
   public function __construct() {
       parent::__construct();
   }
   
      public function getServices(){
          $query = $this->db->get_where('services', array('status' => 1));
          return $query->result();
    }
    
    
      public function getEnqServices($service_id){
          $query = $this->db->get_where('enquiry_service_type', array('status' => 1 , 'service_id' => $service_id));
          return $query->result();
    }
    
    public function insert($table , $arr) {
        $this->db->insert($table , $arr);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
  
        
    
        
        
        
       
    
    
    
    
    
}
