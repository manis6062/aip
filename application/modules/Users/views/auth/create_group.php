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
                    <h5>Add Profession</h5>
                </div>
                <div class="widget-content nopadding">
                    <?php
                    $create_group_attr = array('class' => 'form-horizontal');
                    echo form_open("Users/auth/create_group", $create_group_attr);
                    ?>
                    <div class="control-group">
                        <label class="control-label">Profession * </label>
                        <div class="controls">
                        <?php echo form_input($group_name); ?>
                        </div>
                    </div>
                    
                      <div class="control-group">
                        <label class="control-label">Description * </label>
                        <div class="controls">
                        <?php echo form_input($description); ?>
                        </div>
                    </div>
                     <div class="form-actions">
                        <input type="submit" value="Submit" class="btn btn-success">
                    </div>
                    
                </div></div></div>
    <?php endif; ?>
    </div></div>




<div class="container-fluid">
    <div class="row-fluid">
      <div class="span10">
        <div class="widget-box">
            <div class="widget-title"> 
            <h5>Professions</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr class="gradeC">
                  <td>S.N.</td>
                  <td>Profession</td>
                  <td>Description</td>
<!--                  <td>Action</td>-->
                </tr>
                 </thead>
                      <tbody>
                <?php 
                $count = 1;
                foreach ($groups as $key => $group):
                    ?>
                
                <tr class="gradeU">
                  <td><?php echo $count++ ; ?></td>
                  <td><a href="#" id= "name"  data-value="<?php echo $group['name']; ?>"class = "group_name" data-pk="<?php echo $group['id'] ; ?>"><?php echo $group['name'];?></a></td>
                  <td><a href="#" id= "description"  data-value="<?php echo $group['description']; ?>"class = "group_description" data-pk="<?php echo $group['id'] ; ?>"><?php echo $group['description'];?></td>
<!--                  <td>  <span class="icon">
                       <span class="add_pointer" onclick="delete_group('<?php // echo $group['id']; ?>','<?php // echo $group['description']; ?>')"> <i class="icon-remove"></i></span>
                                        </span> -->
                      <?php endforeach;?> </td>
               </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>




<script type= text/javascript>
       function delete_group(id, name) {
        $.confirm({
            columnClass: 'col-md-4 col-md-offset-8 col-xs-4 col-xs-offset-8',
            theme: '<?php echo jquery_confirm_theme; ?>',
            title: 'Delete Profession',
            content: 'Are you sure you want to delete this profession ' + name + ' ?',
            buttons: {
                Confirm: function () {
                    delete_users_group(id);
                },
                Cancel: function () {
                },
            }
        });
    }


  function delete_users_group(id) {
        $.post("<?php echo base_url('Users/auth/delete_group'); ?>", {id: id},
                function (data) {
                    console.log(data);
                }, 'json');
        location.reload();
    }
</script>






          <?php if($edit_access != FALSE || $this->ion_auth->is_admin()) : ?>
<script type= text/javascript>
    
    jQuery( document ).ready(function( $ ) {
		// setting defaults for the editable
		$.fn.editable.defaults.mode = 'popup';
		$.fn.editable.defaults.showbuttons = true;
		$.fn.editable.defaults.url = '<?php echo base_url() . 'Dashboard/post'?>';
		$.fn.editable.defaults.type = 'text';
                
   
    $('.group_name').editable({
        type: 'text',
        title: 'Enter Group Name',
        params:{table: 'groups'}
    });
    
     $('.group_description').editable({
        type: 'text',
        title: 'Enter Group Description',
        params:{table: 'groups'}
    });
    
    
    
});</script>
<?php endif; ?>



      
 