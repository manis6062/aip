<?php

class RoleModel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('date');
        $this->load->library('email');
        $this->load->model('RoleModel');
    }

    function  getAllRoles()
    {
        $query = $this->db->query("SELECT * FROM role");
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return 0;
    }

    function deleteUsersFromRole($roleId)
    {
        $this->db->delete('user_role', array('role_id' => $roleId));
    }

    function  getUsersByRoleId($roleId)
    {
        $query = $this->db->query("SELECT concat(p.first_name,' ',p.last_name) name, ur.user_id, r.label, r.id FROM user_role ur LEFT JOIN  profile p ON p.user_id = ur.user_id LEFT JOIN role r ON r.id = ur.role_id WHERE role_id = ?", array($roleId));
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return 0;
    }

    function insertRoles()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'label' => $this->input->post('label'),
            'public' => $this->input->post('public'));
        $this->db->insert('role', $this->security->xss_clean($data));
    }

    function getRoles()
    {
        $this->db->select('r.id, r.name, r.label, r.public');
        $this->db->from('role r');
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get();
        if ($query->num_rows() > 0)
            return $query->result();
        else
            return false;
    }

    function getRoleAuthArray()
    {
        $query = $this->db->query("SELECT r.label, r.id role_id, a.id auth_id FROM role r  LEFT JOIN role_auth ra ON ra.role_id = r.id LEFT JOIN auth a ON a.id = ra.auth_id");
        if ($query->num_rows() > 0) {
            $result = array();
            foreach ($query->result() as $row) {
                $result[] = array('role_id' => $row->role_id, 'auth_id' => $row->auth_id, 'role_label' => $row->label);
            }
            return $result;
        } else
            return 0;
    }

    function getPublicRoles()
    {
        $this->db->select('*');
        $this->db->from('role');
        $this->db->where('public', 1);
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get();
        if ($query->num_rows() > 0)
            return $query->result();
        else
            return false;
    }


    function deleteRole($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('role');
    }

    function updateRole($id)
    {
        $data = array('value' => trim($this->input->post('value')),
            'label' => trim($this->input->post('label'))
        );
        $this->db->where("id", $id);
        $this->db->update('role', $this->security->xss_clean($data));
    }

    function getRolesByUserId($user_id)
    {
        $query = $this->db->query("SELECT ur.user_id , ur.role_id , r.id ,r.name
		from user_role ur INNER JOIN role r on ur.role_id = r.id where ur.user_id = $user_id ");
        if ($query->num_rows() > 0)
            return $query->result();
        else
            return false;
    }

    function hasUserRole($userId, $roleId, $roleName)
    {
        $query = "SELECT ur.role_id
		from user_role ur INNER JOIN role r on ur.role_id = r.id where ur.user_id = '$userId' and ";
        if ($roleId) {
            $query .= "ur.role_id = '$roleId' ";
        } else {
            $query .= "ur.role_name = '$roleName'";
        }
        return $this->db->query("{$query}")->num_rows();
    }

    function getUserIdRoleIdAssociative($user_id)
    {
        $query = $this->db->query("SELECT ur.role_id, ur.user_id
		from user_role ur INNER JOIN role r on ur.role_id = r.id where ur.user_id = $user_id ");
        if ($query->num_rows() > 0) {
            $result = $query->result();
            $roles = array();
            foreach ($result as $data) {
                $roles[$data->user_id] = $data->role_id;
            }
            return $result;
        } else
            return false;
    }


    function getRolesConcatByUserId($user_id)
    {
        $query = $this->db->query("SELECT GROUP_CONCAT(ur.role_id) as role_id
		from user_role ur INNER JOIN role r on ur.role_id = r.id where ur.user_id = $user_id
		");
        if ($query->num_rows() > 0)
            return $query->result();
        else
            return false;

    }


    function getRolesByRoleId($role_id)
    {
        $query = $this->db->query("SELECT * FROM user_role WHERE role_id = $role_id");
        if ($query->num_rows() > 0) {
            return $query->row();
        }
        return 0;
    }

    function getRoleIdByRoleName($roleName)
    {
        $query = $this->db->query("SELECT r.id FROM role r WHERE r.name = '$roleName'");
        if ($query->num_rows() > 0) {
            return $query->row()->id;
        }
        return 0;
    }

    function insertUserRoles($userId, $rolesIds)
    {
        foreach ($rolesIds as $key => $role_id) {
            $this->RoleModel->inserUserRole($userId, $role_id, 1);
        }
    }

    function insertUserRole($userId, $roleId)
    {
        $data = array(
            "user_id" => $userId,
            "role_id" => $roleId,
            "status" => 1
        );
        $this->db->insert('user_role', $data);
    }

    function inserUserRole($userId, $roleId, $status)
    {
        $data1 = array(
            'user_id' => $userId,
            'role_id' => $roleId,
            'status' => $status,
        );
        $this->db->insert('user_role', $this->security->xss_clean($data1));
    }

    function getRoleNameByRoleId($roleId)
    {
        return $this->db->query("SELECT r.name FROM role r WHERE r.id = '$roleId'")->row()->name;
    }


}