<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Member extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();

			$this->load->library('form_validation');
			$this->load->library('pagination');
			$this->form_validation->set_error_delimiters('<div class="red">', '</div>');
			$this->load->helper(array('form', 'url'));
			$this->load->helper('security');
		}

		public function index()
		{
			$data['title'] = 'LOG IN';
			$data['main_content'] = 'login';
			$userdata = array(
				USER_ID => '',
				ROLES => '',
				AUTHS => '',
				CAPTCHA => '',
				NAME => ''
			);
			$this->session->set_userdata($userdata);
			$this->load->view('inc/registration', $data);
		}

		public function signin()
		{
			if ($this->form_validation->run('login') == FALSE) {
				$this->session->set_flashdata('message', '<font color="#FF0000">Username and Password are required fields</font>');
				redirect('member');
			} else {
				$user_id = $this->UserModel->login($this->security->sanitize_filename($this->input->post('username')), $this->security->sanitize_filename($this->input->post('password')));
				if ($user_id) {
					redirect(base_url() . 'administrator/home', 'refresh');
				} else {
					$this->session->set_flashdata('message', '<font color="#FF0000">Username and Password didn\'t match</font>');
					redirect('member');
				}
			}
		}

		public function check()
		{
			$data['main_content'] = 'register';
			$this->load->view('includes/affregister', $data);
		}

		function logout()
		{
			$this->session->unset_userdata(USER_ID);
			$this->session->unset_userdata(AUTHS);
			$this->session->unset_userdata(ROLES);
			redirect(base_url() . 'member', 'refresh');
		}
	}
