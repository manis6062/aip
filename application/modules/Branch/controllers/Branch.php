<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch extends MX_Controller {
    
	public function index()
	{
                $this->load->model("branch_model");
                $data = $this->branch_model->getAllBranch();
                
                
                $parent_array = $data[0];
                echo "<pre>";
                print_r($data);
                
                
                foreach ($parent_array as $value) {
                    
                    if($value->id == $data['id']){
                        echo $value->name . '<br>';
                    }
                }
                
                 echo "</pre>";
		$this->load->view('welcome_message');
	}
        
}
