
<div class="container-fluid">
    <div id="infoMessage" style="color:red;">
        <?php if (!empty($message)) {
              echo '<hr>' . $message;}; ?>
    </div>
</div>    

<div class="container-fluid"><hr>
    <div class="row-fluid">
        <?php if($create_access != FALSE || $this->ion_auth->is_admin()) : ?>

        <div class="span6">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                    <h5>Add Course</h5>
                </div>
                <div class="widget-content nopadding">
                    <?php
                    $create_branch_attr = array('class' => 'form-horizontal');
                    echo form_open("Courses/courses/create_course", $create_branch_attr);
                    ?>
                    
                       <div class="control-group">
                        <label class="control-label">Course * </label>
                        <div class="controls">
                            <?php 
                        $course_data = array(
                                        'type'  => 'text',
                                        'name'  => 'course',
                                        'id'    => 'course',
                                        'value' => '',
                                        'placeholder' => 'Enter course name',
                                    );

                        echo form_input($course_data);?>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="control-group">
                        <label class="control-label">Duration * </label>
                        <div class="controls">
                        <?php 
                        $course_data = array(
                                        'type'  => 'text',
                                        'name'  => 'duration',
                                        'id'    => 'duration',
                                        'value' => '',
                                        'placeholder' => 'Enter course duration',
                                    );

                        echo form_input($course_data);?>
                        </div>
                    </div>
                    
                      <div class="control-group">
                        <label class="control-label">Fee </label>
                        <div class="controls">
                       <?php 
                        $course_fee = array(
                                        'type'  => 'text',
                                        'name'  => 'fee',
                                        'id'    => 'fee',
                                        'value' => '',
                                        'placeholder' => 'Enter course fee',

                                    );

                        echo form_input($course_fee);?>
                        </div>
                    </div>
                    
                    
                    
                      <div class="control-group">
                        <label class="control-label">Description </label>
                        <div class="controls">
                        <?php 
                        $course_description = array(
                                        'type'  => 'textarea',
                                        'name'  => 'description',
                                        'id'    => 'description',
                                        'value' => '',
                                        'placeholder' => 'Enter course description here',
                                        'rows'        => '8',
                                        'cols'        => '50',

                                    );

                        echo form_textarea($course_description);?>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label">Status </label>
                        <div class="controls">
                     <input type="checkbox" name="status" value="1" /> Active
                        </div>
                    </div>
                    
                     <div class="form-actions">
                        <input type="submit" value="Submit" class="btn btn-success">
                    </div>
                    
                </div></div></div>
        
        <?php endif; ?>
        
    
    </div>

</div>


 <?php if($view_access != FALSE || $this->ion_auth->is_admin()) : ?>

<div class="container-fluid">
    <div class="row-fluid">
      <div class="span10">
          
        <div class="widget-box">
            <div class="widget-title"> 
            <h5>Courses</h5>
          </div>
          
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr class="gradeC">
                  <td>S.N.</td>
                  <td>Course</td>
                  <td>Duration</td>
                   <td>Fee</td>
                    <td>Description</td>
                     <td>Status</td>
                </tr>
                 </thead>
                      <tbody>
                <?php 
                $count = 1;
                foreach ($get_all_courses as $key => $course):
                    ?>
                
                <tr class="gradeU">
                    <td><?php echo $count++ ; ?></td>
                    <td><a href="#" id= "name"  data-value="<?php echo $course->name; ?>"class = "course_name" data-pk="<?php echo $course->id ; ?>"><?php echo $course->name ; ?></a></td>
                    <td><a href="#" id= "duration"  data-value="<?php echo $course->duration; ?>"class = "course_duration" data-pk="<?php echo $course->id ; ?>"><?php echo $course->duration . ' months' ; ?></a></td>
                    <td><a href="#" id= "fee"  data-value="<?php echo $course->fee; ?>"class = "course_fee" data-pk="<?php echo $course->id ; ?>"><?php echo '$' . $course->fee ; ?></a></td>  
                    <td><a href="#" id= "description"  data-value="<?php echo $course->description; ?>"class = "course_description" data-pk="<?php echo $course->id ; ?>"><?php echo $course->description ; ?></a></td>
                    <td><a href="#" id="status" data-source="[{value: 0, text: 'Inactive'}, {value: 1, text: 'Active'}]" data-value="<?php echo $course->status; ?>" class = "course_status" data-pk="<?php echo $course->id ; ?>"><?php echo ($course->status == 1) ? 'Active' : 'Inactive' ; ?></a></td>
                 <?php endforeach;?>
               </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php endif; ?>


 <?php if($edit_access != FALSE || $this->ion_auth->is_admin()) : ?>
<script type= text/javascript>
    jQuery( document ).ready(function( $ ) {
		// setting defaults for the editable
		$.fn.editable.defaults.mode = 'popup';
		$.fn.editable.defaults.showbuttons = true;
		$.fn.editable.defaults.url = '<?php echo base_url() . 'Dashboard/post'?>';
		$.fn.editable.defaults.type = 'text';
                
   
    $('.course_name').editable({
        type: 'text',
        title: 'Enter Course Name',
        params:{table: 'course'}
    });
    
    $('.course_duration').editable({
        type: 'text',
        title: 'Enter Course Duration',
        params:{table: 'course'}
    });
     $('.course_fee').editable({
        type: 'text',
        title: 'Enter Course Fee',
        params:{table: 'course'}
    });
    
    $('.course_description').editable({
        type: 'textarea',
        title: 'Enter Course Description',
        params:{table: 'course'}
    });
     $('.course_status').editable({
        type: 'select',
        title: 'Enter Course Status',
        params:{table: 'course'}
    });
  
    
  
});</script>
<?php endif ; ?>



      
 