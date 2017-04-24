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
   
   public function getAllDestination() {
       $this->load->module_model('Destinations_model' , 'Destinations');
       $this->Destinations_model->getDestinations();       
   }

  
        
    
        
        
        
       
    
    
    
    
    
}
