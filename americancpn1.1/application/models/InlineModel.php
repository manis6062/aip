<?php

	class InlineModel extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->helper('security');
			$this->load->database();

		}

		function addOrUpdate($table, $pk, $name, $value)
		{
			$database = $this->db->database;
			$this->db->trans_start();
			$primary_key = $this->db->query("select column_name from information_schema.columns where table_schema = '$database' and table_name = '$table' and column_key = 'pri'")->row()->column_name;
			$count = $this->db->query("select * from $table where $primary_key  = '$pk'")->num_rows();
			$multiKey = $this->db->query("SELECT COUNT(*) num_keys FROM   information_schema.KEY_COLUMN_USAGE WHERE table_schema = '$database' and table_name ='$table' AND constraint_name = 'PRIMARY'")->row()->num_keys > 1;
			if (!$multiKey) {
				if (($value || $value == 0)) {
					if ($count == 0) {
						$this->db->query("insert into $table ($primary_key, $name) values ('$pk', '$value')");
					} else {
						$this->db->query("update $table set $name = '$value' where $primary_key = '$pk'");
					}
				}
			} else {
				$this->db->delete($table, array($primary_key => $pk));
				if ($value) {
					foreach ($value as $val) {
						$this->db->query("insert into $table ($primary_key, $name) values ('$pk', '$val')");
					}
				}
			}
			$this->db->trans_complete();
		}
	}
