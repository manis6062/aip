 
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
                        <?php echo form_input(array('id' => 'first_name','placeholder' => 'Enter First Name.', 'name' => 'first_name'));  ?>
 ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Last Name * </label>
                        <div class="controls">
                         <?php  echo form_input(array('id' => 'last_name','placeholder' => 'Enter Last Name.', 'name' => 'last_name'));  ?>
 ?>
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
                                            echo $groupsList['description'];
                                        ?>
                                    </option>
                                        <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                        <div class="control-group">
                            <label class="control-label">Phone</label>
                            <div class="controls">
                                 <?php 
                                 $phone['placeholder']='Enter Residental No.';
                                 echo form_input($phone); ?>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Mobile</label>
                            <div class="controls">
                              <?php
                              echo  form_input(array('id' => 'mobile','placeholder' => 'Enter Cell No.', 'name' => 'mobile','value'=> set_value('mobile', $this->data['mobile']['value'])));  ?>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Address *</label>
                            <div class="controls">
                                 <?php
                              echo  form_input(array('id' => 'address', 'placeholder' => 'City/Town','name' => 'address','value'=> set_value('address', $this->data['address']['value'])));  ?>
                            </div>
                        </div>

                        <br>


                </div>
            </div>
        </div>
    </div>
</div>