<div class="container-fluid"><hr>
    <div class="row-fluid">
        <div id="infoMessage" style="color:red;"><?php echo $message; ?></div>
    </div>
</div>

<div class="container-fluid"><hr>
    <div class="row-fluid">
        <div class="span6">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                    <h5>Account</h5>
                </div>
                <div class="widget-content nopadding">
                    <?php
                    $create_user_attr = array('class' => 'form-horizontal');
                    echo form_open(uri_string(), $create_user_attr);
                    ?>


                    <div class="control-group">
                        <label class="control-label">First Name</label>
                        <div class="controls">
                            <?php echo form_input($first_name); ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Last Name</label>
                        <div class="controls">
                            <?php echo form_input($last_name); ?>
                        </div>
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
                            <input type="text" name="mobile" value="<?php
                            if (isset($userDetails->mobile)) {
                                echo $userDetails->mobile;
                            };
                            ?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Address</label>
                        <div class="controls">
                            <input type="text" name="address" value="<?php
                                   if (isset($userDetails->address)) {
                                       echo $userDetails->address;
                                   };
                                   ?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Password</label>
                        <div class="controls">
<?php echo form_input($password); ?>
                        </div>
                    </div>



                    <div class="control-group">
                        <label class="control-label"> Confirm Password</label>
                        <div class="controls">
<?php echo form_input($password_confirm); ?>
                        </div>
                    </div>



<?php echo form_hidden('id', $user->id); ?>




                </div>

            </div>
        </div>



        <div class="span6">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-signout"></i> </span>
                    <h5>General</h5>
                </div>

                <div class="widget-content nopadding">
                    <div class="form-horizontal">
                        <div class="control-group">
                            <label class="control-label">Branch</label>
                            <div class="controls">
                                <select name="branch_id">
                                        <?php foreach ($branches as $key => $branchList) : ?>
                                        <option id = "branch_id"  value = "<?php echo $branchList->Id; ?>" <?php if ($branch_id->branch_id == $branchList->Id) echo "selected='selected'"; ?>>
    <?php echo $branchList->Name . '  (' . $branchList->ParentName . ')'; ?></option>
<?php endforeach; ?>
                                </select>
                            </div>
                        </div>


<?php if ($this->ion_auth->is_admin()): ?>
                            <div class="control-group">
                                <label class="control-label">Profession</label>
                                <div class="controls">

                                        <?php foreach ($groups as $group): ?>
                                        <label class="checkbox">
                                            <?php
                                            $gID = $group['id'];
                                            $checked = null;
                                            $item = null;
                                            foreach ($currentGroups as $grp) {
                                                if ($gID == $grp->id) {
                                                    $checked = ' checked="checked"';
                                                    break;
                                                }
                                            }
                                            ?>
                                            <input type="checkbox" name="groups[]" value="<?php echo $group['id']; ?>"<?php echo $checked; ?>>
                                        <?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
                                        </label>
                                    <?php endforeach ?>

<?php endif ?>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">User Access</label>
                            <div class="controls">
                                    <?php foreach ($auth as $authList) : ?>
                                    <label>   
                                        <input type="checkbox" value="<?php echo $authList->id; ?>" name="auth_id[]" checked="checked"/>
    <?php echo $authList->title; ?></label>
<?php endforeach; ?>
                            </div>
                        </div>

                        <div class="form-actions">

                            <input type="submit" value="Submit" class="btn btn-success">
                        </div>


                    </div></div>
            </div>

        </div>
<?php echo form_close(); ?>
    </div>








