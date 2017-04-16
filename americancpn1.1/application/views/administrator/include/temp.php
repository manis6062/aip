<?php
$this->load->helper('MenuModel');
$this->load->view(ADMIN_PATH.'include/header.php');
$this->load->view(ADMIN_PATH.'include/demoleftmenu.php');
$this->load->view($main_content);
$this->load->view(ADMIN_PATH.'include/footer.php');
?>