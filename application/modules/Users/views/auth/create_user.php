 
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
                    <h5>General</h5>
                </div>
                <div class="widget-content nopadding">
                    <?php
                    $create_user_attr = array('class' => 'form-horizontal');
                    echo form_open("Users/auth/create_user", $create_user_attr);
                    ?>
                    <div class="control-group">
                        <label class="control-label">First Name * </label>
                        <div class="controls">
                        <?php echo form_input($first_name); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Last Name * </label>
                        <div class="controls">
                         <?php echo form_input($last_name); ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Branch</label>
                        <div class="controls">
                            <select name="branch_id">
                                <?php foreach ($branches as $key => $branchList) : ?>
                                    <option id = "designation_id"  value = "<?php echo $branchList->Id; ?>">
                                                                            <?php echo $branchList->Name . '  (' . $branchList->ParentName . ')'; ?></option>
                                                                            <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Profession</label>
                        <div class="controls">
                            <select name="group_id">
                                    <?php foreach ($groups as $key => $groupsList) : ?>
                                    <option id = "group_id"  value = "<?php echo $groupsList['id']; ?>">
                                        <?php
                                        if ($this->ion_auth->is_admin()) {
                                            echo $groupsList['description'];
                                        };
                                        ?>
                                    </option>
                                        <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Phone</label>
                            <div class="controls">
                                 <?php echo form_input($phone); ?>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Mobile</label>
                            <div class="controls">
                              <?php
                              echo  form_input(array('id' => 'mobile', 'name' => 'mobile','value'=> set_value('mobile', $this->data['mobile']['value'])));  ?>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Address *</label>
                            <div class="controls">
                                 <?php
                              echo  form_input(array('id' => 'address', 'name' => 'address','value'=> set_value('address', $this->data['address']['value'])));  ?>
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


                        <?php
                        if ($identity_column !== 'email') {
                            echo '<p>';
                            echo lang('create_user_identity_label', 'identity');
                            echo '<br />';
                            echo form_error('identity');
                            echo form_input($identity);
                            echo '</p>';
                        }
                        ?> 


                        <div class="control-group">
                            <label class="control-label"> Email *</label>
                            <div class="controls">
                            <?php echo form_input($email); ?>
                            </div>
                        </div>
                       

                        <div class="control-group">
                            <label class="control-label">Password *</label>
                            <div class="controls">
                            <?php echo form_input($password); ?>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Password Confirmation *</label>
                            <div class="controls">
                            <?php echo form_input($password_confirm); ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">User Access</label>
                            <div class="controls">
                                <?php foreach ($auth as $authList) : ?>
                                    <label>   <input type="checkbox" value="<?php echo $authList->id; ?>" name="auth_id[]"/>
                                    <?php echo $authList->title; ?>
                                    </label>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Status</label>
                            <div class="controls">
                                <input type="checkbox" name="active" value="1" checked="checked"/> Active
                                <input type="hidden" name="active" value="0" />
                            </div>
                        </div>

                    </div>
                    <div class="form-actions">
                        <input type="submit" value="Submit" class="btn btn-success">
                    </div>

                    <?php if ($this->ion_auth->is_admin()) { ?>
                        <input type="hidden" value="1" name = "user_auth_id">
                    <?php } ?>
                    <?php echo form_close(); ?>
                </div></div>
        </div>
    </div>
</div>

