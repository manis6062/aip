<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Tradelineowner extends CI_Controller
	{
		private $allowed = array();
		private $errors = "";

		public function __construct()
		{
			parent::__construct();
			$this->load->library('FORM_VALIDATION');
			$this->form_validation->set_error_delimiters('<div class="red">', '</div>');
			$this->load->helper(array('form', 'url'));
			$this->load->helper('path');
			$this->load->helper('general');
			$this->load->model('CreditcardModel');
			$this->load->model('PaymentModel');
			$this->load->model('TradelineModel');
			$this->load->model('ReferralModel');
			$this->load->model('AffiliateModel');
			$this->load->model('EmailerModel');
			$this->load->model('ClientModel');
			$this->load->model('AuthModel');
			$this->load->model('TradelineOwnerModel');
		}

		public function index()
		{
			checkAdminAuth();
			$this->getTradelineOwners($page = '');
		}

		function getTradelineOwners($page = '')
		{
			$data['ownerList'] = $this->TradelineOwnerModel->getAllWithPayments();
			$refid = $this->AffiliateModel->getReferralid($this->session->userdata(USER_ID));
			$data['sumOfReceivableAmount'] = $this->CreditcardModel->sumOfAmountofReceivable($refid);
			$data['sumOfCollectableAmount'] = $this->CreditcardModel->sumOfAmountofCollectable($refid);
			$data['allowed'] = $this->allowed;
			$data['error'] = $this->errors;
			$data['usertype'] = checkUserType();
			$data['title1'] = "Add Tradeline Owner";
			$data['title'] = "List of Tradeline Owners";
			$masterauth = new AuthModel();
			$data['mas_auth'] = $masterauth->getAllAuth();
			$data['title'] = "Add User";
			$data['main_content'] = ADMIN_PATH . "tradelineowner_view";
			$this->load->view(ADMIN_PATH . 'inc/template', $data);
		}

		function view($user_id)
		{
			$this->load->model('TradelineModel');
			$data['tradelineowner'] = $this->TradelineModel->getSingleUsersForUserId($user_id);
			$data['ownerList'] = $this->TradelineOwnerModel->tradelineownerWithPayment($data['tradelineowner']->to_id);
			$data['sumOfCollectableAmountTradelineOwner'] = $this->CreditcardModel->sumOfAmountofCollectableTradelineOwner($data['tradelineowner']->to_id);
			$data['sumOfReceivableAmountTradelineOwner'] = $this->CreditcardModel->sumOfAmountofReceivableTradelineOwner($data['tradelineowner']->to_id);
			$data['title'] = "Tradeline Owner";
			$data['title2'] = "Payments of";
			$data['main_content'] = ADMIN_PATH . "tradelineownerview_view";
			$this->load->view(ADMIN_PATH . 'inc/template', $data);
		}

		function add()
		{
			$data['allowed'] = $this->allowed;
			$data['error'] = $this->errors;
			$data['states'] = $this->AffiliateModel->getStates();
			$data['usertype'] = checkUserType();
			$data['title'] = "Add Tradeline Owner";
			$data['ref_id'] = $this->ReferralModel->getReferralIdFromUserId($this->session->userdata(USER_ID));
			$data['main_content'] = ADMIN_PATH . "tradelineowner_add";
			$this->load->view(ADMIN_PATH . "inc/template", $data);

		}

		function addAction()
		{
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->load->database();
			$this->form_validation->set_rules('uname', 'Username', 'required|callback_username_check');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[12]');
			$this->form_validation->set_rules('cpassword', 'Password Confirmation', 'required|min_length[5]|max_length[12]|matches[password]');
			$this->form_validation->set_rules('fname', 'First Name', 'required|callback_alpha_space');
			$this->form_validation->set_rules('payment', 'Cash / Cheque / Paypal / Square Cash', 'required');
			$this->form_validation->set_rules('lname', 'Last Name', 'required|callback_alpha_space');
			$this->form_validation->set_rules('mname', 'Middle Name', 'callback_alpha_space');
			$this->form_validation->set_rules('to_transunion', 'to_transunion');
			$this->form_validation->set_rules('to_experion', 'to_experion');
			$this->form_validation->set_rules('to_equifax', 'to_equifax');

			$_POST['data_you_want_to_validate_together'] = ($_POST['to_transunion'] . $_POST['to_experion'] . $_POST['to_equifax']);
			$this->form_validation->set_rules('data_you_want_to_validate_together', 'One of the credit score', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
			$this->form_validation->set_rules('pcon', 'Primary Contact');
			if ($this->form_validation->run() == FALSE) {
				$this->add();
			} else {
				$username = $this->input->post('uname');
				$password = $this->input->post('password');
				$user_id = $this->UserModel->insertUsersIntoUserTable($username, $password, 6);
				if ($user_id) {
					$tradelineowner = $this->TradelineOwnerModel->insertInToTradelineowner($user_id);
					if (!empty($tradelineowner)) {
						$tradelineowner_email = $tradelineowner->email;
						$tradelineowner_login_name = $tradelineowner->login_name;
						$tradelineowner_password = $password;
						$tradelineowner_full_name = $tradelineowner->full_name;
						$referral_id = $this->ReferralModel->getReferralIdFromUserId($this->session->userdata(USER_ID));
						$referral_details = $this->AffiliateModel->getReferralDetailByRefId($referral_id);
						$referral_email = $referral_details->affiliate_email;
						if
						(!empty($tradelineowner_email)
						) {
							$this->EmailerModel->tradelineownerRegistrationFromReferral($tradelineowner_email, $tradelineowner_full_name, $referral_email, $tradelineowner_login_name, $tradelineowner_password);
						}
						$this->session->set_flashdata("su_message", "Tradeline Owner Added Successfully");
					}
				} else {
					$this->session->set_flashdata("su_message", "Error while creating tradeline owner.");
					$this->index($this->input->post('ref_user'), $this->input->post('code'));
				}
				$this->session->set_flashdata("success_msg_affiliate", "Successfully New Tradeline Owner Registered.");
				redirect(ADMIN_PATH . 'tradelineowner');
			}
		}

		function addCARDREQUEST()
		{
			$rcode = $this->getGenerateCode();
			if ($this->TradelineOwnerModel->insert($rcode)) {
				$this->EmailerModel->addCARDREQUEST($rcode);
			} else {
				$this->session->set_flashdata("su_message", "Error while adding row.");
			}
			redirect(ADMIN_PATH . "tradelineowner");
		}

		function getGenerateCode()
		{
			$code = '';
			$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
			for ($i = 0; $i < 15; $i++) {
				$code .= $characters[rand(0, strlen($characters) - 1)];
			}
			$query = $this->db->query("SELECT rcode FROM nc_tradeline_owner WHERE rcode = '$code'");
			if ($query->num_rows() > 0) {
				return $this->getGenerateCode();
			} else {
				return $code;
			}
		}

		function carddetails($owner_id, $owner_name)
		{
			$cardList = $this->CreditcardModel->getAllCards($owner_id);
			$data['cardList'] = $cardList;
			$data['allowed'] = $this->allowed;
			$data['error'] = $this->errors;
			$data['usertype'] = checkUserType();
			$data['owner_id'] = $owner_id;
			$data['owner_name'] = $owner_name;
			$data['title'] = str_replace("_", " ", $owner_name) . "    Tradelines";
			$data['main_content'] = ADMIN_PATH . "tradelineownercard_view";
			$this->load->view(ADMIN_PATH . 'inc/template', $data);
		}

		function addCard($owner_id = '', $owner_name = '')
		{
			$data['allowed'] = $this->allowed;
			$data['error'] = $this->errors;
			$data['card_lists'] = $this->TradelineOwnerModel->getCardLists();
			$data['owner_id'] = $owner_id;
			$data['owner_name'] = $owner_name;
			$data['title'] = "Add New Credit Card of " . str_replace("_", " ", $owner_name);
			$data['ref_id'] = $this->ReferralModel->getReferralIdFromUserId($this->session->userdata(USER_ID));
			$data['main_content'] = ADMIN_PATH . "card_add";
			$this->load->view(ADMIN_PATH . "inc/template", $data);

		}

		function addCardAction($to_id, $to_name)
		{
			$this->form_validation->set_rules('card_name', 'Card Type', 'required');
			$this->form_validation->set_rules('card_type', 'Card Type');
			if (!empty($_POST['bank'])) {
				$this->form_validation->set_rules('bank', 'Issued Bank', 'callback_alpha_space');
			} else {
				$this->form_validation->set_rules('bank', 'Issued Bank');
			}
			if (!empty($_POST['credit_limit'])) {
				$this->form_validation->set_rules('credit_limit', 'Credit Limit', 'is_natural_no_zero');
			} else {
				$this->form_validation->set_rules('credit_limit', 'Credit Limit');
			}
			if (!empty($_POST['balance'])) {
				$this->form_validation->set_rules('balance', 'Balance', 'trim|required|is_natural_no_zero|callback_check_equal_less[' . $this->input->post('credit_limit') . ']');
			} else {
				$this->form_validation->set_rules('balance', 'Balance');
			}
			if (!empty($_POST['no_auth_user'])) {
				$this->form_validation->set_rules('no_auth_user', 'Authorized Users', 'required|is_natural_no_zero');
			} else {
				$this->form_validation->set_rules('no_auth_user', 'Authorized Users');
			}
			if (!empty($_POST['card_exp_date'])) {
				$this->form_validation->set_rules('card_exp_date', 'Card Expire Date');
			} else {
				$this->form_validation->set_rules('card_exp_date', 'Card Expire Date');
			}
			if (!empty($_POST['card_open_date'])) {
				$this->form_validation->set_rules('card_open_date', 'Credit Card Open Date', 'required|callback_checkDateFormatYearMonthOpen');
			} else {
				$this->form_validation->set_rules('card_open_date', 'Credit Card Open Date');
			}
			if (!empty($_POST['card_close_date'])) {
				$this->form_validation->set_rules('card_close_date', 'Credit Card Closing Date', 'required|is_natural_no_zero|less_than[31]');
			} else {
				$this->form_validation->set_rules('card_close_date', 'Credit Card Closing Date');
			}
			if (!empty($_POST['cphone'])) {
				$this->form_validation->set_rules('cphone', 'Bank Phone ');
			} else {
				$this->form_validation->set_rules('cphone', 'Bank Phone ');
			}
			if ($this->form_validation->run() == FALSE) {
				$this->addCard($to_id, $to_name);
			} else {
				$tradeline = $this->CreditcardModel->insertTradeline();
				if ($tradeline) {
					$this->session->set_flashdata("su_message", "Credit Card Added Successfully");
					redirect(ADMIN_PATH . 'tradelineowner/carddetails/' . $to_id . '/' . $to_name);
				}
			}
		}

		function check_equal_less($balance, $credit_limit)
		{
			if ($credit_limit > $balance) {

				$this->form_validation->set_message('check_equal_less', 'The credit balance should not exceed credit limit.');
				return false;
			} else {
				return true;
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

		public function email_check($str)
		{
			$query = $this->db->query("SELECT user_id FROM user WHERE email = '$str'");
			if ($query->num_rows() > 0) {
				$this->form_validation->set_message('email_check', 'This email address already used.');
				return FALSE;
			} else {
				return TRUE;
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

		public function username_check($str)
		{
			$query = $this->db->query("SELECT user_id FROM user WHERE login_name = '$str'");
			if ($query->num_rows() > 0) {
				$this->form_validation->set_message('username_check', 'This username already used.');
				return FALSE;
			} else {
				return TRUE;
			}
		}

		function post()
		{
			$id = $_REQUEST['pk'];
			$value = $_REQUEST['value'];
			$name = $_REQUEST['name'];
			$this->TradelineOwnerModel->updateInline($value, $id, $name);
		}

		function cardPost()
		{
			$id = $_REQUEST['pk'];
			$value = $_REQUEST['value'];
			$name = $_REQUEST['name'];
			$this->TradelineOwnerModel->updateInlineCard($value, $id, $name);
		}

		function cardPostDate()
		{
			$id = $_REQUEST['pk'];
			$value = $_REQUEST['value'];
			$name = $_REQUEST['name'];
			$this->TradelineOwnerModel->updateInlineCardSell($value, $id, $name);
		}

		function deleteLineowner($to_id)
		{
			$this->TradelineOwnerModel->deleteTradelineOwner($to_id);
			$this->session->set_flashdata("su_message", "Tradeline Owner Deleted Successfully.");
			redirect(ADMIN_PATH . "tradelineowner");
		}

		function creditcard_update($to_id, $cardid, $to_name)
		{
			$data['card_details'] = $this->CreditcardModel->getSingleCard($cardid);
			$card_details = $data['card_details'];
			$card_name = $card_details->card_name;
			$card_type = $card_details->card_type;
			$data['usertype'] = checkUserType();
			$data['to_id'] = $to_id;
			$data['to_name'] = $to_name;
			$data['title'] = $card_name . "  " . $card_type;
			$data['main_content'] = ADMIN_PATH . "card_update";
			$this->load->view(ADMIN_PATH . 'inc/template', $data);
		}

		function delete_card($to_id, $card_id, $to_name)
		{
			$this->TradelineModel->deleteCard($card_id);
			$this->session->set_flashdata("su_message", "Tradeline Owner Deleted Successfully.");
			$this->carddetails($to_id, $to_name);
		}

		function deleteCardFromList($card_id)
		{
			$this->TradelineModel->deleteCard($card_id);
			$this->session->set_flashdata("su_message", "Credit Card Deleted Successfully.");
			$this->cardlist();
		}


		function checkDateFormatYearMonthOpen($date)
		{
			if (preg_match("/[0-9]{2}\/[0-9]{4}/", $date)) {
				$date1 = substr($date, 3, 4);
				if ($date1 <= date('Y')) {
					if (checkdate(substr($date, 0, 2), '01', substr($date, 3, 4))) {
						return true;
					} else {
						$this->form_validation->set_message('checkDateFormatYearMonthOpen', 'Invalid Date');
						return false;
					}
				} else {
					$this->form_validation->set_message('checkDateFormatYearMonthOpen', 'Date Input Error ');
					return false;
				}
			} else {
				$this->form_validation->set_message('checkDateFormatYearMonthOpen', 'Invalid Date ');
				return false;
			}
		}




		function addClientToCard($cardid)
		{

			$tradeline = $this->TradelineOwnerModel->getTradelinOwnerDetailsWithUserId($this->session->userdata(USER_ID));
			$cardlist = $this->CreditcardModel->getAllCreditCard($tradeline->to_id, "Active");
			$data['cardList'] = $cardlist;
			$to_id = $tradeline->to_id;
			$data['clientlist'] = $this->CreditcardModel->getAllClientRespectTo($cardid, 'process');
			$data['clientlistcom'] = $this->CreditcardModel->getAllClientRespectTo($cardid, 'complete');
			$data['sumOfReceivableAmountTradelineOwnerWithCardId'] = $this->CreditcardModel->sumOfAmountofReceivableTradelineOwnerWithCardId($to_id, $cardid);
			$data['cardid'] = $cardid;
			$singleCard = $this->CreditcardModel->getSingleCard($cardid);
			$data['single_card'] = $singleCard;
			$data['title'] = "Add Client to " . '&nbsp' . $singleCard->card_name;
			$data['title1'] = "Credit Card List";
			$data['title2'] = "Clients Added to " . '&nbsp' . $singleCard->card_name;
			$data['main_content'] = ADMIN_PATH . "client_addto_card_view";
			$this->load->view(ADMIN_PATH . 'inc/template', $data);

		}

		function addCheckedClientToCard()
		{
			$card_id = $this->input->post('cardid');
			$this->form_validation->set_rules('cardsellid[]', 'cardsellid', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->addClientToCard($card_id);
			} else//success
			{
				foreach ($_POST['cardsellid'] as $key => $cardsellid) {
					$this->TradelineOwnerModel->updateIntoCardSell($cardsellid);
				}
				$this->session->set_flashdata("su_message", "Client Added Successfully");
				redirect(ADMIN_PATH . "tradelineowner/addClientToCard/" . $card_id);
			}

		}

		function deleteMultipleAction()
		{
			$this->input->post('cardsellid');
			$card_id = $this->input->post('cardid');
			foreach ($_POST['cardsellid'] as $key => $cardsellid) {
				$this->TradelineOwnerModel->deleteCardSell($cardsellid);
			}
			$this->session->set_flashdata("su_message", "Client Deleted Successfully");
			redirect(ADMIN_PATH . "tradelineowner/addClientToCard/" . $card_id);
		}

		function addedClients($cardid)
		{
			$tradeline = $this->TradelineOwnerModel->getTradelinOwnerDetailsWithUserId($this->session->userdata(USER_ID));
			$cardlist = $this->CreditcardModel->getAllCreditCard($tradeline->to_id);
			$data['cardList'] = $cardlist;
			$data['clientlist'] = $this->CreditcardModel->getAllClientRespectTo($cardid, 'complete');
			$data['title'] = "Client Added List to the Credit Card";
			$data['main_content'] = ADMIN_PATH . "client_addedto_card";
			$this->load->view(ADMIN_PATH . 'inc/template', $data);
		}

		function addSingleCardAction($cardsellid, $cardid)
		{
			$updateData = $this->TradelineOwnerModel->updateIntoCardSell($cardsellid, $cardid);
			if ($updateData) {
				$this->session->set_flashdata("su_message", "Client Added Successfully");
				redirect(ADMIN_PATH . "tradelineowner/addClientToCard/" . $cardid);
			} else {
				$this->session->set_flashdata("su_message", "Error Occured");
				redirect(ADMIN_PATH . "tradelineowner/addClientToCard/" . $cardid);
			}

		}

		function addSingleCardAction1($cardsellid, $cardid)
		{
			$updateData = $this->TradelineOwnerModel->updateIntoCardSell($cardsellid, $cardid);
			if ($updateData) {
				$this->session->set_flashdata("su_message", "Client Added Successfully");
				redirect(ADMIN_PATH . "tradelineowner/addClientToCard/" . $cardid);
			} else {
				$this->session->set_flashdata("su_message", "Error Occured");
				redirect(ADMIN_PATH . "tradelineowner/addClientToCard/" . $cardid);
			}

		}

		function deleteSingleAction($cardsellid, $cardid, $x, $id)
		{
			$this->TradelineOwnerModel->insertReturnDate($x, $id);
			$this->TradelineOwnerModel->DeleteToReturnClient($id);
			$this->sendEmailToRef($cardsellid, $cardid, $x);
			$deleteData = $this->TradelineOwnerModel->deleteCardSell($cardsellid);
			if ($deleteData) {
				$this->session->set_flashdata("su_message", "Clients Deleted Successfully");
				redirect(ADMIN_PATH . "tradelineowner/addClientToCard/" . $cardid);
			} else {
				$this->session->set_flashdata("su_message", "Error Occured");
				redirect(ADMIN_PATH . "tradelineowner/addClientToCard/" . $cardid);
			}
		}

		function deleteSingleAction1($cardsellid, $cardid)
		{
			$deleteData = $this->TradelineOwnerModel->deleteCardSell($cardsellid);
			if ($deleteData) {
				$this->session->set_flashdata("su_message", "Clients Deleted Successfully");
				redirect(ADMIN_PATH . "tradelineowner/addClientToCard/" . $cardid);
			} else {
				$this->session->set_flashdata("su_message", "Error Occured");
				redirect(ADMIN_PATH . "tradelineowner/addClientToCard/" . $cardid);
			}
		}


		function notAddedClients($cardsellid, $cardid, $id)
		{
			$deleteData = $this->TradelineOwnerModel->notAddedCardSell($cardsellid);
			$this->TradelineOwnerModel->DeleteToReturnClient($id);
			if ($deleteData) {
				$this->session->set_flashdata("su_message", "Clients Send to Not Added");
				redirect(ADMIN_PATH . "tradelineowner/addClientToCard/" . $cardid);
			} else {
				$this->session->set_flashdata("su_message", "Error Occured");
				redirect(ADMIN_PATH . "tradelineowner/addClientToCard/" . $cardid);
			}
		}


		function notAddedClients1($cardsellid, $cardid, $id)
		{
			$deleteData = $this->TradelineOwnerModel->notAddedCardSell($cardsellid);
			$this->TradelineOwnerModel->DeleteToReturnClient($id);
			if ($deleteData) {
				$this->session->set_flashdata("su_message", "Clients Send to Not Added");
				redirect(ADMIN_PATH . "tradelineowner/addClientToCard/" . $cardid);
			} else {
				$this->session->set_flashdata("su_message", "Error Occured");
				redirect(ADMIN_PATH . "tradelineowner/addClientToCard/" . $cardid);
			}
		}


		function deleteAddedClients($cardsellid, $id)
		{
			$deleteData = $this->TradelineOwnerModel->deleteCardSell($cardsellid);
			$this->TradelineOwnerModel->DeleteToReturnClient($id);
			if ($deleteData) {
				$this->session->set_flashdata("su_message", "Client Deleted Successfully");
				redirect(ADMIN_PATH . "client/addedClients");
			} else {
				$this->session->set_flashdata("su_message", "Error Occured");
				redirect(ADMIN_PATH . "client/addedClients");
			}
		}

		function deletePendingClients($cardsellid, $id)
		{
			$deleteData = $this->TradelineOwnerModel->deleteCardSell($cardsellid);
			$this->TradelineOwnerModel->DeleteToReturnClient($id);
			if ($deleteData) {
				$this->session->set_flashdata("su_message", "Client Deleted Successfully");
				redirect(ADMIN_PATH . "client/pendingClients");
			} else {
				$this->session->set_flashdata("su_message", "Error Occured");
				redirect(ADMIN_PATH . "client/pendingClients");
			}
		}



		function addTradeline()
		{
			$this->form_validation->set_rules('type', 'card type', 'required');
			$this->form_validation->set_rules('name', 'card name');
			$this->form_validation->set_rules('bank', 'issuer bank', 'callback_alpha_space');
			$this->form_validation->set_rules('lmt', 'lmt');
			$this->form_validation->set_rules('balance', 'balance', 'trim|required|is_natural|callback_check_equal_less[' . $this->input->post('lmt') . ']');
			$this->form_validation->set_rules('max', 'maximum number of authorized users');
			$this->form_validation->set_rules('open', 'card open date', 'required|callback_checkDateFormatYearMonthOpen');
			$this->form_validation->set_rules('statement', 'statement closing date', 'required|is_natural_no_zero|less_than[31]');
			$this->form_validation->set_rules('phone', 'phone');
			if ($this->form_validation->run() == FALSE) {
				$this->tradelineForm();
			} else {
				if ($this->CreditcardModel->insertTradeline()) {
					$this->session->set_flashdata("su_message", "tradeline added succesfully");
					redirect(ADMIN_PATH . 'tradelineowner/cardList');
				}
			}
		}

		function postAddedDate()
		{
			$id = $_REQUEST['pk'];
			$value = $_REQUEST['value'];
			$name = $_REQUEST['name'];
			$this->TradelineOwnerModel->updateInlineAddedDate($value, $id, $name);
		}

		function tradeline_creditcard_update($card_id)
		{
			$data['card_details'] = $this->CreditcardModel->getSingleCard($card_id);
			$data['usertype'] = checkUserType();
			$data['title'] = "Update Owner Card Details";
			$data['main_content'] = ADMIN_PATH . "tradeline_card_update";
			$this->load->view(ADMIN_PATH . 'inc/template', $data);
		}

		function tradeline_cardPost()
		{
			$id = $_REQUEST['pk'];
			$value = $_REQUEST['value'];
			$name = $_REQUEST['name'];
			$this->TradelineOwnerModel->updateInlineCard($value, $id, $name);
		}

		function carddetailsTradeLines()
		{
			$brokerid = $this->AffiliateModel->getaffiliateid($this->session->userdata(USER_ID));
			$data['cardList'] = $this->CreditcardModel->getAllCardOfAllTradelineOwner($brokerid);
			$data['allowed'] = $this->allowed;
			$data['error'] = $this->errors;
			$data['title1'] = "Add Tradeline Owner";
			$data['title'] = "Tradelines";
			$data['main_content'] = ADMIN_PATH . "TradeLines_View";
			$this->load->view(ADMIN_PATH . 'inc/template', $data);
		}

		function changeStatus($cardid, $status)
		{
			$change = $this->CreditcardModel->switchStatus($cardid, $status);
			if ($change)
				redirect(ADMIN_PATH . 'tradelineowner/cardList');
		}

		function changeStatusToVerified($cardsellid, $card_id)
		{
			$change = $this->CreditcardModel->changeVerifyStatusToVerified($cardsellid);
			if ($change)
				redirect(ADMIN_PATH . 'tradelineowner/addClientToCard/' . $card_id);
		}

		function verifiedWithErrors($cardsellid, $card_id)
		{
			$change = $this->CreditcardModel->changeVerifyStatusToConfirmVerified($cardsellid);
			if ($change)
				redirect(ADMIN_PATH . 'tradelineowner/addClientToCard/' . $card_id);
		}


		function verifiedWithoutErrors($cardsellid, $card_id)
		{
			$change = $this->CreditcardModel->changeVerifyStatusToConfirmVerified($cardsellid);
			if ($change)
				redirect(ADMIN_PATH . 'tradelineowner/addClientToCard/' . $card_id);
		}

		function changeStatusToVerifiedFromRef($cardsellid, $card_id, $to_id, $to_name)
		{
			$change = $this->CreditcardModel->changeVerifyStatusToVerified($cardsellid);
			if ($change)
				redirect(ADMIN_PATH . 'creditcard/creditCardClients/' . $to_id . '/' . $card_id . '/' . $to_name);
		}

		function carddetailsPayment_TradeLineOwner()
		{
			$tradeline = $this->TradelineOwnerModel->getTradelinOwnerDetailsWithUserId($this->session->userdata(USER_ID));
			$data['clientlist'] = $this->CreditcardModel->getClientsOfEachTradeline_Payment($tradeline->to_id);
			$to_id = $tradeline->to_id;
			$data['sumOfCollectableAmountTradelineOwner'] = $this->CreditcardModel->sumOfAmountofCollectableTradelineOwner($to_id);
			$data['sumOfReceivableAmountTradelineOwner'] = $this->CreditcardModel->sumOfAmountofReceivableTradelineOwner($to_id);
			$data['title'] = "Payment To Be Recieved";
			$data['main_content'] = ADMIN_PATH . "payments_tradeline_owner";
			$this->load->view(ADMIN_PATH . 'inc/template', $data);
		}


		function carddetailsPayment_Referral()
		{
			$refid = $this->ReferralModel->getReferralIdFromUserId($this->session->userdata(USER_ID));
			$data['cardList'] = $this->CreditcardModel->getTradeLineOwnerOfEachReferral_Payment($refid);
			$data['sumOfCollectableAmount'] = $this->CreditcardModel->sumOfAmountofCollectable($refid);
			$data['sumOfReceivableAmount'] = $this->CreditcardModel->sumOfAmountofReceivable($refid);
			$data['title'] = "Payment To Be Recieved";
			$data['main_content'] = ADMIN_PATH . "payment_referral_recieved_view";
			$this->load->view(ADMIN_PATH . 'inc/template', $data);
		}

		public function sendEmailToRef($card_sell_id, $card_id, $x)

		{
			$userId = ($this->session->userdata(USER_ID));
			$details = $this->TradelineOwnerModel->getAdminDetails($userId);
			$tradeline_owner_email = $details->to_email;
			$card_sell_detail = $this->CreditcardModel->getCardSell($details->to_id);
			$clientDetails = $this->ClientModel->getSingleUsers($card_sell_detail->client_id);
			$client_fullname = $clientDetails->firstname . '' . $clientDetails->lastname;
			$cardDetails = $this->CreditcardModel->getSingleCard($card_id);
			$card_type = $cardDetails->card_name;
			$card_name = $cardDetails->card_type;
			$referral_id = $details->referral_id;
			$referralDetails = $this->AffiliateModel->getReferralDetailByRefId($referral_id);
			$referral_email = $referralDetails->affiliate_email;
			$referral_fullname = $referralDetails->affiliate_fname . '' . $referralDetails->affiliate_lname;


			$this->EmailerModel->SendMailToRefWhileNotAddedFromTo($referral_email, $tradeline_owner_email, $referral_fullname, $client_fullname, $card_type, $card_name, $x);
		}

		function PaymentStatus($card_sell_id)
		{
			$change = $this->PaymentModel->changeUnpaidStatusToPaid($card_sell_id);
			if ($change)
				redirect(ADMIN_PATH . 'tradelineowner/carddetailsPayment_TradeLineOwner/');
		}

		function PaymentStatus_Referral($card_sell_id)
		{
			$change = $this->PaymentModel->changeUnpaidStatusToPaid_Referral($card_sell_id);
			if ($change)
				redirect(ADMIN_PATH . 'tradelineowner/carddetailsPayment_Referral/');
		}
	}

?>