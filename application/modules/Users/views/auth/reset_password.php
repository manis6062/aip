<!DOCTYPE html>
<html lang="en">

    <head>
        <title><?php echo $title; ?></title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?php echo PUBLIC_SITE_URL; ?>css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo PUBLIC_SITE_URL; ?>css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="<?php echo PUBLIC_SITE_URL; ?>css/matrix-login.css" />
        <link href="<?php echo PUBLIC_SITE_URL; ?>font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">  

            <!--            Display Error Message-->
            <div id="infoMessage"><?php echo $message; ?></div>

            <?php
            $attributes = array('class' => 'form-vertical');
            echo form_open('Users/auth/reset_password/' . $code, $attributes);
            ?>
            <h3 class="text-center"><?php echo lang('reset_password_heading');?></h3>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-user"> </i></span> 
                        <?php
                        $new_password['placeholder'] = 'New Password';
                        echo form_input($new_password);
                        ?>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-user"> </i></span> 
                        <?php
                        $new_password_confirm['placeholder'] = 'Confirm New Password';
                        echo form_input($new_password_confirm);
                        ?>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <span class="pull-right">
                    <button type="submit" class="btn btn-success" />Change</button> 
                </span>
            </div>
<?php echo form_close(); ?> 

        </div>

        <script src="<?php echo PUBLIC_SITE_URL; ?>js/jquery-3.2.1.min.js"></script>   
        <script src="<?php echo PUBLIC_SITE_URL; ?>js/matrix.login.js"></script> 
    </body>

</html>

