<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class CardType extends CI_Controller
{
    public $errors = '';

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('general');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('path');
        $this->load->helper('string');
        $this->load->model('CardTypeModel');
    }

    public function cardTypeForm()
    {
        $data['cardTypes'] = $this->CardTypeModel->getCardTypesArray();
        $data['main_content'] = ADMIN_PATH . "cardTypeForm";
        $this->load->view(ADMIN_PATH . 'inc/template', $data);
    }

    public function addCardType()
    {
        try {
            $this->CardTypeModel->insertCardType();
        } catch (Exception $e) {
            echo "error";
            redirect(ADMIN_PATH . "cardType/cardTypeForm");
        }
        redirect(ADMIN_PATH . "cardType/cardTypes");
    }

    public function updateRole($id)
    {
        $data['data'] = $this->RoleModel->updateRole($id);
        $data['title'] = "Update Role";
        $data['main_content'] = ADMIN_PATH . "role";
        $this->load->view(ADMIN_PATH . 'inc/template', $data);

    }

    public function cardTypes()
    {
        $data['data'] = $this->CardTypeModel->getCardTypes();

        $data['title'] = "";
        $data['main_content'] = ADMIN_PATH . "cardTypes";
        $this->load->view(ADMIN_PATH . 'inc/template', $data);

    }

    public function deleteCard($id)
    {
        try {
            $this->CardTypeModel->deleteCard($id);
            redirect(ADMIN_PATH . "cardType/cardTypes");
        } catch (Exception $e) {
            /*	$data['data'] = $this->RoleModel->getUsersByRoleId($id);
                $data['main_content'] = ADMIN_PATH . "users_roles";
                $this->load->view(ADMIN_PATH . 'inc/template', $data);*/
            /*todo: handle this later if needed*/
        }

    }

    public function deleteUsersFromRole($roleId)
    {
        try {
            $this->RoleModel->deleteUsersFromRole($roleId);
            $this->session->set_flashdata("su_message", "role from users deleted successfully.");
            redirect(ADMIN_PATH . "role/roles");
        } catch (Exception $e) {
            echo "some problem";
        }
    }


    public function addRole()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('label', 'Label', 'required');
        $this->form_validation->set_rules('value', 'Value', 'required|max_length[10]');
        $data['main_content'] = ADMIN_PATH . "roleForm";
        $this->load->view(ADMIN_PATH . 'inc/template', $data);
    }
}