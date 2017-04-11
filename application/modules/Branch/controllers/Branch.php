<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch extends MX_Controller {
    
	public function index()
	{
               
		$this->load->view('welcome_message' , $data);
	}
        
        
        public function getBranches(){
             $this->load->model("branch_model");
                $branch = $this->branch_model->getCategoryForParentId();
                foreach ($branch as $value) {
                    
                    foreach ($value['sub_categories'] as $value2) {
                         if($value2['parent_id'] == $value['id']){
                          $sub_categories_name = $value2['name'];
                          $categories_name = $value['name'];
                          $data['cat_subcat'] = $categories_name . '-----'  . $sub_categories_name;
                                                                  }  
                    }
                    return $data;
                }
        }
        
}
