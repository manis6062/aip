<?php
class NewsletterModel extends CI_Model {

    function __construct() {
        parent::__construct();
        // Your own constructor code
        $this -> load -> helper('date');
        $this -> load -> library('email');
    }

    function countAll($cond) {
        $this -> db -> where($cond);
        $query = $this -> db -> get("nc_newsletter");

        return $query -> num_rows();
    }

    function getAllPaginate($cond, $perPage, $offset) {
        $this -> db -> select('*');
        $this -> db -> from('nc_newsletter');

        $this -> db -> where($cond);
        $this -> db -> limit($perPage, $offset);
        $query = $this -> db -> get();

        if ($query -> num_rows() > 0)
            return $query -> result();

        return 0;
    }

    // get the administratro details
    function getAdminDetails($id) {
        $query = $this -> db -> get_where('nc_choosencharge', array('id' => $id));

        if ($query -> num_rows() == 0) {
            return 0;
        } else {
            return $query -> row();
        }
    }

    function getAll() {
        $query = $this -> db -> query("SELECT * FROM nc_newsletter_template  ORDER BY template_id DESC");
        if ($query -> num_rows() > 0)
            return $query -> result();

        return 0;
    }
	
	function getTemplate($tid) {
        $query = $this -> db -> query("SELECT template_code FROM nc_newsletter_template WHERE template_id = '$tid'");
        if ($query -> num_rows() > 0)
            return $query -> row()->template_code;

        return 0;
    }

    function update($id) {
        $today = date("Y-m-d H:i:s");

        $data = array('company_name' => $this -> input -> post('name'),
        	'company_website' => $this -> input -> post('website'),
        	'state' => $this -> input -> post('state'),
			'address' => $this->input->post('address'),
			'details' => $this->input->post('details'));
        $this -> db -> where("id", $id);
        $this -> db -> update('nc_newsletter', $this -> security -> xss_clean($data));
        if($this->db->affected_rows()>0){
            return TRUE;
        }
        return FALSE;
    }

    function delete($id) {
        $this -> db -> where('template_id', $id);
        $this -> db -> delete('nc_newsletter_template');
        if ($this -> db -> affected_rows()>0) {
            return TRUE;
        }
        return FALSE;
    }

    function insert() {

        $today = date("Y-m-d H:i:s");
		$temp = $this -> input -> post('template_code');
		$code = preg_replace("/\r\n|\r|\n/",'',$temp);
		//$code = nl2br($temp);
		$code = htmlspecialchars($code);
		//echo $code = mysql_real_escape_string($code);
		

        $data = array(
        	'template_title' => $this -> input -> post('template_title'),
        	'template_code' => $code,
        	'template_date' => $today
			);
        $this -> db -> insert('nc_newsletter_template', $this -> security -> xss_clean($data));
        $newstempid = $this -> db -> insert_id();

        return $newstempid;
    }
	
	

}
?>