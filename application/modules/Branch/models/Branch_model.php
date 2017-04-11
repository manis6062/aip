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

    public function getBranch(){
          $query = $this->db->get_where($this->_table, array('status' => 1));
          return $query->result();
    }
    
     public function getSubBranch($cat_id) {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where(array('parent_id' => $cat_id, 'status' => 1));
        $query = $this->db->get();
        return $query->result();
    }
    
        public function getCategoryForParentId($parent_id = 0){
          $query = $this->db->get_where($this->_table, array('status' => 1, 'parent_id' => $parent_id));
           $categories = array();
          foreach ($query->result() as $value) {
              $category = array();
              $category['id'] = $value->id;
              $category['name'] = $value->name;
              $category['parent_id'] = $value->parent_id;
              $category['sub_categories'] = $this->getCategoryForParentId($category['id']);
              $categories[$value->id] = $category;
          }
          return $categories;
          
    }
    
    
    
    
    
}
