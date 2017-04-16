<?php

	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Tradeline extends CI_Controller
	{

		private $errors = "";

		public function __construct()
		{
			parent::__construct();

			$this->load->library('pagination');
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="error">* ', '</div>');

			// if ( $this->input->post( 'remember' ) ) // set sess_expire_on_close to 0 or FALSE when remember me is checked.
			// $this->config->set_item('sess_expire_on_close', '0'); // do change session config
//  
			// $this->load->library('session');
		}

		function _remap($method, $params)
		{
			$map = array();
			for ($i = 1; $i < count($params); $i = $i + 2) {
				$map[$params[$i - 1]] = $params[$i];
			}

			if ($method[0] != '_' && method_exists($this, $method))
				return $this->$method($map);
			else
				$this->index($method, $params[0]);
		}

		public function index($user, $code)
		{
			$this->show($user, $code);
		}

		public function show($ref_user, $code)
		{
			$email = $this->TradelineModel->checkcodeanduseravailability($code);
			$refid = $this->TradelineModel->getReferralInfoForClient($ref_user);
			if ($email) {
				$data['refinfo'] = $refid;
				$data['ref_user'] = $ref_user;
				$data['email'] = $email;
				$data['code'] = $code;
				$data['title'] = "Tradelineowner Sign Up";
				$data['states'] = $this->AffiliateModel->getStates();
				$data['main_content'] = 'tradeline_registration';
				$this->load->view('inc/registration', $data);
			} else {
				redirect(base_url());
			}
		}


		function validate_phone_number($value)
		{
			$value = trim($value);
			$match = '/^\(?[0-9]{3}\)?[-. ]?[0-9]{3}[-. ]?[0-9]{4}$/';
			$replace = '/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/';
			$return = '($1) $2-$3';
			if (preg_match($match, $value)) {
				return preg_replace($replace, $return, $value);
			} else {
				$this->form_validation->set_message('validate_phone_number', 'Invalid Contact Number.');
				return false;
			}
		}

		function checkSSN($ssn)
		{
			if (preg_match("/[0-9]{3}\-[0-9]{2}\-[0-9]{4}/", $ssn)) {
				return TRUE;
			} else {
				$this->form_validation->set_message('checkSSN', 'Invalid Social Security Number.');
				return FALSE;

			}
		}

		function checkzip($zip)
		{
			if (preg_match("/[0-9]{5}/", $zip)) {
				return TRUE;
			} else {
				$this->form_validation->set_message('checkzip', 'Invalid Zip Code.');
				return FALSE;

			}
		}

		function checkDateFormat($date)
		{
			if (preg_match("/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/", $date)) {
				if (checkdate(substr($date, 0, 2), substr($date, 3, 2), substr($date, 6, 4))) {
					return true;
				} else {
					$this->form_validation->set_message('checkDateFormat', 'Invalid Date');
					return false;
				}
			} else {
				$this->form_validation->set_message('checkDateFormat', 'Invalid Date');
				return false;
			}
		}


		public function username_check($str)
		{
			$query = $this->db->query("SELECT user_id FROM user WHERE login_name = '$str'");
			// echo $query->num_rows();die;
			if ($query->num_rows() > 0) {
				$this->form_validation->set_message('username_check', 'This username already used.');
				return FALSE;
			} else {
				return TRUE;
			}
		}


		public function alpha_space($str)
		{
			if (!empty($str)) {
				if (preg_match("/^([a-z ])+$/i", $str)) {
					return true;
				} else {
					$this->form_validation->set_message('alpha_space', 'The %s field can only contain Alphabetical Characters.');
					return false;
				}
			} else {

				return true;
			}
		}

		public function tradeline_reg()
		{


			$this->load->helper(array('form', 'url'));
			$this->load->helper('security');

			$this->load->library('form_validation');
			$this->load->database();
			$this->form_validation->set_rules('uname', 'Username', 'required|callback_username_check');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[12]');
			$this->form_validation->set_rules('cpassword', 'Password Confirmation', 'required|min_length[5]|max_length[12]|matches[password]');
			$this->form_validation->set_rules('fname', 'First Name', 'required|callback_alpha_space');
			$this->form_validation->set_rules('payment', 'Cash / Cheque / Paypal', 'required');
			$this->form_validation->set_rules('lname', 'Last Name', 'required|callback_alpha_space');
			if (!empty($_POST['mname'])) {
				$this->form_validation->set_rules('mname', 'Middle Name', 'callback_alpha_space');
			} else {
				$this->form_validation->set_rules('mname', 'Middle Name');
			}
			$this->form_validation->set_rules('to_transunion', 'Transunion');
			$this->form_validation->set_rules('to_equifax', 'Equifax');
			$this->form_validation->set_rules('to_experion', 'Experion');
			$_POST['data_you_want_to_validate_together'] = ($_POST['to_transunion'] . $_POST['to_experion'] . $_POST['to_equifax']);
// if(empty($_POST['to_transunion'] || $_POST['to_experion'] || $_POST['to_equifax'])){
			$this->form_validation->set_rules('data_you_want_to_validate_together', 'One of the credit score', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
			//$this->form_validation->set_rules('bname', 'Business Name');
			if (!empty($_POST['pcon'])) {
				$this->form_validation->set_rules('pcon', 'Primary Contact', 'callback_validate_phone_number');
			} else {
				$this->form_validation->set_rules('pcon', 'Primary Contact');
			}
			if ($this->form_validation->run() == FALSE) {
				$this->index($this->input->post('ref_user'), $this->input->post('code'));

			} else {

				$email = $this->input->post('email');
				$username = $this->TradelineModel->getGenerateUsername();
				$password = $this->TradelineModel->generatePassword();

				$user_id = $this->TradelineModel->insertTradeline($username, $password);
				if ($user_id) {
					$tradeline = $this->TradelineModel->insertInToTradelineTable($user_id);
					if (!empty($tradeline)) {

						$subject = "Registration on American cpn";
						$this->load->library('SimpleEmailService');
						$ses = new SimpleEmailService('AKIAISEC5PBG2F54VL4A', 'ZhRYSpKdUMLRrxPwy878UN+pJmnllAocdcYRpJwZ');

						$ses->enableVerifyPeer(false);
						//print_r($ses->verifyEmailAddress('savrniroj@gmail.com'));
						$m = new SimpleEmailServiceMessage();
						$m->addTo($tradeline->email);
						$m->setFrom('American Cpn <' . EMAILSENDER . '>');
						$m->setSubject($subject);
						$msg = '<div class="box" style="padding:0px;width:40%; margin:0 auto;-webkit-border-radius: 5px;
								-moz-border-radius: 5px;
								border-radius: 5px; border:1px solid #ccc;">
								<div class="title" style="-webkit-border-top-left-radius: 5px;
								-webkit-border-top-right-radius: 5px;
								-moz-border-radius-topleft: 5px;
								-moz-border-radius-topright: 5px;
								border-top-left-radius: 5px;
								border-top-right-radius: 5px; background:#ccc; color:#fff;">';
						$msg .= '<h3 style="padding:10px; margin:0px; color:#ac6f00;"><img src="' . base_url() . 'style/img/logofront.png" height="35px" style="vertical-align:middle;margin-right:15px;">America Cpn</h3></div>';
						$msg .= '<div class="content" style="padding:10px; font-size:14px;">';
						$msg .= '<p style="font-size:13px;">Hello <strong>' . $tradeline->to_fname . '</strong> You are registered successfully in americancpn website. Your Login credentials for the site is:</p>';
						$msg .= '<p style="font-size:13px;">Site Url: <a href="' . base_url() . '">' . base_url() . '</a><br>Site Admin Url: <a href="' . base_url() . 'admin">' . base_url() . 'admin</a><br>Username: ' . $username . '<br>Password: ' . $password . '</p><br></div>';
						$msg .= '<div class="footer" style="-webkit-border-bottom-right-radius: 5px;
								-webkit-border-bottom-left-radius: 5px;
								-moz-border-radius-bottomright: 5px;
								-moz-border-radius-bottomleft: 5px;
								border-bottom-right-radius: 5px;
								border-bottom-left-radius: 5px;background:#ccc; color:#ac6f00; margin:0px; padding:1px 10px;">';
						$msg .= '<p>Yours Sincerely,<br>American CPN Team</p></div></div>';
						$message = $msg;
						$m->setMessageFromString('', $message);
						$this->session->set_flashdata("su_message", "Tradeline Owner Added Successfully");
						$ses->sendEmail($m);
					}
				} else {
					$this->session->set_flashdata("su_message", "Error while creating tradeline.");
					$this->index($this->input->post('ref_user'), $this->input->post('code'));
				}
				$this->session->set_flashdata("success_msg_affiliate", "You have successfully registered as Affiliate Plz check your email.");
				redirect(base_url() . 'tradeline/success');
			}
		}

		function success()
		{

			$data['title'] = "Tradelineowner Register Success";
			$data['main_content'] = 'tradeline_registration_success';

			$this->load->view('inc/registration', $data);

		}


	}

	/* End of file welcome.php */
	/* Location: ./application/controllers/welcome.php */