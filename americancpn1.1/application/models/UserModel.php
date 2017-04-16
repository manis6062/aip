<?php

class UserModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('date');
        $this->load->library('email');
        $this->load->library('encrypt');
        $this->load->helper('security');
        $this->load->model('RoleModel');
        $this->load->database();

    }

    function getLineOwners($userId)
    {
        $result = $this->db->query("select o.owner_id, concat(p.first_name,' ', p.last_name) name from owner o LEFT JOIN profile p on p.user_id = o.owner_id where o.owner_id = $userId")->result();
        $owner = array();
        foreach ($result as $user) {
            $owner[$user->owner_id] = $user->name;
        };
        return $owner;
    }

    function getUsersUnder($userId)
    {
        $unders = $this->db->query("select b.broker_id from broker b where b.parent_id = '$userId' UNION  select c.client_id from client c where c.broker_id = '$userId' UNION  select r.broker_id from referrer r where r.broker_id = '$userId')")->result();
        return $this->db->query("select * from profile p where p.user_id in (explode(',', $unders))")->result();
    }

    function getBrokers()
    {
        $data = $this->db->query("SELECT u.id, concat(p.first_name, ' ', p.last_name, ' - ' , u.email, ' (', u.id, ')') name FROM user u LEFT JOIN user_role ur ON ur.user_id = u.id LEFT JOIN profile p ON p.user_id = u.id RIGHT  JOIN role r ON r.id = ur.role_id WHERE r.name = 'broker'")->result();
        $brokers = array();
        foreach ($data as $broker) {
            $brokers[$broker->id] = $broker->name;
        }
        return $brokers;
    }

    function getUser($userId)
    {
        $query = $this->db->query("SELECT u.id, p.first_name, p.middle_initial, p.last_name, p.primary_phone_number,
			 p.secondary_phone_number, u.email, p.gender, p.dob, p.cpn, u.status, p.comment, b.site, b.name, b.dba,
										b.phone, a.state, a.postal_code,
										b.fax, b.email AS b_email, a.street, a.city, u.password
									   FROM user u
									   LEFT JOIN profile p ON p.user_id = u.id
									   LEFT JOIN business b ON b.user_id = u.id
									   LEFT JOIN  address a ON a.id = u.id
									   WHERE u.id = ?", array($userId));
        if ($query->num_rows() > 0) {
            return $query->row();
        }
    }

    function getAllUsers()
    {
        $query = $this->db->query("SELECT * FROM user u LEFT JOIN profile p ON p.user_id = u.id;");
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function insertUser()
    {
        $this->db->trans_start();
        $data = array(
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'status' => 1,
        );
        $this->db->insert('user', $this->security->xss_clean($data));
        $userId = $this->db->insert_id();
        $roleId = $this->input->post('roleId');
        $roleName = $this->RoleModel->getRoleNameByRoleId($roleId);
        $this->insertProfile($userId);
        $brokerId = $this->input->post('brokerId');
        $this->RoleModel->insertUserRoles($userId, array($roleId));
        if ($roleName == BROKER) {
            $this->insertBusiness($userId);
            $this->insertBroker($brokerId, $userId);
            $brokerRoleId = $this->RoleModel->getRoleIdByRoleName(SUPER_BROKER);
            if (count($this->RoleModel->getUsersByRoleId($brokerRoleId)) > 0 and !$this->RoleModel->hasUserRole($brokerId, $brokerRoleId, null)) {
                $this->RoleModel->insertUserRole($brokerId, $brokerRoleId);
            }
        } else if ($roleName == CLIENT) {
            $this->insertClient($brokerId, $userId);
        } else if (($roleName == OWNER)) {
            $this->insertOwner($brokerId, $userId);
        }
        $this->db->trans_complete();
        return $userId;
    }


    function insertreferrer($referrerId, $referreeId)
    {
        $data = array(
            "referrer_id" => $referrerId,
            "referree" => $referreeId,
            "status" => 1
        );
        $this->db->insert('referrer', $data);
    }

    function insertBroker($parentId, $brokerId)
    {
        $data = array(
            "broker_id" => $parentId,
            "child_broker_id" => $brokerId,
            "status" => 1
        );
        $this->db->insert('broker', $data);
    }



    function getUserIdFromEmail($email_id)
    {
        foreach ($email_id as $values) {
            $query = $this->db->query("
                  select id, email from user where email = '$values'");
            $user_ids[] = $query->row()->id;
        }
        return $user_ids;

    }

    function insertProfile($user_id)
    {
        $data = array(
            'user_id' => $user_id,
            'ssn' => $this->input->post('ssn'),
            'first_name' => trim($this->input->post('firstName')),
            'middle_initial' => trim($this->input->post('mi')),
            'last_name' => trim($this->input->post('lastName')),
            'dob' => $this->input->post('dob'),
            'primary_phone_number' => $this->input->post('phone'),
            'secondary_phone_number' => $this->input->post('fax') /*change this field into fax*/
        );
        $this->db->insert('profile', $this->security->xss_clean($data));

    }


    function insertAddress($user_id)
    {
        $data1 = array(
            'street' => 'test',
        );
        $this->db->insert('address', $this->security->xss_clean($data1));
        return $this->db->insert_id();
    }

    function insertBusiness($user_id)
    {
        $data1 = array(
            'user_id' => $user_id,
            'site' => trim($this->input->post('site')),
            //'name' => $name,
            //'dba' => $dba,
            //'phone' => $b_phone,
            'fax' => trim($this->input->post('fax'))
        );
        $this->db->insert('business', $this->security->xss_clean($data1));
    }


    function deleteUser($userid)
    {

        $this->db->where('user_id', $userid);
        $this->db->delete('user_role');

        $this->db->trans_start();
        $this->db->where('user_id', $userid);
        $this->db->delete('profile');

        $this->db->where('id', $userid);
        $this->db->delete('address');

        $this->db->where('user_id', $userid);
        $this->db->delete('business');

        $this->db->where('id', $userid);
        $this->db->delete('user');
        $this->db->trans_complete();
    }

    function getStates()
    {
        $query = $this->db->query("SELECT * FROM states ORDER BY id ASC");
        if ($query->num_rows() > 1)
            return $query->result();
        return 0;
    }

    function getNameFromEmail($email_id)
    {
        foreach ($email_id as $values) {
            $query = $this->db->query("
                  SELECT u.* , p.* from user u INNER JOIN profile p on u.id = p.user_id where u.email = '$values' ");
            $name[] = $query->row()->first_name . ' ' . $query->row()->middle_initial . ' ' . $query->row()->last_name;
        }

        return $name;

    }



    function getUserIdFromEmails($email_id)
    {
        foreach ($email_id as $values) {
            $query = $this->db->query("
                  select id, email from user where email = '$values'");
            $user_ids[] = $query->row()->id;
        }
        return $user_ids;

    }


    function get_brokersEmail($q)
    {
        $this->db->select('*');
        $this->db->like('email', $q);
        $query = $this->db->get('user');
        foreach ($query->result_array() as $val) {
            $new[] = $val['email'];
        }
        echo json_encode($new);

    }

    /************************************* OLD CODE ************************//////////////////////////////////

    function countAll()
    {
        $query = $this->db->get("user");
        return $query->num_rows();
    }

    function getAllPaginate($perPage, $offset)
    {
        if ($this->session->userdata(ADMIN_AUTH_TYPE) == 'super-admin') {
            $cond = "user_type !='' and user_type != 'client'";
        } elseif ($this->session->userdata(ADMIN_AUTH_TYPE) == 'user') {
            $cond = "user_type ='user' and user_id = " . $this->session->userdata(USER_ID);
        } elseif ($this->session->userdata(ADMIN_AUTH_TYPE) == '') {
            $cond = "user_type !=''";
        } else {
            $cond = "user_type like '%%'";
        }
        $query = $this->db->query("SELECT * FROM user WHERE " . $cond);

        if ($query->num_rows() > 0)
            return $query->result();

        return 0;
    }

    function login($email, $password)
    {
        $query = $this->db->query("SELECT u.id, concat(p.first_name, ' ', p.last_name) AS name FROM user u LEFT JOIN user_role ur ON ur
                .user_id = u .id LEFT JOIN profile p ON u.id = p.user_id WHERE u.email = ? AND u.password = ? AND u.status = 1", array($email, $password));
        if ($query->num_rows() == 0) {
            return 0;
        } else {
            $row = $query->row();
            $roleResult = $this->db->query("select ur.role_id, r.name, r.label from user_role ur LEFT JOIN user u on u.id = ur.user_id LEFT JOIN  role r on r.id = ur.role_id where u.email = '$email'")->result();
            $roles = array();
            $roleKeys = '';
            foreach ($roleResult as $role) {
                $roles[$role->name] = $role->label;
                $roleKeys .= $role->role_id . ',';
            }
            $roleKeys = trim($roleKeys, ",");
            $authResult = '';
            if ($roleKeys) {
                $authResult = $this->db->query("SELECT a.name FROM role_auth ra LEFT JOIN  auth a on a.id = ra.auth_id WHERE ra.role_id IN ($roleKeys)")->result();
            }
            $firstRole = array();
            if (count($roleResult) != 0) {
                $firstRole = $roleResult[0];
            }
            if ($firstRole) {
                $roleId = $firstRole->role_id;
                $roleName = $firstRole->name;
                $roleLabel = $firstRole->label;
            } else {
                $roleId = '';
                $roleName = '';
                $roleLabel = '';
            }

            $userdata = array(
                USER_ID => $row->id,
                ROLES => $roles,
                AUTHS => $authResult,
                NAME => $row->name,
                ROLE_ID => $roleId,
                ROLE_NAME => $roleName,
                ROLE_LABEL => $roleLabel
            );
            $this->session->set_userdata($userdata);
            return $row->id;
        }
    }


    function affiliateLogin($username, $password, $domainid)
    {
        $query = $this->db->query("SELECT
									user . user_id,
									user . user_name,
									user . login_name,
									nc_affiliate . affiliate_id,
									nc_affiliate . domain_id,
									nc_affiliate . theme_id
									FROM
									user
									INNER JOIN nc_affiliate ON user . user_id = nc_affiliate . user_id
									WHERE user . login_name = '$username'
            AND user . login_pwd = '$password'
            AND user . status = 'yes'
            AND user . user_type = 'affiliate'
            AND nc_affiliate . domain_id = $domainid ");
        if ($query->num_rows() == 0) {
            return 0;
        } else {
            $row = $query->row();
            return $row->affiliate_id;
        }
    }

    function getAdminDetails($user_id)
    {
        $query = $this->db->get_where('user', array('user_id' => $user_id));
        if ($query->num_rows() == 0) {
            return 0;
        } else {
            return $query->row();
        }
    }

    function uniqueUserName($userid, $name)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_name', $name);
        $this->db->where_not_in('user_id', $userid);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function getAllUsersTemp()
    {
        $this->db->order_by("user_id", "DESC");
        $query = $this->db->get("user");
        if ($query->num_rows() > 0)
            return $query->result();
        return 0;
    }

    function getSingleUsers()
    {
        $this->db->where("user_id", $this->session->userdata(USER_ID));
        $this->db->order_by("user_id", "DESC");
        $query = $this->db->get("user");
        if ($query->num_rows() > 0)
            return $query->result();
        return 0;
    }

    function update($user_id)
    {
        $today = date("Y - m - d H:i:s");
        $data = array('user_name' => trim($this->input->post('user_name')),
            'phone' => ucwords($this->input->post('phone')),
            'cell' => ucwords($this->input->post('cell')),
            'address' => ucwords(trim($this->input->post('address'))),
            'email' => $this->input->post('email'),
            'auth_id' => implode(',', $this->input->post('auth_id')),
            'status' => $this->input->post('status'),
            'updt_dt' => $today,
            'updt_cnt' => $this->input->post('updt_cnt') + 1,
            'updt_by' => $this->session->userdata(USER_ID),
            'user_type' => $this->input->post('user_type')
        );
        $this->db->where("user_id", $user_id);
        $this->db->update('user', $this->security->xss_clean($data));
    }

    function updateself($user_id)
    {
        $today = date("Y - m - d H:i:s");
        $data = array(
            'user_name' => trim($this->input->post('user_name')),
            'phone' => ucwords($this->input->post('phone')),
            'cell' => ucwords($this->input->post('cell')),
            'address' => ucwords(trim($this->input->post('address'))),
            'email' => trim($this->input->post('email')),
            'updt_dt' => $today,
            'updt_cnt' => $this->input->post('updt_cnt') + 1,
            'updt_by' => $this->session->userdata(USER_ID),
            'paypal_account' => $this->input->post('pa'),
            'referrer_reg_charge' => $this->input->post('rrc')
        );
        $this->db->where("user_id", $user_id);
        $this->db->update('user', $this->security->xss_clean($data));
    }

    function updatePassword($user_id)
    {
        $data = array('login_pwd' => md5($this->input->post('login_pwd')),
            'pword' => $this->encrypt->encode($this->input->post('login_pwd'), '!!@@##$$'));
        $this->db->where("user_id", $user_id);
        $this->db->update('user', $this->security->xss_clean($data));
    }


    function updateStatus($id, $value)
    {
        $data = array('status' => $value);
        $this->db->where("user_id", $id);
        $this->db->update('user', $this->security->xss_clean($data));
        if ($this->db->affected_rows() == '1') {
            return TRUE;
        }
        return FALSE;
    }

    function insert()
    {
        $today = date("Y - m - d H:i:s");
        $data = array('user_name' => trim($this->input->post('user_name')),
            'login_name' => $this->input->post('login_name'),
            'login_pwd' => $this->input->post('login_pwd'),
            'phone' => ucwords($this->input->post('phone')),
            'cell' => ucwords($this->input->post('cell')),
            'address' => ucwords(trim($this->input->post('address'))),
            'user_type' => $this->input->post('user_type'),
            'email' => trim($this->input->post('email')),
            'crtd_by' => $this->session->userdata(USER_ID),
            'status' => $this->input->post('status'),
            'auth_id' => implode(',', $this->input->post('auth_id')),
            'crtd_dt' => $today);
        $this->db->insert('user', $this->security->xss_clean($data));
        $userid = $this->db->insert_id();
        return $userid;
    }

    function insertClient($brokerId, $clientId)
    {
        $data = array(
            "broker_id" => $brokerId,
            "client_id" => $clientId,
            "status" => 1
        );
        $this->db->insert('client', $data);
    }

    function insertOwner($brokerId, $ownerId)
    {
        $data = array(
            "broker_id" => $brokerId,
            "owner_id" => $ownerId,
            "status" => 1
        );
        $this->db->insert('owner', $data);
    }

    function getDomainUser($domain)
    {
        $query = $this->db->query("Select user_id , domain_id from nc_domain where domain_name = '$domain'");
        if ($query->num_rows() > 0) {
            return $query->row();
        }
        return 0;
    }

    function getSuperAdmin()
    {
        $query = $this->db->query("SELECT user_id FROM user WHERE user_type = 'super-admin'");
        if ($query->num_rows() > 0) {
            return $query->row();
        }
        return 0;
    }

    function getSuperDuperAdmin()
    {
        $query = $this->db->query("SELECT user_id FROM user WHERE user_type = ''");
        if ($query->num_rows() > 0) {
            return $query->row();
        }
        return 0;
    }

    function checkemailregistered($email)
    {
        $this->db->select('user_id');
        $query = $this->db->get_where("user", array('email' => $email));
        if ($query->num_rows() > 0) {
            return TRUE;
        }
        return FALSE;
    }

    function getAdminPaypalInfo()
    {
        $query = $this->db->query("SELECT paypal_account, referrer_reg_charge FROM user WHERE user_type = 'super-admin' ORDER BY user_id ASC LIMIT 1");
        if ($query->num_rows() == 1) {
            return $query->row();
        }
        return 0;
    }

//		function insertUser($email, $password, $role_id, $firstName, $middleInitial, $lastName, $primaryContact)
//		{
//			$this->db->trans_start();
//			$date = date('Y-m-d H:i:s');
//			$data = array(
//				'email' => $email,
//				'password' => md5($password),
//				'status' => 1,
//				'created_date' => $date);
//			$this->db->insert('user', $this->security->xss_clean($data));
//			$user_id = $this->db->insert_id();
//			$this->insertUserRole($user_id, $role_id, $date);
//			$this->InsertUserIntoUserTable($user_id,$firstName,$middleInitial,$lastName,$primaryContact );
//			$this->db->trans_complete();
//			return $user_id;
//		}
//
//
//		function insertUserRole($user_id, $role_id, $date)
//		{
//			$data = array(
//				'user_id' => $user_id,
//				'role_id' => $role_id,
//				'status' => 1,
//				'registration_date' => $date);
//			$this->db->insert('user_role', $this->security->xss_clean($data));
//		}


    function getPrivilegeRole($userid)
    {
        $query = $this->db->query("SELECT u.id ,ur.role_id ,ra.auth_id FROM user u JOIN user_role ur ON ur.user_id = u.id LEFT JOIN role_auth ra ON ra.role_id = ur.role_id WHERE u.id = " . $userid);
        if ($query->num_rows() > 0) {
            $roles = $query->row()->role_privilege;
            $privilege_roles = explode(',', $roles);
            foreach ($privilege_roles as $key => $value) {
                $role = $this->RoleModel->getRolesByRoleId($value);
                $role_name[$key] = $role->role_type;
                $role_id[$key] = $role->role_id;
                $roller[] = array($role_id[$key] => $role_name[$key]);
            }
            return $roller;
        }
        return 0;
    }

    function getUserRoleDetailByRoleID($roleid)
    {
        $query = $this->db->get_where('user_role', array('role_id' => $roleid));
        if ($query->num_rows() > 0)
            return $query->row();
        else
            return 0;
    }

//        function getRolesByUserID($userid) //problem todo
//        {
//            $query = $this->db->get_where('user', array('user_id' => $userid));
//            if ($query->num_rows() > 0)
//                return $query->row();
//            else
//                return 0;
//        }

    function getAllRoles()
    {
        $this->db->select('*');
        $this->db->from('user_role');
        $this->db->where("role_id > 2");
        $this->db->order_by('role_id', 'ASC');
        $query = $this->db->get();
        if ($query->num_rows() > 0)
            return $query->result();
        else
            return 0;
    }

    function getUserInfoByUserId($userid)
    {
        $query = $this->db->get_where('user', array('user_id' => $userid));
        if ($query->num_rows() > 0)
            return $query->row();
        else
            return 0;

    }

    function addSuperBrokerRole($userid)
    {
        $this->getUserInfoByUserId($userid);

    }

    function brokerAlreadyExistCheck($userid)
    {
        $query = $this->db->get_where('nc_affiliate', array('user_id' => $userid));
        if ($query->num_rows() > 0)
            return $query->row();
        else
            return 0;
    }

    function addBrokerRole($userid)
    {
        $role_exist = $this->brokerAlreadyExistCheck($userid);
        if (empty($role_exist)) {
            $userinfo = $this->getUserInfoByUserId($userid);
            list($fname, $lname) = explode(' ', $userinfo->user_name);
            $today = date('Y-m-d H:i:s');
            $data = array(
                'user_id' => $userid,
                'affiliate_fname' => ucfirst($fname),
                'affiliate_lname' => ucfirst($lname),
                'affiliate_email' => $userinfo->email,
                'affiliate_primary_contact' => $userinfo->phone,
                'affiliate_registered_date' => $today,
                'affiliate_status' => 'Y',
                'is_delete' => 'NO',
            );
            $this->db->insert('nc_affiliate', $this->security->xss_clean($data));
            $brokerid = $this->db->insert_id();
            $this->db->insert('nc_affiliate_detail', array('affiliate_id' => $brokerid));
        }
    }

    function referrerAlreadyExistCheck($userid)
    {
        $query = $this->db->get_where('referrer', array('user_id' => $userid));
        if ($query->num_rows() > 0)
            return $query->row();
        else
            return 0;
    }

    function addreferrerRole($userid)
    {
        $role_exist = $this->referrerAlreadyExistCheck($userid);
        if (empty($role_exist)) {
            $userinfo = $this->getUserInfoByUserId($userid);
            list($fname, $lname) = explode(' ', $userinfo->user_name);
            $today = date('Y-m-d H:i:s');
            $data = array(
                'user_id' => $userid,
                'ref_fname' => ucfirst($fname),
                'ref_lname' => ucfirst($lname),
                'ref_email' => $userinfo->email,
                'ref_primary_contact' => $userinfo->phone,
                'ref_registered_date' => $today,
                'ref_status' => 'Y',
                'ref_is_delete' => 'NO'
            );
            $this->db->insert('referrer', $this->security->xss_clean($data));
            return $referrerid = $this->db->insert_id();

        }
    }

    function lineAlreadyExistCheck($userid)
    {
        $query = $this->db->get_where('nc_line_owner', array('user_id' => $userid));
        if ($query->num_rows() > 0)
            return $query->row();
        else
            return 0;
    }

    function addLineRole($userid)
    {
        $role_exist = $this->lineAlreadyExistCheck($userid);
        if (empty($role_exist)) {
            $userinfo = $this->getUserInfoByUserId($userid);
            list($fname, $lname) = explode(' ', $userinfo->user_name);
            $today = date('Y-m-d H:i:s');
            $data = array(
                'user_id' => $userid,
                'to_fname' => ucfirst($fname),
                'to_lname' => ucfirst($lname),
                'to_email' => $userinfo->email,
                'to_pcon' => $userinfo->phone,
                'to_reg_date' => $today,
            );
            $this->db->insert('nc_line_owner', $this->security->xss_clean($data));
            return $toid = $this->db->insert_id();

        }
    }

    function updateRolesIntoUserTable($roles, $userid)
    {
        $this->db->where('user_id', $userid);
        $this->db->update('user', array('role_privilege' => $roles));
        if ($this->db->affected_rows() == 1)
            return TRUE;
        else
            return FALSE;
    }

}
