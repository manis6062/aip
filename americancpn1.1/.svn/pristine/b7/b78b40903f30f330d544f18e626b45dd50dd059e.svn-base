<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Content extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('general');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('path');
        $this->load->helper('string');
        $this->load->model('ContentModel');

    }

    public function index()
    {
        $data['title'] = 'content';
        $data['contents'] = $this->ContentModel->getContents();
        $data['main_content'] = ADMIN_PATH . "contents";
        $this->load->view(ADMIN_PATH . 'inc/template', $data);
    }

    function contentForm()
    {
        $data['title'] = 'content';
        $data['action'] = 'add';
        $data['main_content'] = ADMIN_PATH . 'contentForm';
        $this->load->view(ADMIN_PATH . 'inc/template', $data);
    }

    function addContent()
    {
        $this->ContentModel->insert();
        $this->session->set_flashdata("su_message", "Content Added Successfully.");
        redirect(ADMIN_PATH . "content");
    }

    function Content($content_id)
    {
        $data['title'] = 'content';
        $data['action'] = 'update';
        $data['content'] = $this->ContentModel->getContent($content_id);
        $data['main_content'] = ADMIN_PATH . "content";
        $this->load->view(ADMIN_PATH . 'inc/template', $data);
    }

    function updateAction()
    {
        $this->ContentModel->update($this->input->post('content_id'));
        $this->session->set_flashdata("su_message", "Content Updated Successfully.");
        redirect(ADMIN_PATH . "content");
    }

    function deleteContent($content_id)
    {
        if ($this->ContentModel->delete($content_id)) {
            $this->session->set_flashdata("su_message", "Content Deleted Successfully.");
        }
        redirect(ADMIN_PATH . "content");
    }

}

?>