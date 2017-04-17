<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch extends MX_Controller {
    
    
    	public function __construct()
	{
		parent::__construct();
		 $this->load->model("branch_model");
                 $this->load->library('form_validation');
	}
    
    
	public function index()
	{
                $data['branches'] = $this->branch_model->getAllBranch();
                $data['countries'] = $this->branch_model->getCountries();
		$this->load->template('index' , $data);
	}
        
        
     // create a new branch
	public function create_branch()
	{
                $data['branches'] = $this->branch_model->getAllBranch();
                 $data['countries'] = $this->branch_model->getCountries();
		// validate form input
		$this->form_validation->set_rules('branch', "Branch", 'required');

		if ($this->form_validation->run() == TRUE)
		{
                    
                    $status = $this->input->post('status');
                                if ($status == 1 )
                                  {
                                    $status = 1;
                                  }
                                else
                                 {
                                   $status = 0;
                                 }
                    
                    $posted_data = array(
                      'parent_id' => $this->input->post('country_id'),
                       'name' => $this->input->post('branch'),
                        'email' => $this->input->post('email'),
                        'phone' => $this->input->post('phone'),
                        'status' => $status,
                    );
                    
			$new_branch_id = $this->branch_model->create_branch($posted_data);
			if($new_branch_id)
			{
                            $data['message'] = $this->session->set_flashdata('message',"Successfully added");
				$this->load->template('index' , $data);
			}
		}
		else
		{
                    
                    if(validation_errors()){
                         $data['message'] = validation_errors();
                        $this->load->template('index' , $data);
                    }
                  
	}
        }
        
        
      
        
        
        
}
