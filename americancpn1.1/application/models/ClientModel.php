<?php

	class ClientModel extends CI_Model
    {

        function __construct()
        {
            parent::__construct();
            $this->load->helper('date');
            $this->load->library('email');
        }

        function getClients(){
            $query = $this->db->query("
                                    SELECT u.*, p.*
                                    FROM user u
                                    LEFT JOIN user_role ur
                                    ON u.id = ur.user_id
                                    LEFT JOIN profile p
                                    ON u.id = p.user_id
                                    WHERE ur.role_id = 2
                                  ");
            if($query->num_rows() >0)
                return $query->result();
            else
                return 0;
        }
    }
