 
<div class="container-fluid">
    <div id="infoMessage" style="color:red;"><?php if(!empty($message)){echo '<hr>' . $message ;};?></div>
</div>


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
                  <select name="branch_id">
                    <?php foreach($branches as $key => $branchList) : ?>
                  <option id = "designation_id"  value = "<?php echo $branchList->Id ; ?>">
                      <?php echo $branchList->Name . '  (' .  $branchList->ParentName . ')' ;?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
              
                    <div class="control-group">
              <label class="control-label">Designation</label>
              <div class="controls">
                <select name="group_id">
                    <?php 
                    foreach($groups as $key => $groupsList) : ?>
                  <option id = "group_id"  value = "<?php echo $groupsList['id'] ; ?>">
                      <?php 
                      if ($this->ion_auth->is_admin()){
                      echo  $groupsList['description'];
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
                <label class="control-label"> Username</label>
                <div class="controls">
                   <?php echo form_input($identity);?>
                </div>
              </div>
                 
                   
                   <div class="control-group">
                <label class="control-label"> Email</label>
                <div class="controls">
                   <input type="text" id="email" name = "email">
                </div>
              </div>
               
          
               <div class="control-group">
                <label class="control-label"><?php echo lang('create_user_validation_password_label', 'password');?></label>
                <div class="controls">
                  <?php echo form_input($password);?>
                </div>
              </div>
                
                   <div class="control-group">
                <label class="control-label"><?php echo lang('create_user_validation_password_confirm_label', 'password_confirm');?></label>
                <div class="controls">
                  <?php echo form_input($password_confirm);?>
                </div>
              </div>
               <div class="control-group">
              <label class="control-label">User Access</label>
              <div class="controls">
                <?php foreach($auth as $authList) : ?>
                   <label>   <input type="checkbox" value="<?php echo $authList->id ;?>" name="auth_id[]"/>
                  <?php echo $authList->title ;?></label>
          <?php endforeach; ?>
              </div>
            </div>
                   
                    <div class="control-group">
              <label class="control-label">Status</label>
              <div class="controls">
                  <input type="radio" name="status" value="1"/>Enable
                  <input type="radio" name="status" value="0" />Disable
              </div>
            </div>
              
          
                   
             
          </div>
      <div class="form-actions">
           
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

