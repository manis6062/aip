<?php

	class ContentModel extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
			// Your own constructor code
			$this->load->helper('date');
			$this->load->library('email');
		}

        ## backend

        function getContents()
        {
            $this->db->select('*');
            $this->db->from('content');
            $this->db->order_by('content_id');
            $query = $this->db->get();
            if ($query->num_rows() > 0)
                return $query->result();
            return 0;
        }

        function insert(){
            $data = array(
                'content_title' => $this->input->post('content_title'),
                'content_description'   => $this->input->post('content_description')
            );
            $this->db->insert('content', $this->security->xss_clean($data));
            return $this->db->insert_id();
        }

        function getContent($id){
            $this->db->select('*');
            $this->db->from('content');
            $this->db->where('content_id', $id);
            $query = $this->db->get();
            if ($query->num_rows() > 0)
                return $query->row();
            return 0;
        }

        function delete($id)
        {
            $this->db->where('content_id', $id);
            $this->db->delete('content');
            if ($this->db->affected_rows() > 0) {
                return TRUE;
            }
            return FALSE;
        }

        ## end backend















		function countAll($cond)
		{
			$this->db->where($cond);
			$query = $this->db->get("content");

			return $query->num_rows();
		}

		function getAll()
		{
			$this->db->select('*');
			$this->db->from('content');
			$query = $this->db->get();
			if ($query->num_rows() > 0)
				return $query->result();
			return 0;
		}

		function getAllActive()
		{

			$this->db->select('*');
			$this->db->from('content');
			$array = array('content_status' => 'Yes', 'crtd_by' => $this->session->userdata(USER_ID));
			$this->db->where($array);
			$query = $this->db->get();

			if ($query->num_rows() > 0)
				return $query->result();

			return 0;
		}

		function getAdminDetails($user_id)
		{
			$query = $this->db->query("SELECT c.content_id, c.content_title, c.content_description, c.content_status, c.created_by, c.created_date, c.updated_by, c.updated_date, c.updated_count
										FROM content AS c WHERE c.content_id = " . $user_id);

			if ($query->num_rows() == 0) {
				return 0;
			} else {
				return $query->row();
			}
		}

		function getDetails($module)
		{
			//$query = $this->db->get_where('content', array('content_id' => $user_id));
			$query = $this->db->query("SELECT
        							content.content_id,
        							content.content_title,
									content.content_description
									FROM
									content
									INNER JOIN menu ON content.content_id = menu.content_id
									INNER JOIN module ON menu.menu_module = module.ID
									WHERE
									module.module_controller = '$module'");

			if ($query->num_rows() == 0) {
				return 0;
			} else {
				return $query->row();
			}
		}




		function updateStatus($id, $value)
		{
			$data = array('content_status' => $value);

			$this->db->where("content_id", $id);
			$this->db->update('content', $this->security->xss_clean($data));
			if ($this->db->affected_rows() == '1') {
				return TRUE;
			}
			return FALSE;
		}


		function getHomeContent()
		{
			$query = $this->db->query("SELECT id FROM module WHERE module_controller = 'home'");
			$module_id = $query->row()->id;
			$qry = $this->db->query("select c.* from menu as m inner join content as c on m.content_id = c.content_id where menu_module = $module_id");
			if ($qry->num_rows() > 0) {
				return $qry->row();
			}
			return 0;
		}

	}

?>