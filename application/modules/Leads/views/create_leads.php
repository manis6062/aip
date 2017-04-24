
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
                    <h5>Official</h5>
                </div>
                  <div class="widget-content nopadding form-horizontal">
                       <div class="control-group">
                        <label class="control-label">Reason To Visit  * </label>
                        <div class="controls">
     
     <?php
$service_options = array('Enquiry' , 'Training' , 'Study Abroad','Examination');
echo form_dropdown(array('id' => 'country' , 'name' => 'country') , $service_options); ?>
                    </div>
                         </div>
                      
                                   <div class="control-group">
                        <label class="control-label">Assigned to * </label>
                        <div class="controls">
                            <select name="user_group" id="user_group">
                                <?php  foreach ($get_groups as $value): ?>
                                <option id="<?php echo $value->id ;?>"><?php echo ucwords($value->name) ; ?></option>
                               <?php endforeach; ?>
                            </select>
                        </div>
                        <div id="user_option" style="display:none;">
                              <div class="control-group">
                           <label class="control-label">Choose User * </label>
                            <div class="controls">
                             
                              <select name="user" id="user">
                                  
                              </select>
                        </div>
                              </div>
                            </div>
                        
                          <div class="control-group">
                        <label class="control-label">Preferred Destination * </label>
                        <div class="controls">
                            
                            <select name="destinations">
                                <?php foreach ($get_destinations as $value)  : ?>
                                <option value="<?php echo $value->id ; ?>"><?php echo $value->name ; ?></option>
                                 <?php endforeach; ?>
                            </select>
           
                        </div>
                    </div>
                        
                           
                    <div class="control-group">
                        <label class="control-label">Preferred Course * </label>
                        <div class="controls">
<?php
$course_options = $get_courses;
echo form_dropdown(array('id' => 'course' , 'name' => 'course') , $course_options); ?>
                        </div>
                    </div>
                        
                    </div>
                      
                      
                  </div></div>
            
            
            
            
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
                            
                            <input class="span9 datepicker dob" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" type="text">
                            

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
                        <label class="control-label">Fathers Name* </label>
                        <div class="controls">
                    <?php echo form_input(array('id' => 'father_name', 'placeholder' => 'Enter Fathers Name', 'name' => 'father_name')); ?>

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Mothers Name* </label>
                        <div class="controls">
                    <?php echo form_input(array('id' => 'mother_name', 'placeholder' => 'Enter Mothers name.', 'name' => 'mother_name')); ?>

                        </div>
                    </div>
                      <div class="control-group">
                        <label class="control-label">Guardians Name* </label>
                        <div class="controls">
                    <?php echo form_input(array('id' => 'guardian', 'placeholder' => 'Enter Guardian name.', 'name' => 'guardian')); ?>

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
                    <h5>Educational</h5>
                </div>
                
                <div class="widget-content nopadding form-horizontal" id="educational_div">
                    
                    
                    <div class="control-group">
                        <label class="control-label">Degree* </label>
                        <div class="controls">
                    <?php echo form_input(array('id' => 'degree', 'placeholder' => 'Enter Degree Name.', 'name' => 'degree')); ?>

                        </div>
                    </div>
                    
                       <div class="control-group">
                        <label class="control-label">University* </label>
                        <div class="controls">
                    <?php echo form_input(array('id' => 'university', 'placeholder' => 'Enter University Name.', 'name' => 'university')); ?>

                        </div>
                    </div>
                    
                    
                      
                       <div class="control-group">
                        <label class="control-label">Affiliate University* </label>
                        <div class="controls">
                    <?php echo form_input(array('id' => 'affiliate_university', 'placeholder' => 'Enter Affiliate University Name.', 'name' => 'affiliate_university')); ?>

                        </div>
                    </div>
                    
                       <div class="control-group">
                        <label class="control-label">Start Date </label>
                        <div class="controls">
                    <?php echo form_input(array('id' => 'start_date', 'placeholder' => 'Enter End Date.', 'name' => 'start_date')); ?>

                        </div>
                    </div>
                    
                    
                       <div class="control-group">
                        <label class="control-label">End Date </label>
                        <div class="controls">
                    <?php echo form_input(array('id' => 'end_date', 'placeholder' => 'Enter Start Date.', 'name' => 'end_date')); ?>
                        </div>
                        
                       
                    </div>
                    
                    <button id="clone" class="btn btn-warning">Add More..</button>
                    
                     <button id="div_close" class="btn btn-danger pull-right">Close</button>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                 
                  
                </div>
                
                
                <div id="clone_div"></div>
                
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

<script type="text/javascript">
    
    
    
$('#user_group').change(function(){
    var id = $(this).children(":selected").attr("id");
    var option = [];
    $.ajax({
        url:"<?php echo base_url() . 'Leads/leads/getUserGroups' ?>",
        type: "POST",
        data: {id: id},
        success: 
              function(data){
                  document.getElementById("user").options.length = 0;
              var parse_data = $.parseJSON(data);    
              $.each(parse_data, function (index, value) {
                  option = '<option value="'+value.id+'">'+value.first_name+' ' +value.last_name+'</option>';
                  $('#user').append(option);
             });
                   $('#user_option').css('display' , 'inline');
                  

              },
        error: 
              function(){
                alert('data error');  
              }
          });// you have missed this bracket
});


$('.dob').datepicker();



$('#clone').click(function(event){
      $clone = $('#educational_div').clone(true, true).find('#clone').remove().end();
     $clone.appendTo($('#clone_div')).find("input:text").val("").end();
     $('#div_close').insertAfter($("educational_div"));
  event.preventDefault();
});


   $('#div_close').click(function(event){
        $("#clone_div").children("#educational_div").last().remove();
          event.preventDefault();

    });
</script>
