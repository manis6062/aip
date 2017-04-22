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
class Courses_model extends CI_Model{
    public $_table = 'course';

  
    
    public function getCourses(){
          $query = $this->db->get_where($this->_table, array('status' => 1));
          return $query->result();
    }
  
    
         public function create_course($posted_date){
            if(!empty($posted_date)){
                $this->db->insert($this->_table , $posted_date);
                return $this->db->insert_id();
            }
        }
        
     
    
    
}
