<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller
{
    protected $roleId;
    protected $roleName;
    protected $authIds;
    protected $roleLabel;

    public function __construct()
    {
        parent::__construct();
        $this->roleId = $this->session->userdata(ROLE_ID);
        $this->authIds = $this->session->userdata(AUTHS);
        $this->roleName = $this->session->userdata(ROLE_NAME);
        $this->roleLabel = $this->session->userdata(ROLE_LABEL);
    }

}
