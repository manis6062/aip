<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Post extends MY_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model('Inline_model');
		}

		public function index()
		{
			{
				$primaryKeyValue = $_POST['pk'];
				$columnName = $_POST['name'];
				$columnValue = $_POST['value'];
				$table = $_POST['table'];
				$this->Inline_model->addOrUpdate($table, $primaryKeyValue, $columnName, $columnValue);
			}
		}

	}

?>