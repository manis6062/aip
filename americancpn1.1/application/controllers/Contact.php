<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact extends CI_Controller
{

    private $errors = "";

    public function __construct()
    {
        parent::__construct();

        $this->load->library('pagination');
        $this->form_validation->set_error_delimiters('<div class="error">* ', '</div>');
        // if ( $this->input->post( 'remember' ) ) // set sess_expire_on_close to 0 or FALSE when remember me is checked.
        // $this->config->set_item('sess_expire_on_close', '0'); // do change session config
        //
        // $this->load->library('session');
    }

    public function index()
    {
        $data['title'] = 'Contact Us';
        $data['main_content'] = 'contact';
        $this->load->view('inc/registration', $data);
    }

    public function login()
    {
        if ($this->form_validation->run('contact') == FALSE) {
            $this->index();
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $msg = $this->input->post('message');
            $this->load->library('SimpleEmailService');
            $ses = new SimpleEmailService('AKIAISEC5PBG2F54VL4A', 'ZhRYSpKdUMLRrxPwy878UN+pJmnllAocdcYRpJwZ');

            $ses->enableVerifyPeer(false);
            //print_r($ses->verifyEmailAddress('savrniroj@gmail.com'));
            $m = new SimpleEmailServiceMessage();
            $m->addTo('contact <nirojshakyaimadol@hotmail.com>');
            $m->setFrom($email . '<' . EMAILSENDER . '>');
            $m->setSubject($subject);
            $message = $msg;
            $m->setMessageFromString('', $message);
            $ses->sendEmail($m);
            $this->session->set_flashdata("su_message", "Email Sent Successfully.");
            redirect("contact");
        }
    }

    public function sendmail()
    {
        $contact = $this->ContactModel->getAll();
        $this->load->library('form_validation');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $msg = $this->input->post('message');
        $this->load->library('SimpleEmailService');
        $ses = new SimpleEmailService('AKIAISEC5PBG2F54VL4A', 'ZhRYSpKdUMLRrxPwy878UN+pJmnllAocdcYRpJwZ');

        $ses->enableVerifyPeer(false);
        //print_r($ses->verifyEmailAddress('savrniroj@gmail.com'));
        $m = new SimpleEmailServiceMessage();
        $m->addTo($contact->email);
        //$m -> addTo('contact <saveniroj@gmail.com>');
        $m->setFrom($email . '<' . EMAILSENDER . '>');
        $m->setSubject($subject);
        $message = $msg;
        $m->setMessageFromString('', $message);
        if ($ses->sendEmail($m)) {
            if ($this->uri->segment(1) == 'Contact' || $this->uri->segment(1) == 'contact') {
                $this->session->set_flashdata("su_message", "Email Sent Successfully");
                redirect("contact");
            } else {
                echo "<script>alert('Email Sent Successfully');window.history.back();</script>";
            }
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

