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
                $attributes = array('class' => 'form-vertical', 'id' => 'loginform');
                echo form_open("Users/auth/login" , $attributes);?>
				 <div class="control-group normal_text"> <h3><img src="<?php echo PUBLIC_SITE_URL ; ?>img/logo.png" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span> 
                                <?php  echo form_input($identity);?>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                                <?php echo form_input($password);?>
                        </div>
                    </div>
                </div>
                <p>
                 <?php echo lang('login_remember_label', 'remember');?>
                 <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                </p>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
                    <span class="pull-right">
                        <button type="submit" class="btn btn-success" />Login</button> 
                    </span>
                </div>
            <?php echo form_close();?> 
                                 
            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
                </div>
            </form>
        </div>
        
        <script src="<?php echo PUBLIC_SITE_URL ; ?>js/jquery.min.js"></script>  
        <script src="<?php echo PUBLIC_SITE_URL ; ?>js/matrix.login.js"></script> 
    </body>

</html>
