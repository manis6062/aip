<?php

class PaymentModel extends CI_Model {

    function __construct() {
        parent::__construct();
        // Your own constructor code
        $this->load->helper('date');
        $this->load->library('email');
        $this->load->helper('security');

    }

    
    function insertCashPayment($uid) {

        $today = date("Y-m-d H:i:s");


        $data = array(
        	'user_id' => $uid,
            'referrer_cash_payment_title' => $this->input->post('ptitle'),
            'referrer_cash_payment_amount' => $this->input->post('amount'),
            'referrer_cash_payment_uniqueid' => $this->getUniqueId(),
            'referrer_cash_payment_date' => $today
        );
        $this->db->insert('nc_referrer_cash_payment', $data);
        $albumid = $this->db->insert_id();



        return $albumid;
    }
	
	function getUniqueId(){
		$uid = '';
		$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
		for ($i = 0; $i < 16; $i++) {
			$uid .= $characters[rand(0, strlen($characters) - 1)];
		}
		$query = $this->db->query("SELECT referrer_cash_payment_uniqueid FROM nc_referrer_cash_payment WHERE referrer_cash_payment_uniqueid = '$uid'");
		if($query->num_rows()>0){
			return $this->getUniqueId();
		}
		else{
			return $uid;
		}
	}
	
	     function changeUnpaidStatusToPaid($card_sell_id) {
            
            $data = array('payment_status' => 'paid','payment_paid_date_lineowner'=> date('m/d/Y'));
			
            $this -> db -> where('card_sell_id', $card_sell_id);
			
          if ($this -> db -> update('nc_card_sell', $data))
               {
                   return TRUE;
                   }
                 
            else
               {return FALSE;
        }

}
		     
		     function changeUnpaidStatusToPaid_referrer($card_sell_id) {
		     	
            $today=date('m/d/Y');
            $data = array('payment_status_referrer' => 'paid','payment_paid_date_referrer'=>$today);
			
            $this -> db -> where('card_sell_id', $card_sell_id);
			
          if ($this -> db -> update('nc_card_sell', $data))
               {
                   return TRUE;
                   }
                 
            else
               {return FALSE;
        }

}
	

}

?>