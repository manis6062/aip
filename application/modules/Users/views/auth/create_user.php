  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Validation</a> </div>
    <h1>Create User</h1>
  </div>
<div id="infoMessage"><?php echo $message;?></div>

  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>General</h5>
          </div>
          <div class="widget-content nopadding">
              <?php
              $create_user_attr = array('class' => 'form-horizontal');
              echo form_open("Users/auth/create_user" , $create_user_attr);?>
                <div class="control-group">
                <label class="control-label">First Name</label>
                <div class="controls">
                   <?php echo form_input($first_name);?>
                </div>
              </div>
                <div class="control-group">
                <label class="control-label">Last Name</label>
                <div class="controls">
                   <?php echo form_input($last_name);?>
                </div>
              </div>
          
              <div class="control-group">
                <label class="control-label">Phone</label>
                <div class="controls">
                  <?php echo form_input($phone);?>
                </div>
              </div>
                
              <?php 
var_dump($branches);
              
              ?>
                    <div class="control-group">
              <label class="control-label">Branch</label>
              <div class="controls">
                <select >
                  <option>First option</option>
                  <option>Second option</option>
                  <option>Third option</option>
                  <option>Fourth option</option>
                  <option>Fifth option</option>
                  <option>Sixth option</option>
                  <option>Seventh option</option>
                  <option>Eighth option</option>
                </select>
              </div>
            </div>
                  
                   <div class="control-group">
                <label class="control-label">Designation</label>
                <div class="controls">
                   <?php echo form_input($first_name);?>
                </div>
              </div>
             
          </div>
        </div>
      </div>
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Account</h5>
          </div>
            
              <div class="widget-content nopadding">
               <div class="form-horizontal">
               <div class="control-group">
                <label class="control-label">Email</label>
                <div class="controls">
                  <?php echo form_input($identity);?>
                </div>
              </div>
          <div class="widget-content nopadding">
               <div class="form-horizontal">
               <div class="control-group">
                <label class="control-label">Password</label>
                <div class="controls">
                  <?php echo form_input($password);?>
                </div>
              </div>
                
                   <div class="control-group">
                <label class="control-label"> Confirm Password</label>
                <div class="controls">
                  <?php echo form_input($password_confirm);?>
                </div>
              </div>
             
             
          </div>
      <div class="form-actions">
                <input type="submit" value="Submit" class="btn btn-success">
              </div>
              <?php echo form_close();?>
        </div></div>
      </div>
    </div>
  </div>
<script type="text/javascript">
  $('select').select2();
</script>
