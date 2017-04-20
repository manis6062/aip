<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Exceptions
 *
 * @author rh
 */
class MY_Controller extends CI_Controller {
    var $authAccess;
    var $auth_perm;
    var $authAccessArray;
    
    
    public function __construct() {
        parent::__construct();
        // User Auth Access
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper(array('url', 'language'));
        $this->lang->load('auth');
      
//         $this->CI =& get_instance();
//         $this->CI->load->model('branch_model');        

//  $this->load->model('my_model');
               // var_dump($this->my_model->getAllBranch());

    }
    
   
    
   
}
