<style>
    .boxer, .boxer0, .boxer1, .boxer2, .boxer3, .boxer4, .boxer5, .boxer6{
        display: none;
    }


    #checker0:checked ~ .boxer0,
    #checker1:checked ~ .boxer1,
    #checker1:checked ~ .boxer4,
    #checker2:checked ~ .boxer5,
    #checker3:checked ~ .boxer2,
    #checker3:checked ~ .boxer3,
    #checker3:checked ~ .boxer4,
    #checker4:checked ~ .boxer2,
    #checker5:checked ~ .boxer2{
        display: block;

    }
    input[type="radio"], input[type="checkbox"] {
        line-height: normal;
        margin: 0 6px 15px;
    }
    .check-box{padding: 0 5px;}
</style>


<script type="text/javascript">
	jQuery(function ($) {
		$("#date").mask("99/99/9999", {placeholder: "mm/dd/yyyy"});
		$("#primaryContact").mask("(999) 999-9999", {placeholder: " "});
        $("#fax").mask("(999) 999-9999", {placeholder: " "});
		$("#scon").mask("(999) 999-9999", {placeholder: " "});
		$("#zip").mask("99999", {placeholder: " "});
		$("#postal_code").mask("99999", {placeholder: " "});
		$("#ssn").mask("999-99-9999", {placeholder: " "});
		$("#cpn").mask("999-99-9999", {placeholder: " "});

	});


</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script>
	$(function () {
		$("#datepicker").datepicker({
			changeMonth: true,
			changeYear: true,
			yearRange: "-100:+0"

		});
	});
</script>
<section id="register-page">
<div class="container">
<h2 style="text-align: center"><?php echo $title; ?></h2>
<div class="col-lg-3"></div>
<div class="col-lg-6">
<?php
if ($this->session->flashdata('success_msg_affiliate')) {
	?>
	<div class="message info">
		<p><?php echo $this->session->flashdata('success_msg_affiliate') ?></p>
	</div>
<?php } ?>

<?php $attributes = array('id' => 'login-form', 'class' => 'form-horizontal box1');
echo form_open(base_url() . 'register/addUser', $attributes);

?>
<div class="form-group">
	<div class="col-lg-6">
		<?php $data = array('name' => 'email', 'id' => 'email', 'placeholder' => 'Email (Username)', 'value' => set_value('email'), 'class' => 'form-control',);
		echo form_input($data);
		echo form_error('email');
		?>
	</div>
	<div class="col-lg-3">
		<?php $data = array('name' => 'password', 'type' => 'password', 'placeholder' => 'Password', 'id' => 'password', 'value' => set_value('password'), 'class' => 'form-control',);
		echo form_input($data);
		echo form_error('password');
		?>
	</div>
    <div class="col-lg-3">
        <?php $data = array('name' => 'cpassword', 'type' => 'password', 'placeholder' => 'Re-Password', 'id' => 'cpassword', 'value' => set_value('cpassword'), 'class' => 'form-control',);
        echo form_input($data);
        echo form_error('cpassword');
        ?>
    </div>
</div>

<div class="form-group">
    <div class="col-lg-4">
        <?php $data = array('name' => 'first_name', 'placeholder' => 'First Name', 'value' => set_value('first_name'), 'class' => 'form-control',);
        echo form_input($data);
        echo form_error('firstName');
        ?>
    </div>
	<div class="col-lg-4">
		<?php $data = array('name' => 'middle_initial', 'placeholder' => 'Middle Name', 'value' => set_value('middle_initial'), 'class' => 'form-control',);
		echo form_input($data);
		echo form_error('middleInitial');
		?>
	</div>
	<div class="col-lg-4 <?php echo form_error('lastName')?'has-error':'has-success';?>">
		<?php $data = array('name' => 'last_name', 'placeholder' => 'Last Name', 'value' => set_value('last_name'), 'class' => 'form-control',);
		echo form_input($data);
		echo form_error('lastName');
		?>
	</div>
</div>

<div class="form-group">
    <div class="col-lg-6">
        <?php $data = array('name' => 'primary_phone_number', 'placeholder' => 'Phone Number.', 'value' => set_value('primary_phone_number'), 'class' => 'form-control' , 'id' => 'primaryContact');
        echo form_input($data);
        echo form_error('primaryContact');
        ?>
    </div>
    <div class="col-lg-6">
        <?php $data = array('name' => 'fax', 'id' => 'fax', 'placeholder' => 'Fax No.', 'value' => set_value('fax'), 'class' => 'form-control',);
        echo form_input($data);
        echo form_error('fax');
        ?>
    </div>
</div>

<div class="form-group"  align="center">
        <?php
        if(!empty($roles)):
            foreach($roles as $key=>$val):?>
                <input type="checkbox"  class="check-box" id="checker<?php echo $key+1;?>" name="roleId" value="<?php echo $val->id;?>"<?php echo set_checkbox('roleId', $val->id); ?>
                <?php
//                $data = array(
//                    'name'        => 'roleid[]',
//                    'id'          => 'checker'.$key,
//                    'value'       => $val->id,
//                    'class'       => 'checker',
//                );
//                echo form_checkbox($data, set_checkbox('roleid[]', $val->id)); ?>
                <label for="User" class=""><?php echo $val->label;?></label>
            <?php
            endforeach;
        endif;
        echo form_error('roleId');
        ?>
        <div class="boxer1 col-lg-6">
            <?php $data = array('name' => 'ssn', 'id' => 'ssn', 'placeholder' => 'Social Security Number', 'value' => set_value('ssn'), 'class' => 'form-control ssn',);
            echo form_input($data);
            echo form_error('ssn');
            ?>
        </div>
        <div class="boxer1 col-lg-6">
            <?php
            $data = array('name' => 'dob', 'id' => 'datepicker', 'placeholder' => 'MM/DD/YYYY', 'value' => set_value('dob'), 'class' => 'form-control',);
            echo form_input($data);
            echo form_error('dob');
            ?>
        </div>

        <div class="boxer2 col-lg-6" style="margin-top: 20px;">
            <?php $data = array('name' => 'site','id' => 'site', 'placeholder' => 'Business Site ', 'value' => set_value('site'), 'class' => 'form-control business site',);
            echo form_input($data);
            echo form_error('site');
            ?>
        </div>
        <div class="boxer4 col-lg-6" style="margin-top: 20px;">
            <?php $data = array('name' => 'broker_email_id', 'placeholder' => 'Broker Email ID ', 'value' => set_value('broker_email_id'), 'class' => 'form-control',);
            echo form_input($data);
            echo form_error('broker_email_id');
            ?>
        </div>

        <div class="boxer5 col-lg-6" style="margin-top: 20px;">
            <?php $data = array('name' => 'referrer_email_id', 'placeholder' => 'referrer Email ID ', 'value' => set_value('referrer_email_id'), 'class' => 'form-control',);
            echo form_input($data);
            echo form_error('referrer_email_id');
            ?>
        </div>

        <div class="boxer3 col-lg-6" style="margin-top: 20px;">
            <input type="radio" name="referrer_reg" value="1" <?php echo  set_radio('referrer_reg', '1'); ?> />
            <label for="User" class="">Self</label>
            <input type="radio"  name="referrer_reg" value="2" <?php echo  set_radio('referrer_reg', '2'); ?> />
            <?php
            echo form_error('referrer_reg');
            ?>
            <label for="User" class="">Later</label>
        </div>
    </div>




    <div class="form-group">
        <label for="captcha" class="control-label"></label>
        <div class="col-md-6">
		<?php echo $captcha['image']  ?>
        </div>
        <div class="col-md-6">
        <input type="text" autocomplete="off" class="form-control" name="userCaptcha" placeholder="Enter Captcha Value"
			   value="<?php if (!empty($userCaptcha)) {
				   echo $userCaptcha;
			   } ?>"/>
		<span><?php echo form_error('userCaptcha'); ?></span>
            </div>
        </div>

<div class="form-group">
	<div align="center">
		<?php
		$data = array('name' => 'submit', 'id' => 'submit', 'value' => 'Register', 'class' => 'btn btn-default',);
		echo form_submit($data);
		?>
	</div>
</div>

<?php echo form_close(); ?>


</div>
<div class="col-lg-3"></div>

<!--/.row-->
</div>
<!--/.container-->
</section><!--/#contact-page-->
</div>

<hr>
