 
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
                    
                </div></div></div></div></div>