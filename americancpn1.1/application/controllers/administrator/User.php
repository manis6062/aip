<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller
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
        {
            $data['users'] = $this->UserModel->getAllUsers();
            $data['main_content'] = ADMIN_PATH . "users";
            foreach ($data['users'] as $user) {
                $data = $this->addRolesToUser($user->id, $data);
            }
            $this->load->view(ADMIN_PATH . 'inc/template', $data);
        }
    }

    function user($user_id)
    {
        $data['user'] = $this->UserModel->getUser($user_id);
        $data['title'] = "Update User";
        $data['offset'] = $user_id;
        $data = $this->addRolesToUser($user_id, $data);
        $data['main_content'] = ADMIN_PATH . "user";
        $this->load->view(ADMIN_PATH . 'inc/template', $data);
    }

    function userForm()
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
        $data['title'] = "Add User";
        $data['states'] = $this->UserModel->getStates();
        $data['roles'] = $this->RoleModel->getPublicRoles();
        $data['brokers'] = $this->UserModel->getBrokers();
        $data['main_content'] = ADMIN_PATH . "userForm";
        $this->load->view(ADMIN_PATH . 'inc/template', $data);
    }


    function deleteUser($user_id)
    {
        if ($this->checkBeforeDelete($user_id)) {
            try {
                $this->UserModel->deleteUser($user_id);
            } catch (Exception $e) {
                throw $e;
            }
            $this->session->set_flashdata("su_message", "User Deleted Successfully.");
        } else {
            $this->session->set_flashdata("su_message", "<font color=\"#FF0000\">The Selected User Can't Be Deleted.It Is Either Admin User Or Logged In User</font>");
        }
        redirect(ADMIN_PATH . "user/index");
    }

    function usersUnder($userId)
    {
        $data['users'] = $this->UserModel->getUsersUnder($userId);
        $data['main_content'] = ADMIN_PATH . "users";
        $data['title'] = "Delete these users before deleting " . $userId;
        foreach ($data['users'] as $user) {
            $data = $this->addRolesToUser($user->id, $data);
        }
        $this->load->view(ADMIN_PATH . 'inc/template', $data);
    }


    function checkBeforeDelete($user_id)
    {
        if ($user_id == $this->session->userdata(USER_ID)) {
            return FALSE;
        }
        return TRUE;
    }


    function changePassword($user_id)
    {
        $data['values'] = $this->UserModel->getAdminDetails($user_id);
        $data['title'] = "Change Password";
        $data['main_content'] = ADMIN_PATH . "changepassword_view";
        $this->load->view(ADMIN_PATH . 'inc/template', $data);
    }

    public function addUser()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $ssn = $this->input->post('ssn');
        $firstName = $this->input->post('first_name');
        $middleInitial = $this->input->post('middle_initial');
        $lastName = $this->input->post('last_name');
        $dob = $this->input->post('dob');
        $primaryContact = $this->input->post('primary_phone_number');
        $site = $this->input->post('site');
        $fax = $this->input->post('fax');
        $this->UserModel->insertUser();
        redirect(base_url() . 'administrator/user');
    }


    function sendEmails()
    {
        $user_id = $this->session->userdata(USER_ID);
        $user_role_details = $this->RoleModel->getRolesByUserId($user_id);
        $email_sender_type = $user_role_details->value;
        $user_details = $this->UserModel->getUser($user_id);
        $email_sender = $user_details->first_name . ' ' . $user_details->middle_initial . ' ' . $user_details->last_name;
        $subject = $this->input->post('subject');
        $to_emails = $this->input->post('toemails[]');
        $msg = $this->input->post('msg');
        $name = $this->UserModel->getNameFromEmail($to_emails);
        $role_name = $this->UserModel->getRoleFromEmail($to_emails);
        $user_ids = $this->UserModel->getUserIdFromEmail($to_emails);
        $this->load->library('SimpleEmailService');
        $ses = new SimpleEmailService('AKIAISEC5PBG2F54VL4A', 'ZhRYSpKdUMLRrxPwy878UN+pJmnllAocdcYRpJwZ');
        $ses->enableVerifyPeer(false);
        $m = new SimpleEmailServiceMessage();
        $m->addTo($to_emails);
        $m->setFrom($email_sender . '<' . EMAILSENDER . '>');
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
								<h3 style="padding:10px; margin:0px; color:#ac6f00;"><img src="' . base_url() . 'frontend/images/logo.png" height="35px" style="vertical-align:middle;margin-right:15px;">American CPN</h3>
								</div>
								<div class="content" style="padding:10px; font-size:14px;"><p style="font-size:13px;">';
        $msg .= 'Dear User,<br/>';
        $msg .= $this->input->post('msg');
        $msg .= '<br/><br/>';
        $msg .= 'Yours Sincerely,<br/>';
        $msg .= $email_sender;
        $msg .= 'Americancpn <br/>';

        // footer part of email template
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
        $message = $msg;
        $m->setMessageFromString('', $message);
        if ($ses->sendEmail($m)) {
            $this->EmailsModel->insertEmails('Success', $email_sender, $email_sender_type, $name, $role_name, $user_ids);
            redirect(ADMIN_PATH . "user/mailbox");
        } else {

            redirect(ADMIN_PATH . "user/compose");

        }
    }

    public
    function check_captcha($str)
    {
        $word = $this->session->userdata('captchaWord');
        if (strcmp(strtoupper($str), strtoupper($word)) == 0) {
            return true;
        } else {
            $this->form_validation->set_message('check_captcha', 'please enter correct captcha');
            return false;
        }
    }

    public
    function emailCheck($str)
    {
        $query = $this->db->query("select email from user where email = '$str'");
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('emailCheck', 'This username already used.');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public
    function alpha_space($str)
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

    function checkBrokerEmailId($brokeremailid, $tablename)
    {
        $this->brokerUserId = '';
        $query = $this->db->query("SELECT ur.user_id, ur.role_id FROM user_role ur LEFT JOIN user u ON ur.user_id = u.id LEFT JOIN role r ON r.id = ur.role_id WHERE u.email = '$brokeremailid' AND r.value ='broker'");
        if ($query->num_rows() > 0) {
            $this->brokerUserId = $query->row()->user_id;
            $this->table_name = $tablename;
            return True;

        } else {
            $this->form_validation->set_message('checkBrokerEmailId', 'This Broker Doesn\'t Exist');
            return FALSE;
        }
    }

    function get_brokers()
    {
        if (isset($_GET['term'])) {
            $q = strtolower($_GET['term']);
            $this->UserModel->get_brokersEmail($q);
        }
    }


    /*-------------------------- Old Codes----------------------------------------*/


    function add()
    {
        if (in_array('user_add', $this->allowed)) {
            if ($this->form_validation->run('user_add') == FALSE) {
                $this->userForm();
            } else {
                $this->UserModel->insert();
                $this->session->set_flashdata("su_message", "User Added Successfully.");
                redirect(ADMIN_PATH . "user/index");
            }

        } else {
            redirect("admin");
        }
    }

    function update($offset)
    {
        if (in_array('user_update', $this->allowed)) {
            if ($this->form_validation->run('user_edit') == FALSE) {
                $this->user($this->input->post('user_id'), $offset);
            } else {
                $this->UserModel->update($this->input->post('user_id'));
                $this->session->set_flashdata("su_message", "User Updated Successfully.");
                redirect(ADMIN_PATH . "user/show/$offset");
            }
        } else {
            $this->session->set_flashdata("su_message", "You Have No Previleage To Update User");
            redirect(ADMIN_PATH . "user/show/$offset");
        }
    }

    function updateprofile()
    {
        if (in_array('self_update', $this->allowed)) {
            if ($this->form_validation->run('self_edit') == FALSE) {
                $this->session->set_flashdata("su_message", "Validation error occured.");
                redirect("admin/config");
            } else {
                $this->UserModel->updateself($this->input->post('user_id'));
                $this->session->unset_userdata(ADMIN_AUTH_USERNAME);
                $profile = $this->UserModel->getAdminDetails($this->input->post('user_id'));
                $this->session->set_userdata(array(ADMIN_AUTH_USERNAME => $profile->user_name));
                echo "<script>alert('Profile Updated Successfully.')</script>";
                redirect("admin");
            }
        } else {
            $this->session->set_flashdata("su_message", "You Have No Previleage To Update Profile");
            redirect("admin");
        }
    }

    function updatePassword($offset = '')
    {
        if ($this->form_validation->run('change_password') == FALSE) {
            $this->changePassword($this->input->post('user_id'), $offset);
        } else {
            $pass = $this->input->post('login_pwd');
            $this->UserModel->updatePassword($this->input->post('user_id'));
            $this->session->set_flashdata("su_message", "Password Updated Successfully.");
            redirect(ADMIN_PATH . "user/show/$offset");
        }
    }


    function approveOldPassword_check($str)
    {
        $oldpassword = $this->input->post('old');
        $pass = $this->input->post('old_password');
        if ($oldpassword != md5($pass)) {
            $this->form_validation->set_message('approveOldPassword_check', 'Old Password Did Not Matched');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function changeStatus($id, $value, $offset)
    {
        if ($value == 'yes') {
            $stat = 'no';
        } else {
            $stat = 'yes';
        }
        if ($this->UserModel->updateStatus($id, $stat)) {
            $this->session->set_flashdata("su_message", "Status Updated Successfully.");

        } else {
            $this->session->set_flashdata("su_message", "Status Updated Successfully.");
        }
        redirect(ADMIN_PATH . "user/show/$offset");
    }

    function uniqueUsername($str)
    {
        $user_id = $this->input->post('user_id');
        if ($this->UserModel->uniqueUserName($user_id, $this->input->post('user_name')) > 0) {
            $this->form_validation->set_message('uniqueUsername', 'User Name Must Be Unique');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function switchRole($role_type, $roleid)
    {
        $this->session->set_userdata(array(ADMIN_AUTH_ROLE => $roleid));
        $this->session->set_userdata(array(ADMIN_AUTH_TYPE => $role_type));
        redirect(ADMIN_PATH . 'home', 'refresh');
    }

    function rolePrivilege($userid)
    {
        $data['title'] = 'Privilege Role';
        $data['userinfo'] = $this->UserModel->getUserInfoByUserId($userid);
        $privilegeroles = $this->UserModel->getRolesByUserId($userid);
        if (!empty($privilegeroles)) {
            $allowed_roles = $privilegeroles->role_privilege;
            $allowedlist = explode(',', $allowed_roles);
            if (count($allowedlist) > 0) {
                $allowed = $allowedlist;
            } else {
                $allowed = $allowed_roles;
            }
        }
        $data['allowed'] = $allowed;
        $data['old_roles'] = $allowed_roles;
        $data['allroles'] = $this->UserModel->getAllRoles();
        $data['main_content'] = ADMIN_PATH . 'user_role_manage_view';
        $this->load->view(ADMIN_PATH . 'incs/template', $data);

    }

    function updateRole()
    {
        $current = $this->input->post('role_privilege');
        $old = explode(',', $this->input->post('old_privilege'));
        $intersect = array_intersect($old, $current);
        $add = array_diff($current, $intersect);
        array_diff($old, $intersect);
        $userid = $this->input->post('user_id');
        foreach ($add as $userrole) {
            switch ($userrole) {
                case '3':
                    $this->UserModel->addSuperBrokerRole($userid);
                    break;
                case '4':
                    $this->UserModel->addBrokerRole($userid);
                    break;
                case '5':
                    $this->UserModel->addreferrerRole($userid);
                    break;
                case '6':
                    $this->UserModel->addLineRole($userid);
                    break;
                case '7':
                    $this->UserModel->addClientRole($userid);
                    break;
                default:
                    echo 'error while updating roles';
                    break;
            }
        }
        $allroles = implode(',', $current);
        $roleprivilege = $this->UserModel->updateRolesIntoUserTable($allroles, $userid);
        if ($roleprivilege) {
            $this->session->set_flashdata("update_message", "Role has been updated");
            redirect(ADMIN_PATH . "user/rolePrivilege/" . $userid);
        }
        die('error');
    }

    /**
     * @param $user_id
     * @param $data
     * @return mixed
     */
    public
    function addRolesToUser($user_id, $data)
    {
        $a = array('[', '{', ']', '}', '"', 'role_id', ':');
        $b = array('', '', '', '', '', '', '');
        $data['user_roles'][$user_id] = str_replace($a, $b, json_encode($this->RoleModel->getUserIdRoleIdAssociative($user_id)));
        $roles_result = $this->RoleModel->getRoles();
        if (!$roles_result) {
            $data['roles'] = null;
            return $data;
        }
        $roles = array();
        foreach ($roles_result as $role) {
            $roles[] = '{' . 'value: ' . $role->id . ',' . ' text: ' . '\'' . $role->label . '\'' . '}';
        }
        $data['roles'] = str_replace("\"", "", json_encode($roles));
        return $data;
    }
}

?>