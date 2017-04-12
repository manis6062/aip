<div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
     <h1 class="text-center"><span class="icon">
<i class="icon-user"></i>
</span><?php echo "Users"; ?></h1>
  </div>
  <div class="container-fluid">
      <div id="infoMessage"><?php echo $message;?></div>
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
            <div class="widget-title"> <a href="<?php echo base_url() . 'Users/auth/create_user' ?>"><span class="icon"><i class="icon-plus"></i></span></a>
            <h5>Create User</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr class="gradeC">
                  <td>S.N.</td>
                  <td>Branch</td>
                  <td>First Name</td>
                  <td>Last Name</td>
                   <td>Username</td>
                  <td>Email</td>
                  <td>Designation</td>
                  <td>Status</td>
                  <td>Action</td>
                </tr>
                 </thead>
                      <tbody>
                <?php 
                $count = 1;
                foreach ($users as $user):?>
               
                <tr class="gradeU">
                  <td><?php echo $count++ ; ?></td>
                  <td><?php echo $user->user_branch_id;?></td>
                  <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
                  <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
                 <td><?php echo htmlspecialchars($user->username,ENT_QUOTES,'UTF-8');?></td>
                  <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
                  <td><?php foreach ($user->groups as $group):?>
                        <?php echo anchor("Users/auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                        <?php endforeach?>
                  </td>
                  <td><?php echo ($user->active) ? anchor("Users/auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
                <td><span class="icon">
                        <a href="<?php echo 'auth/edit_user/' . $user->id ;?>"   <i class="icon-edit"></i></a>
                    </span>  
                </tr>
               
                 <?php endforeach;?>
               </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


<!--<script>
$.fn.editable.defaults.mode = 'inline';
         $(document).ready(function() {
           $('.first_name').editable({
        type: 'text',
        url: '<?php // echo base_url() . 'Users/auth/edit_user/'?>' + 1,
        title: 'Enter First name',
        send: 'always'
    });
    });
</script>-->