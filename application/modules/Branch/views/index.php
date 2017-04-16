
<div class="container-fluid">
    <div id="infoMessage" style="color:red;">
        <?php if (!empty($message)) {
              echo '<hr>' . $message;}; ?>
    </div>
</div>    

<div class="container-fluid"><hr>
    <div class="row-fluid">
        
        <div class="span6">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                    <h5>Add Branch</h5>
                </div>
                <div class="widget-content nopadding">
                    <?php
                    $create_branch_attr = array('class' => 'form-horizontal');
                    echo form_open("Branch/create_branch", $create_branch_attr);
                    ?>
                    
                       <div class="control-group">
                        <label class="control-label">Country * </label>
                        <div class="controls">
                            <select name="country_id">
                                <?php 
                foreach ($countries as $key => $country):?>
                                <option value ="<?php echo $country->id ;?>"> <?php echo $country->name ;?></option>
                          <?php endforeach; ?>      
                            </select>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="control-group">
                        <label class="control-label">Branch * </label>
                        <div class="controls">
                        <?php 
                        $branch_data = array(
                                        'type'  => 'text',
                                        'name'  => 'branch',
                                        'id'    => 'branch',
                                        'value' => '',
                                    );

                        echo form_input($branch_data);?>
                        </div>
                    </div>
                    
                      <div class="control-group">
                        <label class="control-label">Branch Email Id </label>
                        <div class="controls">
                       <?php 
                        $branch_email_data = array(
                                        'type'  => 'text',
                                        'name'  => 'email',
                                        'id'    => 'email',
                                        'value' => '',
                                    );

                        echo form_input($branch_email_data);?>
                        </div>
                    </div>
                    
                    
                    
                      <div class="control-group">
                        <label class="control-label">Branch Contact No. </label>
                        <div class="controls">
                        <?php 
                        $branch_contact_data = array(
                                        'type'  => 'text',
                                        'name'  => 'phone',
                                        'id'    => 'phone',
                                        'value' => '',
                                    );

                        echo form_input($branch_contact_data);?>
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
    
    </div>

</div>




<div class="container-fluid">
    <div class="row-fluid">
      <div class="span10">
          
        <div class="widget-box">
            <div class="widget-title"> 
            <h5>Branch List</h5>
          </div>
            <div id="dialog" title="Basic dialog">
  <p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
</div>
            
            
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr class="gradeC">
                  <td>S.N.</td>
                  <td>Country</td>
                  <td>Branch</td>
                   <td>Email</td>
                    <td>Contact</td>
                     <td>Status</td>
                </tr>
                 </thead>
                      <tbody>
                <?php 
                $count = 1;
                foreach ($branches as $key => $branch):
                    ?>
                
                <tr class="gradeU">
                  <td><?php echo $count++ ; ?></td>
                   <td><?php echo $branch->country ; ?></td>
                   <td><a href="#" id= "name"  data-value="<?php echo $branch->name; ?>"class = "branch_name" data-pk="<?php echo $branch->child_id ; ?>"><?php echo $branch->name ; ?></a></td>
                     <td><a href="#" id = "email"  data-value="<?php echo $branch->email; ?>"class = "branch_email" data-pk="<?php echo $branch->child_id ; ?>"><?php echo $branch->email ; ?></a></td>
                      <td><a href="#" id="phone"  data-value="<?php echo $branch->phone; ?>" class = "branch_phone" data-pk="<?php echo $branch->child_id ; ?>"><?php echo $branch->phone ; ?></a></td>
                      <td><a href="#" id="status" data-source="[{value: 0, text: 'Inactive'}, {value: 0, text: 'Active'}]" data-value="<?php echo $branch->status; ?>" class = "branch_status" data-pk="<?php echo $branch->child_id ; ?>"><?php echo ($branch->status == 1) ? 'Active' : 'Inactive' ; ?></a></td>
                 <?php endforeach;?>
               </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

<script type= text/javascript>
    jQuery( document ).ready(function( $ ) {
		// setting defaults for the editable
		$.fn.editable.defaults.mode = 'popup';
		$.fn.editable.defaults.showbuttons = true;
		$.fn.editable.defaults.url = '<?php echo base_url() . 'Dashboard/post'?>';
		$.fn.editable.defaults.type = 'text';
                
   
    $('.branch_name').editable({
        type: 'text',
        title: 'Enter Branch Name',
        params:{table: 'branch'}
    });
    
    $('.branch_email').editable({
        type: 'text',
        title: 'Enter Branch Email',
        params:{table: 'branch'}
    });
    
     $('.branch_phone').editable({
        type: 'text',
        title: 'Enter Branch Phone',
        params:{table: 'branch'}
    });
    
     $('.branch_status').editable({
        type: 'select',
        title: 'Choose Status',
        params:{table: 'branch'}
    });
    
    
      $( function() {
    $( "#dialog" ).dialog();
  } );
    
});</script>



      
 