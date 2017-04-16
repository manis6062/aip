<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function __construct() {
		parent::__construct();
		checkAdminAuth();
		// Your own constructor code
		$this -> load -> library('form_validation');

		$this -> load -> library('pagination');
		$this -> form_validation -> set_error_delimiters('<div class="red">', '</div>');
		$this -> load -> helper(array('form', 'url'));
		$this -> load -> helper('path');
		$this->allowed = $this->AuthModel->getAuth();
	}

	function _remap($method, $parameter) {
		if (method_exists($this, $method)) {
			$this -> $method($parameter);
		} else {
			$this -> index($method, $parameter);
		}
	}

	public function index(){
		
	}
	
	function paypal(){
		
		if(@$_POST['payment_status'] == "Completed"){
			$this->session->set_flashdata("su_message", "Paypal Payment Successful.");
		}
		$data['title'] = 'Paypal Payment';
		$data['main_content'] = ADMIN_PATH . "referrerpaypal_view";
        $this -> load -> view(ADMIN_PATH . 'incs/template', $data);
		
	}
	
	function paymentPaypal(){
		
		if (in_array('payment', $this->allowed)) {
            if ($this->form_validation->run('addcash') == FALSE) {
                $this->paypal();
            } else {
					$admininfo = $this->UserModel->getAdminPaypalInfo();
					$payment_amount = $this->input->post('amount');
					$payment_title = $this->input->post('ptitle');
			
					$config = array();
					$config['business'] = $admininfo->paypal_account;
					$config['cpp_header_image'] = '';
					//Image header url [750 pixels wide by 90 pixels high]
					$config['custom'] = $this->session->userdata(USER_ID).'-fee';
					$config['return'] = base_url() . 'administrator/payment/paypal';
					$config['cancel_return'] = base_url() . 'administrator/payment/paypal';
					$config['notify_url'] = base_url() . 'ipnlistener/paymentProcess';
					//IPN Post
					$config['rm'] = 2;
					$config['production'] = FALSE;
					//Its false by default and will use sandbox
					//$config['discount_rate_cart'] 	= 20; //This means 20% discount
					//$config["invoice"]				= '843843'; //The invoice id
			
					$this -> load -> library('Paypal', $config);
			
					#$this->paypal->add(<name>,<price>,<quantity>[Default 1],<code>[Optional]);
			
					$this -> paypal -> add($payment_title, $payment_amount, 1);
					//First item
			
					$this -> paypal -> pay();
					//Proccess the payment
					
					}
        } else {
            redirect("admin");
        }
	}
	
	
	function cash(){
		$data['title'] = 'Cash Payment';
		
		$data['main_content'] = ADMIN_PATH . "referrercash_view";
        $this -> load -> view(ADMIN_PATH . 'incs/template', $data);
	}

	function addcash(){
		
		if (in_array('payment', $this->allowed)) {
            if ($this->form_validation->run('addcash') == FALSE) {
                $this->cash();
            } else {
                    $this->PaymentModel->insertCashPayment($this->session->userdata(USER_ID));

                    $this->session->set_flashdata("su_message", "Cash Payment Added Successfully.");
                    redirect(ADMIN_PATH . "payment/cash");
            }
        } else {
            redirect("admin");
        }
	}
	
	

}
