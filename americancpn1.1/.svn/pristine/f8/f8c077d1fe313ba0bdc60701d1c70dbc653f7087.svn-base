
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Newsletter extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->helper('general');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('path');
        $this->load->helper('string');

    }



    public function index() {
        $data['main_content'] = ADMIN_PATH . "news_add_view";
        $this->load->view(ADMIN_PATH . 'inc/template', $data);
    }

    public function sendNewsletter() {
        $data['main_content'] = ADMIN_PATH . "newslettersend_view";
        $this->load->view(ADMIN_PATH . 'inc/template', $data);
    }

}

?>

