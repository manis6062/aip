
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
                    <h5>Add Destinations</h5>
                </div>
                <div class="widget-content nopadding">
                    <?php
                    $create_branch_attr = array('class' => 'form-horizontal');
                    echo form_open("Destinations/create_destination", $create_branch_attr);
                    ?>
                    
                        <div class="control-group">
                        <label class="control-label">Destination * </label>
                        <div class="controls">
                        <?php 
                        $name_data = array(
                                        'type'  => 'text',
                                        'name'  => 'name',
                                        'id'    => 'name',
                                        'value' => '',
                                         'placeholder' => 'Enter destination name',
                                    );

                        echo form_input($name_data);?>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="control-group">
                        <label class="control-label">Description * </label>
                        <div class="controls">
                        <?php 
                        $description_data = array(
                                        'type'  => 'text',
                                        'name'  => 'description',
                                        'id'    => 'description',
                                        'value' => '',
                             'placeholder' => 'Enter destination description',
                                    );

                        echo form_input($description_data);?>
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
            <h5>Branch List</h5>
          </div>
          
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr class="gradeC">
                  <td>S.N.</td>
                  <td>Destination</td>
                  <td>Description</td>
                     <td>Status</td>
                </tr>
                 </thead>
                      <tbody>
                <?php 
                $count = 1;
                foreach ($destinations as $key => $destiny):
                    ?>
                
                <tr class="gradeU">
                  <td><?php echo $count++ ; ?></td>
                   <td><a href="#" id= "name"  data-value="<?php echo $destiny->name; ?>"class = "destiny_name" data-pk="<?php echo $destiny->id ; ?>"><?php echo $destiny->name ; ?></a></td>
                     <td><a href="#" id = "description"  data-value="<?php echo $destiny->description; ?>"class = "destiny_description" data-pk="<?php echo $destiny->id ; ?>"><?php echo $destiny->description ; ?></a></td>
                      <td><a href="#" id="status" data-source="[{value: 0, text: 'Inactive'}, {value: 1, text: 'Active'}]" data-value="<?php echo $destiny->status; ?>" class = "destiny_status" data-pk="<?php echo $destiny->id ; ?>"><?php echo ($destiny->status == 1) ? 'Active' : 'Inactive' ; ?></a></td>
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
                
   
    $('.destiny_name').editable({
        type: 'text',
        title: 'Enter Destination Name',
        params:{table: 'destination'}
    });
    
    $('.destiny_description').editable({
        type: 'text',
        title: 'Enter Destination Description',
        params:{table: 'destination'}
    });
    
    
     $('.destiny_status').editable({
        type: 'select',
        title: 'Choose Status',
        params:{table: 'destination'}
    });
    
  
});</script>
<?php endif ; ?>



      
 