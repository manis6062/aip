<?php

	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Mail extends CI_Controller
	{
		private $allowed = array();

		public function __construct()
		{
			parent::__construct();
			$this->load->helper('general');
			$this->load->helper('url');
			checkAdminAuth();
			$this->load->library('form_validation');
			$this->load->library('pagination');
			$this->form_validation->set_error_delimiters('<div class="red">', '</div>');
			$this->load->model('AuthModel');
			$this->load->helper('security');
			$this->load->model('RoleModel');
			$this->load->model('EmailsModel');
			$this->load->helper(array('form', 'url', 'captcha'));

		}

		public function index()

			{
				$user_id = $this->session->userdata(USER_ID);
				$user_details = $this->UserModel->getUser($user_id);
				$data['profile_name'] = $user_details->first_name;
			$user_role_details = $this->RoleModel->getRolesConcatByUserId($user_id);
				$data['receivedEmails'] = $this->EmailsModel->received_emails($user_id);
				$data['count_receivedEmails'] = $this->EmailsModel->countAllReceivedItems($user_id);
				$data['main_content'] = ADMIN_PATH . "mailbox";
				$this->load->view(ADMIN_PATH . 'inc/template', $data);
			}

		function sendEmails(){

			$user_id = $this->session->userdata(USER_ID);
			$user_details = $this->UserModel->getUser($user_id);
			$email_sender = $user_details->first_name . ' ' . $user_details->middle_initial . ' ' .  $user_details->last_name;
				        $subject = $this->input->post('subject');
			             $to_emails = $this->input->post('toemails[]');
				$to_new_user = $this->input->post('to_new_user[]');
			             $msg = $this->input->post('msg');
				$name = $this->UserModel->getNameFromEmail($to_emails);
			$receiver_ids = $this->UserModel->getUserIdFromEmail($to_emails);
		            	$this->load->library('SimpleEmailService');
		                $ses = new SimpleEmailService('AKIAISEC5PBG2F54VL4A', 'ZhRYSpKdUMLRrxPwy878UN+pJmnllAocdcYRpJwZ');
		                $ses->enableVerifyPeer(false);
		                $m = new SimpleEmailServiceMessage();
	                     if(count($to_emails) > 0) {
							 $m->addTo($to_emails);
							 }
			            else{
							$m->addTo($to_new_user);
						}
		                $m->setFrom($email_sender.'<'.EMAILSENDER.'>');
		                $m->setSubject($subject);

						// header part of email template
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
								<h3 style="padding:10px; margin:0px; color:#ac6f00;"><img src="'.base_url().'frontend/images/logo.png" height="35px" style="vertical-align:middle;margin-right:15px;">American CPN</h3>
								</div>
								<div class="content" style="padding:10px; font-size:14px;"><p style="font-size:13px;">';
						$msg.= 'Dear User,<br/>';
						$msg.= $this->input->post('msg');
						$msg.= '<br/><br/>';
						$msg.= 'Yours Sincerely,<br/>';
			            $msg.= $email_sender;
						$msg.= 'Americancpn <br/>';

					// footer part of email template
						$msg .='</p></div>
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
						$message = $msg;
	                $m->setMessageFromString('', $message);

	                if($ses->sendEmail($m)){

						$this->EmailsModel->insertEmails('Success', $receiver_ids , $to_new_user );
						redirect(ADMIN_PATH . "mail/sent_mail");
			                }
			else{

				redirect(ADMIN_PATH . "mail/compose");

			}
				}


		function sent_mail(){
			$user_id = $this->session->userdata(USER_ID);
			$data['sentEmails'] = $this->EmailsModel->sent_emails($user_id);
            $sent_emails = $data['sentEmails'];
			$data['count_receivedEmails'] = $this->EmailsModel->countAllReceivedItems($user_id);
			$data['main_content'] = ADMIN_PATH . "sent_mailbox";
			$this->load->view(ADMIN_PATH . 'inc/template', $data);
		}

		function read_mail($mail_id){
			$user_id = $this->session->userdata(USER_ID);
			$user_details = $this->UserModel->getUser($user_id);
			$data['profile_name'] = $user_details->first_name;
			$user_role_details = $this->RoleModel->getRolesConcatByUserId($user_id);
			$data['read_mail'] = $this->EmailsModel->read_mail($mail_id );
			$data['count_receivedEmails'] = $this->EmailsModel->countAllReceivedItems($user_id);
			$this->EmailsModel->changedToSeen($user_id);
			$data['main_content'] = ADMIN_PATH . "read_mail";
			$this->load->view(ADMIN_PATH . 'inc/template', $data);
		}

        function deleteFromInbox($mail_id , $receiver_id){
            $this -> EmailsModel -> deleteEmailsFromInbOx($mail_id , $receiver_id);
            $this -> session -> set_flashdata("su_message", "Email Deleted Successfully.");
            redirect(ADMIN_PATH . "mail");
        }

        function deleteFromSent($mail_id , $receiver_id){
            $this -> EmailsModel -> deleteEmailsFromSent($mail_id , $receiver_id);
            $this -> session -> set_flashdata("su_message", "Email Deleted Successfully.");
            redirect(ADMIN_PATH . "mail");
        }




		function deleteAction($mail_id , $receiver_id){
			$this -> EmailsModel -> deleteEmails($mail_id , $receiver_id);
			$this -> session -> set_flashdata("su_message", "Email Deleted Successfully.");
			redirect(ADMIN_PATH . "mail");
		}

		function permanent_delete($mail_id){
			$this -> EmailsModel -> permanentDelete($mail_id);
			$this -> session -> set_flashdata("su_message", "Email Deleted Successfully.");
			redirect(ADMIN_PATH . "mail/trash_mail");
		}

		function deleteFromTrash($mail_id ,$receiver_id){
			$this -> EmailsModel -> deleteEmailsFromTrash($mail_id , $receiver_id);
			$this -> session -> set_flashdata("su_message", "Email Deleted Successfully.");
			redirect(ADMIN_PATH . "mail/trash_mail");
		}


		function compose($role_id = ''){
			$user_id = $this->session->userdata(USER_ID);
			$user_details = $this->UserModel->getUser($user_id);
			$data['profile_name'] = $user_details->first_name;
			$user_role_details = $this->RoleModel->getRolesConcatByUserId($user_id);
			$data['count_receivedEmails'] = $this->EmailsModel->countAllReceivedItems($user_id);
			$role_id = $this->input->post('role_id');
			$this->load->model('EmailsModel');
			$this->load->model('RoleModel');
		    $data['roles'] = $this->RoleModel->getPublicRoles();
			if($role_id == ''){
				$data['users'] = $this->EmailsModel->getAll();
			}
			else{
				$data['users'] = $this->EmailsModel->getAllByRoles($role_id);
			}
			$data['main_content'] = ADMIN_PATH . "compose_mail";
			$this->load->view(ADMIN_PATH . 'inc/template', $data);
		}

		function trash_mail(){
			$user_id = $this->session->userdata(USER_ID);
			$data['trashEmails'] = $this->EmailsModel->trash_emails($user_id);
			$data['main_content'] = ADMIN_PATH . "trash_mail";
			$this->load->view(ADMIN_PATH . 'inc/template', $data);
		}

		function deleteMultiple(){
			$checkbox = $this->input->post('checkbox');
//            echo '<pre>';
//                print_r($checkbox);
//            echo '</pre>';
//
//
//
//            echo '<pre>';
//           $array = array_keys($checkbox);
//            print_r($array);
//            echo '</pre>';
//
//            die;

			$this -> EmailsModel -> deleteMultipleEmails($checkbox);
			$this -> session -> set_flashdata("su_message", "Email Deleted Successfully.");
			redirect(ADMIN_PATH . "mail");
		}

		function permanentDeleteMultiple(){
			$checkbox = $this->input->post('checkbox');
			$this -> EmailsModel -> permanentDelete($checkbox);
			$this -> session -> set_flashdata("su_message", "Email Deleted Successfully.");
			redirect(ADMIN_PATH . "mail/trash_mail");
		}








		/*-------------------------- Old Codes----------------------------------------*/



	}

?>