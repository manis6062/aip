<div class="container-fluid">
      <div id="infoMessage"><?php echo $message;?></div>
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
            <div class="widget-title"> <a href="<?php echo base_url() . 'Users/auth/create_user' ?>"><span class="icon"><i class="icon-plus"></i></span></a>
            <h5>Add User</h5>
            
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr class="gradeC">
                  <td>S.N.</td>
                  <td>Name</td>
                  <td>Email</td>
                  <td>Username</td>
                  <td>Profession</td>
                   <td>Branch</td>
                  <td>Status</td>
                  <td>Action</td>
                </tr>
                 </thead>
                      <tbody>
                <?php 
                $count = 1;
                foreach ($users as $key => $user):
                    ?>
                
                <tr class="gradeU">
                  <td><?php echo $count++ ; ?></td>
                 
                  <td><a href="#" id= "first_name"  data-value="<?php echo $user->first_name; ?>"class = "first_name" data-pk="<?php echo $user->id ; ?>"><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></a><a href="#" id= "last_name"  data-value="<?php echo $user->last_name; ?>"class = "last_name" data-pk="<?php echo $user->id ; ?>"><?php echo htmlspecialchars('  ' .$user->last_name,ENT_QUOTES,'UTF-8');?></a></td>
                  <td><a href="#" id= "email"  data-value="<?php echo $user->email; ?>"class = "email" data-pk="<?php echo $user->id ; ?>"><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></a></td>
                  <td><a href="#" id= "username"  data-value="<?php echo $user->username; ?>"class = "username" data-pk="<?php echo $user->id ; ?>"><?php echo htmlspecialchars($user->username,ENT_QUOTES,'UTF-8');?></a></td>
                  <td><?php foreach ($user->groups as $group):?>
                        <?php echo htmlspecialchars($group->name,ENT_QUOTES,'UTF-8') ;?><br />
                        <?php endforeach?>
                  </td>
                   <td><?php echo $user->branches->title;?></td>
                  <td>
<!--                      <a href="#myAlert" data-toggle="modal">alert</a>-->
                      <?php echo ($user->active) ? anchor("Users/auth/deactivate/".$user->id, lang('index_active_link')) : anchor("Users/auth/activate/". $user->id, lang('index_inactive_link'));?></td>
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

<script type= text/javascript>
    jQuery( document ).ready(function( $ ) {
		// setting defaults for the editable
		$.fn.editable.defaults.mode = 'popup';
		$.fn.editable.defaults.showbuttons = true;
		$.fn.editable.defaults.url = '<?php echo base_url() . 'Dashboard/post'?>';
		$.fn.editable.defaults.type = 'text';
                
   
    $('.first_name').editable({
        type: 'text',
        title: 'Enter First Name',
        params:{table: 'users'}
    });
    
     $('.last_name').editable({
        type: 'text',
        title: 'Enter Last Name',
        params:{table: 'users'}
    });
    
     $('.email').editable({
        type: 'text',
        title: 'Enter Email Address',
        params:{table: 'users'}
    });
    
     $('.username').editable({
        type: 'text',
        title: 'Enter Username',
        params:{table: 'users'}
    });
    
    
    
});</script>