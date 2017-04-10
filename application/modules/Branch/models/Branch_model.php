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

    public function getAllBranch(){
        
        
        
        $query = $this->db->get($this->_table);
        $rows = $query->result();
        
        $categories =  array();
        foreach ($rows as $key) {
            $categories[$key->parent_id][] = $key;
        }
        
        return $categories;
    }
    
    
    
}
