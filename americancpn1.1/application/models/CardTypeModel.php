<?php

class CardTypeModel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('date');
        $this->load->library('email');
        $this->load->model('RoleModel');
    }


    function insertCardType()
    {
        $data = array(
            'type' => $this->input->post('type'),
            'name' => $this->input->post('name'));
        $this->db->insert('line_type', $this->security->xss_clean($data));
    }

    function deleteCard($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('card');
    }

    function getCardTypes()
    {
        return $this->db->query("SELECT ct.id, ct.type, ct.name FROM line_type ct")->result();
    }


    function  getCardTypesArray()
    {
        $query = $this->db->query("SELECT id, type FROM line_type");
        if ($query->num_rows() > 0) {
            $result = array();
            foreach ($query->result() as $row) {
                $result[$row->id] = $row->type;
            }
            return $result;
        }
        return false;
    }

    function  getCardNamesArray($type)
    {
        $query = $this->db->query("Select id, name from line_type where type = '$type'");
        if ($query->num_rows() > 0) {
            $result = array();
            foreach ($query->result() as $row) {
                $result[$row->id] = $row->name;
            }
            $this->session->set_userdata('card_names', $result);
            return $result;
        }
        return false;
    }

    function  getCardTypeNames()
    {
        $query = $this->db->query("SELECT type, name FROM line_type");
        if ($query->num_rows() > 0) {
            $result = array();
            foreach ($query->result() as $row) {
                $result[$row->type] = $row->name;
            }
            return $result;
        }
        return false;
    }

}