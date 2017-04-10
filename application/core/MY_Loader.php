<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Loader class */
require APPPATH."third_party/MX/Loader.php";

class MY_Loader extends MX_Loader {


     //template for header , nav and footer templates

	 public function template($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
        $content  = $this->view('Dashboard/templates/header', $vars, $return);
        $content .= $this->view('Dashboard/templates/navbar', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('Dashboard/templates/footer', $vars, $return);

        return $content;
    else:
        $this->view('Dashboard/templates/header', $vars);
        $this->view('Dashboard/templates/navbar', $vars);
        $this->view($template_name, $vars);
        $this->view('Dashboard/templates/footer', $vars);
    endif;
    }
}
