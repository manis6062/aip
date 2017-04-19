<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User_permission
 *
 * @author manish
 */
class User_permission {
    
    protected $CI;
    var $authAccess;
    var $auth_perm;
    var $authAccessArray;
    
    
    public function __construct() {
        // User Auth Access
        $this->CI =& get_instance();
        $this->CI->load->library('session');
        $this->CI->load->library('form_validation');
        $this->CI->load->helper(array('url', 'language'));
        $this->CI->load->library('ion_auth');
        $this->CI->lang->load('auth');
        
    }
    
      function has_permission($perm_name , $return = NULL) {
           //user permission
        if (!$this->CI->ion_auth->logged_in()) {
            redirect('Users/auth/login', 'refresh');
        }
        if (!empty($this->CI->session->userdata('user_id'))) {
            $this->CI->authAccess = $this->CI->ion_auth->getAuthAccess($this->CI->session->userdata('user_id'));
            }
        if (!empty($this->CI->authAccess)) {
            $this->CI->authAccessArray = explode(',', $this->CI->authAccess->auth_ids);
        }
        if (!$this->CI->ion_auth->is_admin()) {
            // Check User Access
            $this->CI->auth_perm = $this->CI->ion_auth->getAuthPerm($perm_name);
            $perm_id = $this->CI->auth_perm->id;
            if (!in_array($perm_id, $this->CI->authAccessArray)) {
                if($return){
                    return FALSE;
                }else{
               show_error("You do not have permission for this action.");
                }
            }
            else{
            return TRUE;
        }
        }
        
    }
}
