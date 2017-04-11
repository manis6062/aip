  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Validation</a> </div>
    <h1 class="text-center"><span class="icon">
<i class="icon-user"></i>
</span><?php echo $title; ?></h1>
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
              <label class="control-label">Branch</label>
              <div class="controls">
                <select >
                    <?php foreach($branches as $key => $branchList) : ?>
                  <option name = "<?php echo $branchList->Id ; ?>"><?php echo $branchList->Name . '  (' .  $branchList->ParentName . ')' ;?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
                  
                    <div class="control-group">
              <label class="control-label">Designation</label>
              <div class="controls">
                <select>
                    <?php 
                    foreach($designations as $key => $designationsList) : ?>
                  <option name = "<?php echo $designationsList->id ; ?>">
                      <?php 
                      if ($this->ion_auth->is_admin()){
                      echo  $designationsList->name;
                      };?>
                  </option>
                  <?php endforeach; ?>
                </select>
              </div>
          
              <div class="control-group">
                <label class="control-label">Phone</label>
                <div class="controls">
                 <input type="text" id="phone" name = "phone">
                </div>
              </div>
              
               <div class="control-group">
                <label class="control-label">Mobile</label>
                <div class="controls">
                   <input type="text" id="mobile" name = "mobile">
                </div>
              </div>
              
               <div class="control-group">
                <label class="control-label">Address</label>
                <div class="controls">
                   <input type="text" id="address" name = "address">
                </div>
              </div>
              
              <br>
             
            </div>
             
          </div>
        </div>
      </div>
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-signout"></i> </span>
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
               <div class="control-group">
              <label class="control-label">User Access</label>
              <div class="controls">
                <label>
                  <input type="checkbox" name="radios" />
                  Add User</label>
                <label>
                  <input type="checkbox" name="radios" />
                  Edit User</label>
                <label>
                  <input type="checkbox" name="radios" />
                  Delete User</label>
              </div>
              
                <label class="control-label">Stucent Access</label>
              <div class="controls">
                <label>
                  <input type="checkbox" name="radios" />
                  Add Student</label>
                <label>
                  <input type="checkbox" name="radios" />
                  Edit Student</label>
                <label>
                  <input type="checkbox" name="radios" />
                  Delete Student</label>
              </div>
              
            </div>
              
          
                   
             
          </div>
      <div class="form-actions">
            <div class="control-group">
              <label class="control-label">Status</label>
              <div class="controls">
                  <input type="checkbox" name="radios" />
              </div>
            </div>
                <input type="submit" value="Submit" class="btn btn-success">
              </div>
              
              <?php 
              if ($this->ion_auth->is_admin()){ ?>
              <input type="hidden" value="1" name = "user_auth_id">
            <?php  }  ?>
              
              
                

              
              <?php echo form_close();?>
        </div></div>
      </div>
    </div>
  </div>
<script type="text/javascript">
  $('select').select2();
</script>
