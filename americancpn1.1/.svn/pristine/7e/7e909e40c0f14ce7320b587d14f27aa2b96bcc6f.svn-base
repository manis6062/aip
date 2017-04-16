<?php

class LineModel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('date');
        $this->load->library('email');
    }

    public function getLines()
    {
        return $this->db->query("SELECT t.id, t.user_id, concat(p.first_name , ' ' , p.last_name) user, t.type_id, t.bank, t.url, t.phone, t.lmt, t.balance, t.open, t.statement, t.charge, t.payment, t.max, t.status, t.note FROM line t LEFT JOIN profile p ON p.user_id = t.user_id")->result();
    }




    public function getAll()
    {
        $aff_id = 0;
        if (checkUserType() == 1 || checkUserType() == 2) {
            if (checkUserType() == 1) {
                $aff_id = $this->ClientModel->getaffiliateuser($this->session->userdata(USER_ID));
            } else {
                $aff_id = $this->session->userdata(USER_ID);
            }
            $query = $this->db->query("SELECT
										tocd.type_id,
										tocd.card_issuing_bank,
										s.scheme_limit,
										s.scheme_charge,
										tow.line_owner_name,
										tocd.card_number,
										tocd.expiration_date,
										tocd.card_limit,
										tocd.card_selling_limit,
										tow.line_owner_address,
										tow.line_owner_email,
										tow.line_owner_ssn
										FROM
										nc_line_schemes AS s
										INNER JOIN nc_line_owner_card_details AS tocd ON s.card_detail_id = tocd.card_detail_id
										INNER JOIN nc_line_owner AS tow ON tocd.owner_id = tow.owner_id
										WHERE
										tow.affiliate_id='$aff_id'");
            // echo $this->db->last_query();
            // die;
        } else {
            $query = $this->db->query("SELECT
										tocd.type_id,
										tocd.card_issuing_bank,
										s.scheme_limit,
										s.scheme_charge,
										tow.line_owner_name,
										tocd.card_number,
										tocd.expiration_date,
										tocd.card_limit,
										tocd.card_selling_limit,
										tow.line_owner_address,
										tow.line_owner_email,
										tow.line_owner_ssn
										FROM
										nc_line_schemes AS s
										INNER JOIN nc_line_owner_card_details AS tocd ON s.card_detail_id = tocd.card_detail_id
										INNER JOIN nc_line_owner AS tow ON tocd.owner_id = tow.owner_id");
        }
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return 0;
    }

    public function getAllByScheme($card_detail_id)
    {
        $aff_id = 0;
        $query = $this->db->query("SELECT
										tocd.type_id,
										tocd.card_issuing_bank,
										s.scheme_limit,
										s.scheme_charge,
										tow.line_owner_name,
										tocd.card_number,
										tocd.expiration_date,
										tocd.card_limit,
										tocd.card_selling_limit,
										tow.line_owner_address,
										tow.line_owner_email,
										tow.line_owner_ssn
										FROM
										nc_line_schemes AS s
										INNER JOIN nc_line_owner_card_details AS tocd ON s.card_detail_id = tocd.card_detail_id
										INNER JOIN nc_line_owner AS tow ON tocd.owner_id = tow.owner_id
										WHERE
										tocd.card_detail_id='$card_detail_id'");
        // echo $this->db->last_query();
        // die;
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return 0;
    }

    function getownerid($code)
    {
        $query = $this->db->query("Select owner_id from nc_line_owner where rcode = '$code'");
        if ($query->num_rows() > 0) {
            return $query->row()->owner_id;
        }
        return 0;
    }

    function insertCardDetails($code, $cardtype, $bank, $cardnumber, $exp_date, $credit_limit, $credit_selling_limit)
    {
        $owner_id = $this->getownerid($code);
        $today = date("Y-m-d");
        $data = array(
            'type_id' => $cardtype,
            'card_issuing_bank' => $bank,
            'card_number' => $cardnumber,
            'expiration_date' => $exp_date,
            'card_limit' => $credit_limit,
            'card_selling_limit' => $credit_selling_limit,
            'crtd_dt' => $today,
            'owner_id' => $owner_id
        );
        $this->db->insert('nc_line_owner_card_details', $this->security->xss_clean($data));
        $query = $this->db->query("Select * from nc_line_owner_card_details where owner_id = '$owner_id'");
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return 0;
    }

    function getcarddetails($card_details_id)
    {
        $query = $this->db->query("Select * from nc_line_owner_card_details where card_detail_id = $card_details_id");
        return $query->row();
    }

    function getavailableschemebalance($card_details_id)
    {
        $query = $this->db->query("SELECT
									IFNULL((tocd.card_selling_limit-(select IFNULL(SUM(scheme_limit),0) from nc_line_schemes WHERE card_detail_id = tocd.card_detail_id)),0) as availablelimit from nc_line_owner_card_details as tocd
									where card_detail_id = $card_details_id");
        return $query->row()->availablelimit;
    }

    function generatescheme($amount, $charge, $card_detail_id)
    {
        $today = date("Y-m-d");
        $data = array(
            'card_detail_id' => $card_detail_id,
            'scheme_limit' => $amount,
            'scheme_charge' => $charge,
            'crtd_dt' => $today
        );
        $this->db->insert('nc_line_schemes', $this->security->xss_clean($data));
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        }
        return FALSE;
    }


    function getSingleUsers($id)
    {

        //$query = $this->db->query("SELECT c.*, (SELECT state FROM states  WHERE id = c.state) as state1 FROM nc_client c WHERE c.id =$id");
        $query = $this->db->query("SELECT * from nc_line_owner where to_id = $id");
        //var_dump($query);
        if ($query->num_rows() > 0)
            return $query->row();

        return 0;
    }

    function getSingleUsersForUserId($id)
    {

        //$query = $this->db->query("SELECT c.*, (SELECT state FROM states  WHERE id = c.state) as state1 FROM nc_client c WHERE c.id =$id");
        $query = $this->db->query("SELECT * from nc_line_owner where user_id = $id");
        //var_dump($query);
        if ($query->num_rows() > 0)
            return $query->row();

        return 0;
    }


    function updateInline($value, $id, $field)
    {
        $query = $this->db->query("update nc_credit_card set $field = '$value' where card_id = '$id'");
        if ($this->db->affected_rows() == '1') {
            return TRUE;
        }
        return FALSE;
    }

    function deleteCard($card_id)
    {

        $data = array('card_is_delete' => 'YES',);
        $this->db->where('card_id', $card_id);
        if ($this->db->update('nc_credit_card', $data))
            return TRUE;
        else
            return FALSE;
    }


    function checkcodeanduseravailability($code)
    {
        $this->db->select('request_to_emails');
        $query = $this->db->get_where('nc_request_for_signup', array('rcode' => $code, 'request_to_type' => 'line'));
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $this->db->select('user_id');
            $query = $this->db->get_where('user', array('email' => $row->request_to_emails));
            if ($query->num_rows() > 0) {
                return FALSE;
            } else {
                return $row->request_to_emails;
            }
        }
        return FALSE;
    }

    function getreferrerInfoForClient($ref_user)
    {
        $query = $this->db->query("SELECT a.* FROM user as u  INNER JOIN nc_affiliate as a ON u.id= a.user_id WHERE u.login_name = '$ref_user'");
        if ($query->num_rows() > 0) {
            return $query->row();
        }
        return 0;
    }

    function insertLine2($username, $password)
    {

        $today = date("Y-m-d H:i:s");
        $priviledge = "";
        $val = $this->db->query("SELECT nc_auth_master.auth_id FROM nc_auth_master WHERE nc_auth_master.module IN (SELECT modules FROM nc_lineowner_module_priviledge) ORDER BY nc_auth_master.auth_id");
        if ($val->num_rows() > 0) {
            $result = $val->result();
            $i = 1;
            foreach ($result as $value) {
                if ($i == $val->num_rows()) {
                    $priviledge .= $value->auth_id;
                } else {
                    $priviledge .= $value->auth_id . ",";
                }
                $i++;
            }
        }
        $data = array('user_name' => trim($this->input->post('fname')) . ' ' . trim($this->input->post('lname')),
            'login_name' => $username,
            'login_pwd' => trim(md5($password)),
            'phone' => $this->input->post('pcon'),
            'cell' => $this->input->post('scon'),
            'address' => ucwords(trim($this->input->post('address'))),
            'user_type' => 'line',
            'email' => trim($this->input->post('email')),
            'status' => 'yes',
            'auth_id' => $priviledge,
            'crtd_dt' => $today);
        $this->db->insert('user', $this->security->xss_clean($data));
        $userid = $this->db->insert_id();
        return $userid;

    }


    function insertLine()
    {
        $data = array(
            'user_Id' => $this->input->post('user_id'),
            'type_id' => $this->input->post('type'),
            'bank' => $this->input->post('bank'),
            'url' => $this->input->post('url'),
            'phone' => $this->input->post('phone'),
            'lmt' => $this->input->post('lmt'),
            'balance' => $this->input->post('balance'),
            'open' => $this->input->post('open'),
            'statement' => $this->input->post('close'),
            'charge' => $this->input->post('charge'),
            'payment' => $this->input->post('payment'),
            'max' => $this->input->post('max'),
            'status' => $this->input->post('status'),
            'note' => $this->input->post('note')
        );
        $this->db->insert('line', $this->security->xss_clean($data));
        $cardid = $this->db->insert_id();
        return $cardid;
    }

    function insertInToLineTable($userid)
    {
        $today = date("Y-m-d H:i:s");
        $data = array(
            'to_fname' => ucwords(trim($this->input->post('fname'))),
            'to_mname' => ucwords(trim($this->input->post('mname'))),
            'to_lname' => ucwords(trim($this->input->post('lname'))),
            'to_email' => trim($this->input->post('email')),
            'to_pcon' => $this->input->post('pcon'),
            'to_address' => ucwords(trim($this->input->post('address'))),
            'to_transunion' => $this->input->post('to_transunion'),
            'to_equifax' => $this->input->post('to_equifax'),
            'to_experion' => $this->input->post('to_experion'),
            'to_payment_type' => $this->input->post('payment'),
            'to_paypal_id' => $this->input->post('paypal_id'),
            'to_reg_date' => $today,
            'user_id' => $userid,
            'referrer_id' => $this->input->post('ref_id'),

        );
        $this->db->insert('nc_line_owner', $this->security->xss_clean($data));
        $line = $this->db->insert_id();
        $query = $this->db->query("Select  u.email, concat(t.to_fname, ' ', t.to_lname) as full_name from user as u inner join nc_line_owner as t on t.user_id = u.user_id where u.id= (select user_id from nc_line_owner where to_id = $line)");
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return 0;
        }

    }


    function getGenerateUsername()
    {
        $username = '';
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        for ($i = 0; $i < 8; $i++) {
            $username .= $characters[rand(0, strlen($characters) - 1)];
        }
        $query = $this->db->query("SELECT login_name FROM user WHERE login_name = '$username'");
        if ($query->num_rows() > 0) {
            return $this->getGenerateUsername();
        } else {
            return $username;
        }
    }

    function generatePassword()
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $password = substr(str_shuffle($chars), 0, 8);
        return $password;
    }

    function lineGetAll()
    {
        $this->db->select('*');
        $this->db->from('nc_request_for_signup');
        $this->db->order_by("request_id", "desc");
        $this->db->where("request_to_type", "line");
        $query = $this->db->get();

        if ($query->num_rows() > 0)
            return $query->result();

        return 0;
    }

    function checkcode($code)
    {
        $this->db->select('request_id');
        $query = $this->db->get_where('nc_request_for_signup', array('rcode' => $code));
        if ($query->num_rows() > 0) {
            return TRUE;
        }
        return FALSE;
    }

    function insert_line($email, $rcode)
    {
        $today = date("Y-m-d");
        $type = '';
        if ($this->session->userdata(ADMIN_AUTH_TYPE) != 'affiliate' && $this->session->userdata(ADMIN_AUTH_TYPE) != 'referrer' && $this->session->userdata(ADMIN_AUTH_TYPE) != 'client') {
            $type = 'referrer';
        } elseif ($this->session->userdata(ADMIN_AUTH_TYPE) == 'affiliate' || $this->session->userdata(ADMIN_AUTH_TYPE) == 'referrer') {
            $type = 'line';
        }
        $data = array('request_to_type' => $type,
            'request_to_emails' => $email,
            'request_by' => $this->session->userdata(USER_ID),
            'request_send_dt' => $today,
            'rcode' => $rcode);
        $this->db->insert('nc_request_for_signup', $data);
        $userid = $this->db->insert_id();
        return $userid;
    }


    function delete($id)
    {
        $this->db->where('request_id', $id);
        $this->db->delete('nc_request_for_signup');
        if ($this->db->affected_rows() == '1') {
            return TRUE;
        }
        return FALSE;

    }

}

?>