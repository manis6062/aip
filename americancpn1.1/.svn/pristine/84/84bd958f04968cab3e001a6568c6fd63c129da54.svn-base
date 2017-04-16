<?php

	class FaqModel extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
			// Your own constructor code
			$this->load->helper('date');
			$this->load->library('email');

		}

        function getFaqs()
        {
            $this->db->select('*');
            $this->db->from('faq');
            $this->db->order_by('faq_id');
            $query = $this->db->get();
            if ($query->num_rows() > 0)
                return $query->result();
            return 0;
        }

        function insert(){
            $data = array(
                    'faq_question' => $this->input->post('faq_question'),
                    'faq_answer'   => $this->input->post('faq_answer')
            );
            $this->db->insert('faq', $this->security->xss_clean($data));
            return $this->db->insert_id();
        }

        function getFaq($id){
            $this->db->select('*');
            $this->db->from('faq');
            $this->db->where('faq_id', $id);
            $query = $this->db->get();
            if ($query->num_rows() > 0)
                return $query->row();
            return 0;
        }

        function delete($id)
        {
            $this->db->where('faq_id', $id);
            $this->db->delete('faq');
            if ($this->db->affected_rows() > 0) {
                return TRUE;
            }
            return FALSE;
        }

	}

?>