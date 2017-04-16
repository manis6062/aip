<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Broker extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->helper('general');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('path');
        $this->load->helper('string');
        $this->load->model('BrokerModel');

    }



    public function index() {

        $data['head'] = 'Broker Management';
        $data['title'] = 'Brokers';
        $data['brokers'] = $this->BrokerModel->getBrokers();
        $data['main_content'] = ADMIN_PATH . "brokers";
        $this->load->view(ADMIN_PATH . 'inc/template', $data);
    }

}