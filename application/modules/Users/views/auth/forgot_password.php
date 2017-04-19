
      <!DOCTYPE html>
<html lang="en">
    
<head>
        <title><?php echo $title ;?></title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?php echo PUBLIC_SITE_URL ; ?>css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo PUBLIC_SITE_URL ; ?>css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="<?php echo PUBLIC_SITE_URL ; ?>css/matrix-login.css" />
        <link href="<?php echo PUBLIC_SITE_URL ; ?>font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">  
            
<!--            Display Error Message-->
            <div id="infoMessage"><?php echo $message;?></div>

                                 
                <?php 
                $attribute = array('class' => 'form-vertical');
                echo form_open("Users/auth/forgot_password" , $attribute);?>
				<p class="normal_text"><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span>
                            <?php 
                                $identity['placeholder']='E-mail address';
                                echo form_input($identity);?>
                        </div>
                    </div>
               
                <div class="form-actions">
                    <p class="pull-right"><?php echo form_submit('submit', lang('forgot_password_submit_btn'),"class='btn btn-danger'");?></p>
                </div>
             <?php echo form_close();?> 
        </div>
        
      <script src="<?php echo PUBLIC_SITE_URL ; ?>js/jquery-3.2.1.min.js"></script>   
        <script src="<?php echo PUBLIC_SITE_URL ; ?>js/matrix.login.js"></script> 
    </body>

</html>


