<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of my_model
 *
 * @author manish
 */
class My_model extends CI_Model{
    //put your code here
     public function getAllBranch(){
            $query = $this->db->query("SELECT parent.name as country ,child.name, child.email ,child.phone,child.status ,parent.id, child.id as child_id, CONCAT(child.name, ' (', parent.name , ')' ) AS title
                                       FROM branch AS parent
                                       JOIN branch AS child
                                       ON (child.parent_id = parent.id) where child.status = 1 order by country ");
            return $query->result();
        }
}
