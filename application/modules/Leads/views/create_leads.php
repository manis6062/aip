
<div class="container-fluid">
    <div id="infoMessage" style="color:red;">
        <?php if (!empty($message)) {
            echo '<hr>' . $message;
        };
        ?>
    </div>
</div>

<div class="container-fluid"><hr>
    <div class="row-fluid">
           <?php
                    $create_user_attr = array('class' => 'form-horizontal');
                    echo form_open("Users/auth/create_user", $create_user_attr);
                    ?>
        <div class="span6">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                    <h5>Personal</h5>
                </div>
                <div class="widget-content nopadding">
                 

                    <div class="control-group">
                        <label class="control-label">Salutation * </label>
                        <div class="controls">
                            
                            
<?php
$options = array('mrs'=> 'Mrs.' , 'ms' => 'Ms.' , 'miss' => 'Miss.');
echo form_dropdown(array('id' => 'sal' , 'name' => 'sal') , $options); ?>

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">First Name * </label>
                        <div class="controls">
<?php echo form_input(array('id' => 'first_name', 'placeholder' => 'Enter First Name.', 'name' => 'first_name')); ?>

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Last Name * </label>
                        <div class="controls">
<?php echo form_input(array('id' => 'last_name', 'placeholder' => 'Enter Last Name.', 'name' => 'last_name')); ?>

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Date of Birth * </label>
                        <div class="controls">
                            
                            <input class="span9 datepicker" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" type="text">
                            

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Email * </label>
                        <div class="controls">
                    <?php echo form_input(array('id' => 'email', 'placeholder' => 'E-mail Address', 'name' => 'email')); ?>

                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label">Landline</label>
                        <div class="controls">
                            <?php
                            $phone['placeholder'] = 'Enter Residental No.';
                            echo form_input($phone);
                            ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Mobile</label>
                        <div class="controls">
                    <?php echo form_input(array('id' => 'mobile', 'placeholder' => 'Enter Cell No.', 'name' => 'mobile')); ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Current Address *</label>
                        <div class="controls">
                    <?php echo form_input(array('id' => 'current_address', 'placeholder' => 'City/Town', 'name' => 'current_address')); ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Permanent Address * </label>
                        <div class="controls">
                    <?php echo form_input(array('id' => 'permanent_address', 'placeholder' => 'City/Town', 'name' => 'permanent_address')); ?>

                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Country * </label>
                        <div class="controls">
<?php
$country_options = $get_all_countries;
echo form_dropdown(array('id' => 'country' , 'name' => 'country') , $country_options); ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Nationality * </label>
                        <div class="controls">
                    <?php echo form_input(array('id' => 'nationality', 'placeholder' => 'Enter Nationality.', 'name' => 'nationality')); ?>

                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label">Referred by *</label>
                        <div class="controls">
                            <?php echo form_input(array('id' => 'referred', 'placeholder' => 'Referred by', 'name' => 'referred')); ?>
                        </div>
                    </div>



                    <br>
                </div>

            </div>
        </div>

        <div class="span6">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                    <h5>Official</h5>
                </div>
                <div class="widget-content nopadding form-horizontal">
                    <div class="control-group">
                        <label class="control-label">Education * </label>
                        <div class="controls">
                            <?php echo form_input(array('id' => 'sal', 'placeholder' => 'Enter Salutation.', 'name' => 'sal')); ?>

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Reason To Visit * </label>
                        <div class="controls">
                            <?php echo form_input(array('id' => 'first_name', 'placeholder' => 'Enter First Name.', 'name' => 'first_name')); ?>

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Preferred Course * </label>
                        <div class="controls">
                            <?php echo form_input(array('id' => 'last_name', 'placeholder' => 'Enter Last Name.', 'name' => 'last_name')); ?>

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Preferred Destination * </label>
                        <div class="controls">
                            <?php echo form_input(array('id' => 'dob', 'placeholder' => 'Enter date of Birth.', 'name' => 'dob')); ?>

                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                    <h5>Visa Detail</h5>
                </div>
                <div class="widget-content nopadding form-horizontal">
                    
                      <div class="control-group">
                        <label class="control-label">Passport Number * </label>
                        <div class="controls">
                            <?php echo form_input(array('id' => 'first_name', 'placeholder' => 'Enter First Name.', 'name' => 'first_name')); ?>

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Passport Issue Date * </label>
                        <div class="controls">
                            <?php echo form_input(array('id' => 'last_name', 'placeholder' => 'Enter Last Name.', 'name' => 'last_name')); ?>

                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label">Visa Type * </label>
                        <div class="controls">
                            <?php echo form_input(array('id' => 'last_name', 'placeholder' => 'Enter Last Name.', 'name' => 'last_name')); ?>

                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label">Visa Number * </label>
                        <div class="controls">
                            <?php echo form_input(array('id' => 'last_name', 'placeholder' => 'Enter Last Name.', 'name' => 'last_name')); ?>

                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label">Visa Expiry Date * </label>
                        <div class="controls">
                            <?php echo form_input(array('id' => 'last_name', 'placeholder' => 'Enter Last Name.', 'name' => 'last_name')); ?>

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Visa Status * </label>
                        <div class="controls">
                            <?php echo form_input(array('id' => 'last_name', 'placeholder' => 'Enter Last Name.', 'name' => 'last_name')); ?>

                        </div>
                    </div>
                   
                   <div class="control-group">
                        <label class="control-label">Remarks * </label>
                        <div class="controls">
                            <?php echo form_textarea(array('id' => 'remarks', 'placeholder' => 'Enter remarks here.', 'name' => 'remarks')); ?>

                        </div>
                    </div> 
                </div>
        </div>
          
             <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                    <h5>Assign Lead</h5>
                </div>
                <div class="widget-content nopadding form-horizontal">
                    
                      <div class="control-group">
                        <label class="control-label">Service Type * </label>
                        <div class="controls">
 <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Select Services
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">Enquiry</a></li>
    <li><a href="#">Training</a></li>
    <li><a href="#">Study Abroad</a></li>
     <li><a href="#">Examination</a></li>
  </ul>
</div> 
                        </div>
                    </div>
                  
                  
                    
                  
                              <div class="control-group">
                        <label class="control-label">Assigned to * </label>
                        <div class="controls">
 <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Select User
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">HTML</a></li>
    <li><a href="#">CSS</a></li>
    <li><a href="#">JavaScript</a></li>
  </ul>
</div> 
                        </div>
                    </div>
                    <div class="form-actions">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
                </div>
        </div>
            
            
                               



   <br>


    </div>
         <?php echo form_close(); ?>
</div>
    
  
    
    
</div>
