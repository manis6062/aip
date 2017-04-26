<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Enquiry
 *
 * @author rh
 */
class Enquiry extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    
    public function information() {
        $this->load->template('information/index');
        
        
    }
    
}
