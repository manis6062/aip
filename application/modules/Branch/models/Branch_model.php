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
class Branch_model extends CI_Model{
    public $_table = 'branch';

  
    
    public function getCountries(){
          $query = $this->db->get_where($this->_table, array('status' => 1 , 'parent_id' => 0));
          return $query->result();
    }

     public function getAllBranch(){
            $query = $this->db->query("SELECT parent.name as country ,child.name, child.email ,child.phone,child.status ,parent.id, child.id as child_id, CONCAT(child.name, ' (', parent.name , ')' ) AS title
                                       FROM branch AS parent
                                       JOIN branch AS child
                                       ON (child.parent_id = parent.id) where child.status = 1");
            return $query->result();
        }
        
         public function create_branch($posted_date){
            if(!empty($posted_date)){
                $this->db->insert($this->_table , $posted_date);
                return $this->db->insert_id();
            }
        }
        
        
        
       
    
    
    
    
    
}
