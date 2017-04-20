<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    
    public function __construct() {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('Users/auth/login', 'refresh');
        }
    }

	public function index()
	{
            
		$this->load->template('dashboard_view');
	}
}
