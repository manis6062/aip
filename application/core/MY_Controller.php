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
    }
    
      function has_permission($perm_name) {

        if (!empty($this->session->userdata('user_id'))) {
            $this->authAccess = $this->ion_auth->getAuthAccess($this->session->userdata('user_id'));
        }
        if (!empty($this->authAccess)) {
            $this->authAccessArray = explode(',', $this->authAccess->auth_ids);
        }

        //user permission
        if (!$this->ion_auth->logged_in()) {
            redirect('Users/auth/login', 'refresh');
        }


        if (!$this->ion_auth->is_admin()) {
            // Check User Access
            $this->auth_perm = $this->ion_auth->getAuthPerm($perm_name);
            $perm_id = $this->auth_perm->id;
            if (!in_array($perm_id, $this->authAccessArray)) {
                show_404();
            }
        }
    }
}
