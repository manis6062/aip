<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Custom404
 *
 * @author rh
 */
class Custom404 extends MX_Controller {
        public function __construct()
	{
	        parent::__construct();
	}
 
	public function index()
	{
		$this->output->set_status_header('404');
		$data['content'] = 'errors/error_404';  // View name
		$this->load->view($data);
	}
        
        public function show_error()
	{
		$this->output->set_status_header('404');
		$data['content'] = 'errors/no_permission';  // View name
		$this->load->view($data);
	}
}
