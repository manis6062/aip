
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
        $create_user_attr = array('class' => 'form-horizontal', 'name' => 'create_lead');
        echo form_open("Leads/Leads/create_leads", $create_user_attr); ?>
        <div class="span6">
              <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                    <h5>Official</h5>
                </div>
                  <div class="widget-content nopadding form-horizontal">
                                <div class="control-group">
                                <label class="control-label">Reason To Visit  * </label>
                                <div class="controls">
                                    <select name="services" id="services" style="width:140px;">
                                    <?php foreach ($services as $service_value)  : ?>
                                        <option  selected="" id="<?php echo $service_value->id ; ?>" value="<?php echo $service_value->id ; ?>"><?php echo $service_value->description ; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                </div>
                                </div>
                                <div id="enquiry_option" style="display:none;">
                                    <div class="control-group">
                                    <label class="control-label">Enquiry Of * </label>
                                        <div class="controls">
                                            <select name="enquiry_service" id="enquiry_service">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                      
                      <div class="control-group" id="prefer_destination" style="display:none;">
                        <label class="control-label">Preferred Destination * </label>
                        <div class="controls">
                            <select name="destinations">
                                <?php foreach ($get_destinations as $value)  : ?>
                                <option value="<?php echo $value->id ; ?>"><?php echo $value->name ; ?></option>
                                 <?php endforeach; ?>
                            </select>
                        </div>
                     </div>
                        
                           
                      <div class="control-group" style="display:none;" id="prefer_course">
                        <label class="control-label">Preferred Course * </label>
                        <div class="controls">
                        <?php
                        $course_options = $get_courses;
                        echo form_dropdown(array('id' => 'course' , 'name' => 'course') , $course_options); ?>
                        </div>
                    </div>
                        
                      
                      
                  </div>
              </div>
            
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                    <h5>Personal</h5>
                </div>
                <div class="widget-content nopadding">
                    <div class="control-group">
                        <label class="control-label">Salutation * </label>
                        <div class="controls">
                        <?php
                        $options = array('Mrs.'=> 'Mrs.' , 'Ms.' => 'Ms.' , 'Miss.' => 'Miss.');
                        echo form_dropdown(array('id' => 'salutation' , 'name' => 'salutation') , $options , array() , 'style="width: 70px;"'); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">First Name * </label>
                        <div class="controls">
                        <?php echo form_input(array('id' => 'first_name', 'placeholder' => 'Enter First Name.', 'name' => 'fname')); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Last Name * </label>
                        <div class="controls">
                        <?php echo form_input(array('id' => 'last_name', 'placeholder' => 'Enter Last Name.', 'name' => 'lname')); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Date of Birth * </label>
                        <div class="controls">
                            <input class="span9 datepicker dob" name="dob" placeholder = "Enter date of birth" id = "dob" data-date="01-02-2013" data-date-format="dd-mm-yyyy" type="text">
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
              <?php echo form_input(array('id' => 'phone', 'class' => 'contact phone', 'placeholder' => 'Enter Residental No.', 'name' => 'phone')); ?>

                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Mobile</label>
                        <div class="controls">
                    <?php echo form_input(array('id' => 'mobile', 'class' => 'contact mobile', 'placeholder' => 'Enter Cell No.', 'name' => 'mobile')); ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Current Address *</label>
                        <div class="controls">
                    <?php echo form_input(array('id' => 'current_address','name' => 'current_address', 'placeholder' => 'City/Town', 'name' => 'current_address')); ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Permanent Address * </label>
                        <div class="controls">
                    <?php echo form_input(array('id' => 'permanent_address', 'name' => 'permanent_address' , 'placeholder' => 'City/Town', 'name' => 'permanent_address')); ?>

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
                    <?php echo form_input(array('id' => 'fathers_name', 'class' => 'relation', 'placeholder' => 'Enter Fathers Name', 'name' => 'fathers_name')); ?>

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Mothers Name* </label>
                        <div class="controls">
                    <?php echo form_input(array('id' => 'mothers_name',  'class' => 'relation' , 'placeholder' => 'Enter Mothers name.', 'name' => 'mothers_name')); ?>

                        </div>
                    </div>
                      <div class="control-group">
                        <label class="control-label">Guardians Name* </label>
                        <div class="controls">
                    <?php echo form_input(array('id' => 'guardians_name',  'class' => 'relation' , 'placeholder' => 'Enter Guardians name.', 'name' => 'guardians_name')); ?>

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
                            <?php echo form_input(array('id' => 'referred_by', 'placeholder' => 'Referred by', 'name' => 'referred_by')); ?>
                        </div>
                    </div>
                    
                    
                     <div class="control-group">
                        <label class="control-label">Remarks * </label>
                        <div class="controls">
                            <?php echo form_textarea(array('id' => 'remarks', 'placeholder' => 'Enter remarks here.', 'name' => 'student_remarks')); ?>

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
                    <?php echo form_input(array('id' => 'degree', 'placeholder' => 'Enter Degree Name.', 'name' => 'degree[]')); ?>

                        </div>
                    </div>
                    
                       <div class="control-group">
                        <label class="control-label">University* </label>
                        <div class="controls">
                    <?php echo form_input(array('id' => 'university', 'placeholder' => 'Enter University Name.', 'name' => 'university[]')); ?>

                        </div>
                    </div>
                    
                    
                      
                       <div class="control-group">
                        <label class="control-label">Affiliate University* </label>
                        <div class="controls">
                    <?php echo form_input(array('id' => 'affiliate_university', 'placeholder' => 'Enter Affiliate University Name.', 'name' => 'affiliate_university[]')); ?>

                        </div>
                    </div>
                    
                       <div class="control-group">
                        <label class="control-label">Start Date </label>
                        <div class="controls">
                            <select name="start_date[]">
                                <?php
                                 foreach ($education_year as $value) : ?>
                                <option <?php if($value == date("Y"))
                                    {echo "selected=selected" ;} ?>><?php echo $value ; ?></option> 
                              <?php endforeach;  ?>
                            </select>
                            

                        </div>
                    </div>
                    
                    
                       <div class="control-group">
                        <label class="control-label">End Date </label>
                        <div class="controls">
                           <select name="end_date[]">
                                <?php
                                 foreach ($education_year as $value) : ?>
                                <option <?php if($value == date("Y"))
                                    {echo "selected=selected" ;} ?>><?php echo $value ; ?></option> 
                              <?php endforeach;  ?>
                            </select>
                        </div>
                        
                       
                    </div>
                    
                    <button id="clone" class="btn btn-warning">Add More..</button>
                    
                     <button id="div_close" class="btn btn-danger pull-right">Close</button>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                 
                  
                </div>
                
                
                <div id="clone_div"></div>
                
            </div>
            
            
            <div class="widget-box" id="visa_detail" style="display:none;">
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
                             
                              <select name="assigned_to" id="user">
                                  
                              </select>
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
 $(document).ready(function($){
$('.phone').mask('99-99-9999');
 $(".mobile").mask("(999)-999-9999");    
});   
    
 $('.dob').datepicker();
   
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


$('#enquiry_service').change(function(){
            var enquiry_service_id = $("#enquiry_service").children(":selected").attr("id");
            if(enquiry_service_id == 2){
            $("#prefer_course").css('display' , 'block');
            }
            });


$('#services').change(function(){
    var id = $(this).children(":selected").attr("id");
    //if Enquiry Selected
    if(id == 1){
    var option = [];
    $.ajax({
        url:"<?php echo base_url() . 'Leads/leads/getEnquiryServices' ?>",
        type: "POST",
        data: {id: id},
        success: 
              function(data){
                  document.getElementById("enquiry_service").options.length = 0;
              var parse_data = $.parseJSON(data);    
              $.each(parse_data, function (index, value) {
                  option = '<option selected="" value="'+value.id+'" id="'+value.id+'">'+value.name+'</option>';
                  $('#enquiry_service').append(option);
             });
                   $('#enquiry_option').css('display' , 'inline');
                  

              },
        error: 
              function(){
                console.log('data error');  
              }
          });  }else if(id == 2){
              $('#enquiry_option').css('display' , 'none');
          }
});


//only year
// $('.start_date ,.end_date').datepicker({ dateFormat: 'yy' });




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
    
    
    
    
    $(function() {
          $("form[name='create_lead']").validate({
              rules: {
      first_name: "required",
      last_name: "required",
      dob: "required",
       current_address: "required",
      permanent_address: "required",
      nationality: "required",
      degree: "required",
      university: "required",
      affiliate_university: "required",
      start_date: "required",
      end_date: "required",
          fathers_name: {
      require_from_group: [1, ".relation"]
    },
    mothers_name: {
      require_from_group: [1, ".relation"]
    },
    guardians_name: {
      require_from_group: [1, ".relation"]
    },
     phone: {
      require_from_group: [1, ".contact"]
    },
    mobile: {
      require_from_group: [1, ".contact"]
    },

      email: {
        required: true,
        email: true
      },
    },
    // Specify validation error messages
    messages: {
      first_name: "Please enter your firstname.",
      last_name: "Please enter your lastname.",
      dob: "Please enter date of birth.",
      email: "Please enter a valid email address.",
      current_address: "Please enter current address.",
      permanent_address: "Please enter a permanent address.",
       fathers_name: "Please enter at least one relation.(Fathers Name / Mothers Name / Guardians Name)",
       mothers_name: "Please enter at least one relation.(Fathers Name / Mothers Name / Guardians Name)",
       guardians_name: "Please enter at least one relation.(Fathers Name / Mothers Name / Guardians Name)",
       phone: "Please enter  at least one contact medium.(Landline / Mobile )",
       mobile: "Please enter at least one contact medium.(Mobile / Landline )",
       nationality: "Please enter your nationality",
       degree: "Please enter your degree",
       university: "Please enter your university",
       affiliate_university : "Please enter your Affiliate university",
       start_date: "Please enter start_date of the degree.",
       end_date: "Please enter end_date of the degree.",

      
    },
    submitHandler: function(form) {
      form.submit();
    }
              
          });
        });  
        
        
        
        
//jQuery.validator.addMethod("require_from_group", function(value, element, options) {
//}, jQuery.format("Please fill out at least {0} of these fields."));
//jQuery.validator.addClassRules("relation", {
//require_from_group: [1,".relation"]
//});
        
        
    
    
</script>
