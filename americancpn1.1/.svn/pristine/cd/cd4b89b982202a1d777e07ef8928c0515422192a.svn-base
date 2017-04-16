<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Register extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
            $this->load->library('form_validation');
            $this->load->helper(array('form', 'url', 'captcha'));
            $this->load->model('RoleModel');
            $this->load->model('AffiliateModel');
            $this->load->model('EmailerModel');
            $this->load->model('UserModel');


            /**************** OLD CODE *******************/
			$this->load->library('form_validation');
			$this->load->library('pagination');
			$this->form_validation->set_error_delimiters('<div class="red">', '</div>');
			$this->load->helper(array('form', 'url', 'captcha'));
			$this->load->model('AffiliateModel');
            /**************** OLD CODE *******************/

		}

		function _remap($method, $parameter)
		{
			if (method_exists($this, $method)) {
				$this->$method($parameter);
			} else {
				$this->index($method, $parameter);
			}
		}

		public function index($code = '')
		{
			$data['main_content'] = 'login';
			$this->load->view('inc/registration', $data);
		}


		function signUp()
		{
			$random_number = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
			$vals = array(
				'word' => $random_number,
				'img_path' => './captcha/',
				'img_url' => base_url() . 'captcha/',
				'img_width' => 250,
				'img_height' => 34,
				'expiration' => 7200
			);
			$data['captcha'] = create_captcha($vals);
			$this->session->set_userdata('captchaWord', $data['captcha']['word']);
			$data['states'] = $this->AffiliateModel->getStates();
            $data['roles'] = $this->RoleModel->getPublicRoles();
			$data['title'] = "User Registration";
			$data['main_content'] = 'registration_main';
			$this->load->view('inc/registration', $data);
			/*	$data['main_content'] = 'referrer_reg';
			$this->load->view('inc/registration', $data);*/
		}

		public function addUser()
        {
            ## Role
            $this->form_validation->set_rules('roleId', 'At Least One Role', 'required|trim', array('required' => 'At Least One Role must be checked.'));

            // From User Table
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim|xss_clean|callback_emailCheck');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[12]|trim');
            $this->form_validation->set_rules('cpassword', 'Password Confirmation', 'required|min_length[5]|max_length[12]|matches[password]|trim', array('matches'=> 'Password Doesn\'t Match.'));

            //From Profile Table
           if(($this->input->post('roleid')) && (in_array(2, $this->input->post('roleid')))) {
               $this->form_validation->set_rules('broker_email_id','Broker Email ID', 'required|valid_email|callback_checkBrokerEmailId[broker_client]');
               $this->form_validation->set_rules('ssn', 'SSN', 'required');
               $this->form_validation->set_rules('dob', 'Date of Birth', 'callback_checkDateFormat');
           }
            if(($this->input->post('roleid')) && (in_array(3, $this->input->post('roleid')))) {
                $this->form_validation->set_rules('referrer_email_id','referrer Email ID', 'required|valid_email|callback_checkreferrerEmailId[referrer_line_owner]');

            }

            $this->form_validation->set_rules('first_name', 'First Name', 'required|trim|callback_alpha_space');
            if($this->input->post('middle_initial')) {
                $this->form_validation->set_rules('middle_initial', 'Middle Name', 'trim|callback_alpha_space');
            }
            $this->form_validation->set_rules('last_name', 'Last Name', 'required|trim|callback_alpha_space');
            $this->form_validation->set_rules('primary_phone_number', 'Primary Contact', 'required|callback_validate_phone_number');
            //$this->form_validation->set_rules('gender', 'Gender');
           // $this->form_validation->set_rules('scon', 'Secondary Contact');
            //$this->form_validation->set_rules('cpn', 'Secondary Contact');

            //From Address Table
//            $this->form_validation->set_rules('street', 'Street ', 'callback_alpha_space');
//            $this->form_validation->set_rules('state', 'State');
//            $this->form_validation->set_rules('postal_code', 'Postal Code', 'callback_checkzip');

            //From Business Table
            $this->form_validation->set_rules('site', 'Website ');
            $this->form_validation->set_rules('phone', 'Business Phone');
            $this->form_validation->set_rules('fax', 'Business Fax');
//            $this->form_validation->set_rules('name', 'Business Name ');
//            $this->form_validation->set_rules('dba', 'Doing Business As');

            ## referrer Registration Condition
            if(($this->input->post('roleid')) && (in_array(4,$this->input->post('roleid')))) {
                if(!$this->input->post('broker_email_id')) {
                    $this->form_validation->set_rules('referrer_reg', 'referrer Registration', 'required', array('required' => 'Choose any one'));
                }
                else{
                    $this->form_validation -> set_rules('broker_email_id','Broker Email ID', 'valid_email|callback_checkBrokerEmailId[broker_referrer]');
                }
            }



            /*todo: sundar - move these validation elsewhere once condition builds */
//		$this->form_validation->set_rules('city', 'City ', 'callback_alpha_space');
//		$this->form_validation->set_rules('zip', 'Zip', 'callback_checkzip');

            $this->form_validation->set_rules('userCaptcha', 'Captcha', 'callback_check_captcha');
            $this->input->post('userCaptcha');
//			$form_validation = $this->form_validation;
//			$run = $form_validation->run();

            if ($this->form_validation->run() == FALSE) {
                $this->signUp();
            }
            else {
                $this->UserModel->insertUser();

                redirect(base_url() . 'member');
            }
        }

		function checkwebsiteurl($string_url)
		{
			$reg_exp = "@^(http\:\/\/|https\:\/\/)?([a-z0-9][a-z0-9\-]*\.)+[a-z0-9][a-z0-9\-]*$@i";
			if(preg_match($reg_exp, $string_url) == TRUE){
				return TRUE;
			}
			else{
				$this->form_validation->set_message('checkwebsiteurl', 'URL is invalid format');
				return FALSE;
			}
		}

        public function emailCheck($str)
        {
            $query = $this->db->query("select email from user where email = '$str'");
            if ($query->num_rows() > 0) {
                $this->form_validation->set_message('emailCheck', 'This Email address already used.');
                return FALSE;
            } else {
                return TRUE;
            }
        }


        function checkDateFormat($date)
        {
            if (preg_match("/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/", $date)) {
                if (checkdate(substr($date, 0, 2), substr($date, 3, 2), substr($date, 6, 4))) {
                    $today = date("Y");
                    $date1 = date_create(date('m/d/Y'));
                    $date2 = date_create($date);
                    $diff = date_diff($date2, $date1);
                    if ($today < substr($date, 6, 4)) {
                        $this->form_validation->set_message('checkDateFormat', 'Invalid Date');
                        return FALSE;
                    } elseif ($diff->y < 21) {
                        $this->form_validation->set_message('checkDateFormat', 'You are below 21 years to be our client');
                        return FALSE;

                    } else {
                        return TRUE;
                    }
                } else {
                    $this->form_validation->set_message('checkDateFormat', 'Invalid Date');
                    return false;
                }
            } else {
                $this->form_validation->set_message('checkDateFormat', 'Invalid Date ');
                return false;
            }
        }

        function checkBrokerEmailId($brokeremailid, $tablename){
            $this->brokerUserId ='';
            $query = $this->db->query("SELECT ur.user_id, ur.role_id FROM user_role ur LEFT JOIN user u ON ur.user_id = u.id LEFT JOIN role r ON r.id = ur.role_id WHERE u.email = '$brokeremailid' AND r.value ='broker'");
            if ($query->num_rows() > 0) {
                $this->brokerUserId =$query->row()->user_id;
                $this->table_name = $tablename;
                return True;

            } else {
                $this->form_validation->set_message('checkBrokerEmailId', 'This Broker Doesn\'t Exist');
                return FALSE;
            }
        }

        function checkreferrerEmailId($referreremailid, $tablename){
            $this->referrerUserId ='';
            $query = $this->db->query("SELECT ur.user_id, ur.role_id FROM user_role ur LEFT JOIN user u ON ur.user_id = u.id LEFT JOIN role r ON r.id = ur.role_id WHERE u.email = '$referreremailid' AND r.value ='referrer'");
            if ($query->num_rows() > 0) {
                $this->referrerUserId =$query->row()->user_id;
                $this->table = $tablename;
                return True;

            } else {
                $this->form_validation->set_message('checkBrokerEmailId', 'This Broker Doesn\'t Exist');
                return FALSE;
            }
        }

        function multipleRoleCheckable($roles){
            $rolees = $this->input->post('roleid');
            $nopossible1 = array(2,3);
            $nopossible2 = array(2,4);
            $nopossible3 = array(2,5);
            $nopossible4 = array(2,6);


            return false;

        }




		/************************************************ OLD CODE **************************************************/








		public function referrer($code)
		{
			if (is_array($code)) {
				$code = $this->uri->segment(3);
			}
			$email = $this->AffiliateModel->checkcodeanduseravailability($code);
			if ($email) {
				$data['states'] = $this->AffiliateModel->getStates();
				$data['email'] = $email;
				$data['code'] = $code;
				$data['title'] = "referrer Sign Up";
				$data['main_content'] = 'ref_registration';
				$this->load->view('inc/registration', $data);
			} else {
				redirect(base_url());
			}
		}

		public function alpha_space($str)
		{
			if (preg_match("/^([a-z ])+$/i", $str)) {
				return true;
			} else {
				$this->form_validation->set_message('alpha_space', 'The %s field can only contain Alphabetical Characters.');
				return false;
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

		function checkDateFormats($date)
		{
			if (preg_match("/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/", $date)) {
				if (checkdate(substr($date, 0, 2), substr($date, 3, 2), substr($date, 6, 4))) {
					$today = date("Y");
					$date1 = date_create(date('m/d/Y'));
					$date2 = date_create($date);
					$diff = date_diff($date2, $date1);
					if ($today < substr($date, 6, 4)) {
						$this->form_validation->set_message('checkDateFormat', 'Invalid Date');
						return FALSE;
					} elseif ($diff->y < 21) {
						$this->form_validation->set_message('checkDateFormat', 'You are below 21 years to be our client');
						return FALSE;

					} else {
						return TRUE;
					}
				} else {
					$this->form_validation->set_message('checkDateFormat', 'Invalid Date');
					return false;
				}
			} else {
				$this->form_validation->set_message('checkDateFormat', 'Invalid Date ');
				return false;
			}
		}

		public function emailCheckasdfs($str)
		{
			$query = $this->db->query("select email from user where email = '$str'");
			if ($query->num_rows() > 0) {
				$this->form_validation->set_message('emailCheck', 'This username already used.');
				return FALSE;
			} else {
				return TRUE;
			}
		}

		public function signup_Affiliate()
		{
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->load->database();
			$this->form_validation->set_rules('uname', 'Username', 'trim|xss_clean|callback_username_check');
			$this->form_validation->set_rules('password', 'Password', 'min_length[5]|max_length[12]');
			$this->form_validation->set_rules('cpassword', 'Password Confirmation', 'min_length[5]|max_length[12]|matches[password]');
			$this->form_validation->set_rules('fname', 'First Name', 'callback_alpha_space');
			$this->form_validation->set_rules('lname', 'Last Name', 'callback_alpha_space');
			$this->form_validation->set_rules('email', 'Email', 'valid_email');
			$this->form_validation->set_rules('bname', 'Business Name');
			$this->form_validation->set_rules('pcon', 'Primary Contact', 'callback_validate_phone_number');
			$this->form_validation->set_rules('scon', 'Secondary Contact');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			$this->form_validation->set_rules('state', 'State', 'required');
			$this->form_validation->set_rules('city', 'City ', 'callback_alpha_space');
			$this->form_validation->set_rules('zip', 'Zip', 'callback_checkzip');
			$this->form_validation->set_rules('address', 'Address ', 'required');
			$this->form_validation->set_rules('dob', 'Date of Birth', 'callback_checkDateFormat');
			if ($this->form_validation->run() == FALSE) {
				$this->referrer($this->input->post('code'));
			} else {
				$username = $this->input->post('uname');
				$password = $this->input->post('password');
				$this->AffiliateModel->insertDetail($username, $password);
				$email = $this->input->post('email');
				$subject = 'Successfully Registered As Affiliate in American CPN';
				$msg = '<html>
										<head>
										<meta charset="utf-8">
										<title>Email Template</title>

										</head>

										<body>
										<div class="box" style="padding:0px;width:40%; margin:0 auto;-webkit-border-radius: 5px;
										-moz-border-radius: 5px;
										border-radius: 5px; border:1px solid #ccc;">
										<div class="title" style="-webkit-border-top-left-radius: 5px;
										-webkit-border-top-right-radius: 5px;
										-moz-border-radius-topleft: 5px;
										-moz-border-radius-topright: 5px;
										border-top-left-radius: 5px;
										border-top-right-radius: 5px; background:#ccc; color:#fff;">
										<h3 style="padding:10px; margin:0px; color:#ac6f00;"><img src="' . base_url() . 'frontend/images/logo.png" height="35px" style="vertical-align:middle;margin-right:15px;">American CPN</h3>
										</div>
										<div class="content" style="padding:10px; font-size:14px;"><p style="font-size:13px;">';

				$msg .= 'Please click the URL for referrer Login <a href="' . base_url() . 'admin"> Click Here</a><br>Username: ' . $username . '  <br> Password: ' . $password;
				$msg .= '</p></div>
									<div class="footer" style="-webkit-border-bottom-right-radius: 5px;
									-webkit-border-bottom-left-radius: 5px;
									-moz-border-radius-bottomright: 5px;
									-moz-border-radius-bottomleft: 5px;
									border-bottom-right-radius: 5px;
									border-bottom-left-radius: 5px;background:#ccc; color:#ac6f00; margin:0px; padding:1px 10px;">
									<p>Yours Sincerely,<br>
									American CPN Team</p>
									</div>
									</div>
									</body>
									</html>';
				$this->load->library('SimpleEmailService');
				$ses = new SimpleEmailService('AKIAISEC5PBG2F54VL4A', 'ZhRYSpKdUMLRrxPwy878UN+pJmnllAocdcYRpJwZ');
				$ses->enableVerifyPeer(false);
				$m = new SimpleEmailServiceMessage();
				$m->addTo('contact <' . $email . '>');
				$m->setFrom('American CPN' . '<' . EMAILSENDER . '>');
				$m->setSubject($subject);
				$message = $msg;
				$m->setMessageFromString('', $message);
				$ses->sendEmail($m);
				$this->session->set_flashdata("success_msg_affiliate", "You have successfully registered as Affiliate Plz check your email.");
				redirect(base_url() . 'member');
			}
		}

		function generatePassword($length = 8)
		{
			$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
			$count = mb_strlen($chars);
			for ($i = 0, $result = ''; $i < $length; $i++) {
				$index = rand(0, $count - 1);
				$result .= mb_substr($chars, $index, 1);
			}
			return $result;
		}

		function generateVerificationCode($len = 16)
		{
			$hex = md5("!@#$%^&*" . uniqid("", true));
			$pack = pack('H*', $hex);
			$tmp = base64_encode($pack);
			$uid = preg_replace("#(*UTF8)[^A-Za-z0-9]#", "", $tmp);
			$len = max(4, min(128, $len));
			while (strlen($uid) < $len)
				$uid .= gen_uuid(22);
			return substr($uid, 0, $len);
		}


		public function Profile()
		{
			$vc = $this->uri->segment(3);
			$valid = $this->AffiliateModel->getIncompleteAffiliate($vc);
			if (!empty($valid)) {
				$data['incompleteaffiliate'] = $valid;
				$data['states'] = $this->AffiliateModel->getStates();

				$data['info'] = $valid;
				if ($valid->affiliate_partner_type == 'branch') {
					$data['main_content'] = 'branch_registration';
				} else {
					$data['main_content'] = 'referrer_registration';
				}
				$this->load->view('includes/register', $data);
			} else {
				redirect('register');
			}
		}


		function detailInfo()
		{
			$this->AffiliateModel->insertDetail();
			$domain = $this->input->post('domainname');
			if ($domain == '') {
				$domain = $_SERVER['SERVER_NAME'];
			}
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$email = $this->input->post('aemail');
			$subject = 'Login Detail ';
			$msg = 'Please Point your Domain DNS to this IP: 107.20.142.219. <br>
						And then visit your website Adminpanel: <a href="http://' . $domain . '/admin"> Click Here</a> <br>
						Username: ' . $username . '<br>
						Password: ' . $password . '<br>';
			$this->load->library('SimpleEmailService');
			$ses = new SimpleEmailService('AKIAISEC5PBG2F54VL4A', 'ZhRYSpKdUMLRrxPwy878UN+pJmnllAocdcYRpJwZ');
			$ses->enableVerifyPeer(false);
			$m = new SimpleEmailServiceMessage();
			$m->addTo('contact <' . $email . '>');
			$m->setFrom('CPN America' . '<' . EMAILSENDER . '>');
			$m->setSubject($subject);
			$message = $msg;
			$m->setMessageFromString('', $message);
			$ses->sendEmail($m);
			redirect(base_url() . "member");
		}

		function checkUsername()
		{
			$result = $this->AffiliateModel->checkUserExist();
			echo $result;
		}

		public function check_captcha($str)
		{
			$word = $this->session->userdata('captchaWord');
			if (strcmp(strtoupper($str), strtoupper($word)) == 0) {
				return true;
			} else {
				$this->form_validation->set_message('check_captcha', 'Please enter correct words!');
				return false;
			}
		}

		/**
		 * @param $password
		 */
		public function sendEmail($password)
		{
			$email = $this->input->post('email');
			$subject = 'Successfully Registered As Affiliate in American CPN';
			$msg = '<html>
										<head>
										<meta charset="utf-8">
										<title>Email Template</title>
										</head>
										<body>
										<div class="box" style="padding:0px;width:40%; margin:0 auto;-webkit-border-radius: 5px;
										-moz-border-radius: 5px;
										border-radius: 5px; border:1px solid #ccc;">
										<div class="title" style="-webkit-border-top-left-radius: 5px;
										-webkit-border-top-right-radius: 5px;
										-moz-border-radius-topleft: 5px;
										-moz-border-radius-topright: 5px;
										border-top-left-radius: 5px;
										border-top-right-radius: 5px; background:#ccc; color:#fff;">
										<h3 style="padding:10px; margin:0px; color:#ac6f00;"><img src="' . base_url() . 'frontend/images/logo.png" height="35px" style="vertical-align:middle;margin-right:15px;">American CPN</h3>
										</div>
										<div class="content" style="padding:10px; font-size:14px;"><p style="font-size:13px;">';
			$msg .= 'Please click the URL for referrer Login <a href="' . base_url() . 'admin"> Click Here</a><br>Username: ' . $email . '  <br> Password: ' . $password;
			$msg .= '</p></div>
									<div class="footer" style="-webkit-border-bottom-right-radius: 5px;
									-webkit-border-bottom-left-radius: 5px;
									-moz-border-radius-bottomright: 5px;
									-moz-border-radius-bottomleft: 5px;
									border-bottom-right-radius: 5px;
									border-bottom-left-radius: 5px;background:#ccc; color:#ac6f00; margin:0px; padding:1px 10px;">
									<p>Yours Sincerely,<br>
									American CPN Team</p>
									</div>
									</div>
									</body>
									</html>';
			$this->load->library('SimpleEmailService');
			$ses = new SimpleEmailService('AKIAISEC5PBG2F54VL4A', 'ZhRYSpKdUMLRrxPwy878UN+pJmnllAocdcYRpJwZ');
			$ses->enableVerifyPeer(false);
			$m = new SimpleEmailServiceMessage();
			$m->addTo('contact <' . $email . '>');
			$m->setFrom('American CPN' . '<' . EMAILSENDER . '>');
			$m->setSubject($subject);
			$message = $msg;
			$m->setMessageFromString('', $message);
			$ses->sendEmail($m);
		}
	}
