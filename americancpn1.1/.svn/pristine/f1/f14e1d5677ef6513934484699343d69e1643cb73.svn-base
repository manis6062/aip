

<script type="text/javascript">
jQuery(function($){
   $("#date").mask("99/99/9999",{placeholder:"MM/DD/YYYY"});
   $("#pcon").mask("(999) 999-9999",{placeholder:" "});
   $("#scon").mask("(999) 999-9999",{placeholder:" "});
   $("#zip").mask("99999",{placeholder:" "});
   $("#ssn").mask("999-99-9999",{placeholder:" "});
});


  </script>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<!-- Load jQuery UI Main JS  -->
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script>
    $(function() {
        $( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-100:+0"

        });
    });

</script>

<style>
	table{border-spacing: 13px;
	border-collapse: none;
}
	
	
</style>
<div id="content" class="span10">
            <!-- content starts -->
            <div class="row-fluid sortable">
                <div class="box span12">
                    <div class="box-header well" data-original-title>
                        <h2><i class="icon-edit"></i> <?php echo $title; ?></h2>
                    </div>
                    <div class="box-content">
	
			
			<?php
						if ($this->session->flashdata('success_msg_affiliate')) {
					?>
					<div class="message info">
						<p><?php echo $this->session->flashdata('success_msg_affiliate') ?></p>
					</div>
					<?php } ?>
					
					
						<?php $attributes = array('id' => 'login-form', 'class' => 'form-horizontal box1');
						echo form_open(ADMIN_PATH. 'referrer/addAction', $attributes);
						?>
							
							<?php // if(validation_errors())
								// {
								// echo validation_errors();
								// }
							?>
						<table>
		                
						
						<tr>
		                    <td class="col1">
		                     <label>Username *</label> 
		                    </td>
		                    <td class="col2">
		                        <?php $data = array('name' => 'uname', 'id' => 'uname', 'placeholder' => 'Enter Your Username', 'value' => set_value('uname'), 'class' => 'form-control', );
								echo form_input($data);
								echo form_error('uname');
							?>
							<p></p>
		                    </td>
		                </tr>
	
						
						
						<tr>
		                    <td class="col1">
		                     <label>Password *</label> 
		                    </td>
		                    <td class="col2">
		                        <?php $data = array('name' => 'password', 'type' => 'password', 'placeholder' => 'Enter Password', 'id' => 'password', 'value' => set_value('password'), 'class' => 'form-control', );
								echo form_input($data);
								echo form_error('password');
							?>
							<p class="note">(Minumum 5 character and maximum 12 characters)</p>
		                    </td>
		                </tr>
		            
		                
		                <tr>
		                    <td class="col1">
		                     <label>Confirm Password *</label>
		                    </td>
		                    <td class="col2">
		                      <?php $data = array('name' => 'cpassword', 'type' => 'password', 'placeholder' => 'Re-enter Password', 'id' => 'cpassword', 'value' => set_value('cpassword'), 'class' => 'form-control', );
								echo form_input($data);
								echo form_error('cpassword');
							?>
							<p class="note">(Minumum 5 character and maximum 12 characters)</p>
		                    </td>
		                </tr>
							
						
		                
		                 <tr>
		                    <td class="col1">
		                     <label>First Name *</label> 
		                    </td>
		                    <td class="col2">
		                     <?php $data = array('name' => 'fname', 'id' => 'fname', 'placeholder' => 'Enter First Name', 'value' => set_value('fname'), 'class' => 'form-control', );
							echo form_input($data);
							echo form_error('fname');
							?>
							<p></p>
		                    </td>
		                </tr>
		                
		                     <tr>
                            <td class="col1">
                             <label>Middle Name </label> 
                            </td>
                            <td class="col2">
                             <?php $data = array('name' => 'mname', 'id' => 'mname', 'placeholder' => 'Enter Middle Name', 'value' => set_value('mname'), 'class' => 'form-control', );
                            echo form_input($data);
                            echo form_error('mname');
                            ?>
                            <p></p>
                            </td>
                        </tr>
                        
						
						 <tr>
		                    <td class="col1">
		                     <label>Last Name *</label> 
		                    </td>
		                    <td class="col2">
		                     <?php $data = array('name' => 'lname', 'id' => 'lname', 'placeholder' => 'Enter Last Name', 'value' => set_value('lname'), 'class' => 'form-control', );
							echo form_input($data);
							echo form_error('lname');
							?>
							<p></p>
		                    </td>
		                </tr>
						
						 <tr>
		                    <td class="col1">
		                     <label>E-mail *</label> 
		                    </td>
		                    <td class="col2">
		                    <?php $data = array('name' => 'email','placeholder' => 'Enter Email Address', 'id' => 'email', 'value' => set_value('email'), 'class' => 'form-control', );
								echo form_input($data);
								echo form_error('email');
							?>
							<p></p>
		                    </td>
		                </tr>
						
						<tr>
		                    <td class="col1">
		                     <label>Business Name </label> 
		                    </td>
		                    <td class="col2">
		                    <?php $data = array('name' => 'bname', 'id' => 'bname', 'placeholder' => 'Enter Your Business Name', 'value' => set_value('bname'), 'class' => 'form-control', );
							echo form_input($data);
							echo form_error('bname');
							?>
							<p></p>
		                    </td>
		                </tr>
						
						<tr>
		                    <td class="col1">
		                     <label>Primary Contact No. *</label> 
		                    </td>
		                    <td class="col2">
		                    <?php $data = array('name' => 'pcon', 'id' => 'pcon', 'placeholder' => 'Primary Contact No.', 'value' => set_value('pcon'), 'class'=>'form-control' );
							echo form_input($data);
							echo form_error('pcon');
							?>
							<p></p>
		                    </td>
		                </tr>
						
						
						<tr>
		                    <td class="col1">
		                     <label>Secondary Contact No.</label> 
		                    </td>
		                    <td class="col2">
		                   <?php $data = array('name' => 'scon', 'id' => 'scon', 'placeholder' => 'Secondary Contact No.', 'value' => set_value('scon'), 'class' => 'form-control', );
							echo form_input($data);
							echo form_error('scon');
							?>
							<p class="note">(Note: Contact number of referrer only.)</p>
		                    </td>
		                </tr>
						

						<tr>
		                    <td class="col1">
		                     <label>Gender </label> 
		                    </td>
		                    <td class="col2">
		                   <?php $options = array(
								// '' => 'Gender',
								'Male' => 'Male', 'Female' => 'Female', );
								echo form_dropdown('gender', $options, set_value('gender'), 'class="form-control"');
								echo form_error('gender');
		                      ?> 
							<p></p>
		                    </td>
		                </tr>
						
						<tr>
		                    <td class="col1">
		                     <label>Address </label> 
		                    </td>
		                    <td class="col2">
		                   <?php $data = array('name' => 'address', 'id' => 'address', 'placeholder' => 'Street, Unit, State, Zip Code', 'value' => set_value('address'), 'class' => 'form-control', );
							echo form_input($data);
							echo form_error('address');
							?>
							<p></p>
		                    </td>
		                </tr>
						
						<tr>
		                    <td class="col1">
		                     <label>City </label> 
		                    </td>
		                    <td class="col2">
		                   	<?php $data = array('name' => 'city', 'id' => 'city', 'placeholder' => 'City', 'value' => set_value('city'), 'class' => 'form-control', );
								echo form_input($data);
								echo form_error('city');
							?>
							<p></p>
		                   	</td>
		                </tr>
						
						<tr>
		                    <td class="col1">
		                     <label>State </label> 
		                    </td>
		                    <td class="col2">
		                   <?php
                            foreach($states as $state){
                                $drop[$state->id] = $state->state;
                                }
                            $drop = array_merge(array('' => 'Select Your State'), $drop); 
                            echo form_dropdown('state', $drop,set_value('state'), 'class="form-control"');
                            echo form_error('state');
                            ?>
							<p></p>
		                   	</td>
		                </tr>
						
						<tr>
		                    <td class="col1">
		                     <label>Zip Code </label> 
		                    </td>
		                    <td class="col2">
		                   	<?php $data = array('name' => 'zip', 'id' => 'zip', 'placeholder' => 'Zip Code', 'value' => set_value('zip'), 'class' => 'form-control', );
							echo form_input($data);
							echo form_error('zip');
							?>
							<p></p>
		                   	</td>
		                </tr>
					
						
						
						<!-- <div class="form-group">
					      <label for="firstname" class="col-sm-4 control-label">SSN *</label>
					      <div class="col-sm-8">
							<?php $data = array('name' => 'ssn', 'id' => 'ssn', 'placeholder' => 'Social Security Number', 'value' => set_value('ssn'), 'class' => 'form-control ssn', );
							echo form_input($data);
							echo form_error('ssn');
							?>
						</div>
						</div> -->
						
						
						<tr>
		                    <td class="col1">
		                     <label>Date of Birth </label> 
		                    </td>
		                    <td class="col2">
		                   	<?php
							$data = array('name' => 'dob', 'id' => 'datepicker', 'placeholder' => 'MM/DD/YYYY', 'value' => set_value('dob'), 'class' => 'form-control', );
							echo form_input($data);
							echo form_error('dob');
							?>
							<p></p>
		                   	</td>
		                </tr>
						
						
						<tr>
		                    <td class="col1">
		                     <label></label> 
		                    </td>
		                    <td class="col2">
		                    	<input type="hidden" name="broker_id" value="<?php echo $broker_id?>" />
		                   	<?php
							$data = array('name' => 'submit', 'id' => 'submit', 'value' => 'Register', 'class' => 'btn btn-default', );
							echo form_submit($data);
                              echo '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp'; 
							?>
							
							 <a href="<?php echo site_url(ADMIN_PATH . 'referrer'); ?>" class="btn btn-default">Cancel</a>
		                   	</td>
		                </tr>
							
						</table>
						
						<?php echo form_close(); ?>

						
	
	 </div>
    </div>

</div>

</div>