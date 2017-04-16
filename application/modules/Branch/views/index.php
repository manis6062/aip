
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
                     <td><?php echo $branch->name ; ?></td>
                     <td><?php echo $branch->email ; ?></td>
                      <td><?php echo $branch->phone ; ?></td>
                       <td><?php echo ($branch->status == 1) ? 'Active' : 'Inactive' ; ?></td>
                 <?php endforeach;?>
               </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>



      
 