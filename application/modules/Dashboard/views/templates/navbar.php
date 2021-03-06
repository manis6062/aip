<?php 
$view_branch_permission = $this->user_permission->has_permission('view_branch' , 'access'); 
$view_profession_permission = $this->user_permission->has_permission('view_profession' , 'access'); 
$view_courses_permission = $this->user_permission->has_permission('view_course' , 'access'); 
$view_destination_permission = $this->user_permission->has_permission('view_destination' , 'access'); 

$view_user_permission = $this->user_permission->has_permission('view_user' , 'access'); 
$create_user_permission = $this->user_permission->has_permission('create_user' , 'access'); 


// $this->load->module_model('Courses_model' , 'Courses');
//        $data['$all_courses'] = $this->Courses_model->getCourses();
        
    

?>
<!--Header-part-->
<div id="header">
  <h1><a href="<?php echo base_url() . 'Dashboard/dashboard/index'; ?>"><?php echo SITE_NAME ;?></a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome <?php if(!empty($this->session->userdata('username'))){ echo $this->session->userdata('username'); }?> </span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="<?php echo base_url() . 'Users/auth/logout'?>"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="<?php echo base_url() . 'Users/auth/logout'?>"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->





<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="<?php echo base_url() . 'Dashboard/dashboard/index'; ?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    
  
    <?php 
         if($view_user_permission != FALSE || $create_user_permission != FALSE || $this->ion_auth->is_admin()) : ?>
    <li class="submenu"> <a href="<?php echo base_url() . 'Users/auth' ?>"><i class="icon icon-user"></i> <span>Users / Staffs</span></a>
      <ul>
           <?php 
         if($view_user_permission != FALSE || $this->ion_auth->is_admin()) : ?>
        <li><a href="<?php echo base_url() . 'Users/auth' ?>"><i class="icon icon-eye-open"></i> <span>View Users</span></a></a></li>
        <?php endif ; ?>
       <?php 
         if($create_user_permission != FALSE || $this->ion_auth->is_admin()) : ?>
        <li><a href="<?php echo base_url() . 'Users/auth/create_user' ?>"><i class="icon icon-plus"></i> <span>Add User</span></a></li>
<?php endif ; ?>
      </ul>
    </li>
    <?php endif ; ?>
    
    
    
    <li class="submenu"> <a href="#"><i class="icon icon-group"></i> <span>Leads</span></a>
      <ul>
        <li><a href="<?php echo base_url() . 'Users/auth/create_user' ?>">View Leads</a></li>
        <li><a href="<?php echo base_url() . 'Leads/leads/create_leads' ?>">Add Leads</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-user-md"></i> <span>Students</span></a>
      <ul>
        <li><a href="<?php echo base_url() . 'Students/students/index' ?>">Manage Students</a></li>
       <li><a href="<?php echo base_url() . 'Students/students/create_student' ?>">Add Students</a></li>
      </ul>
    </li>
    
    <li class="submenu"> <a href="<?php echo base_url() . 'Users/auth' ?>"><i class="icon icon-info-sign"></i> <span>Enquiry</span></a>
      <ul>
        <li><a href="<?php echo base_url() . 'Enquiry/enquiry/information' ?>">Information</a></li>
        <li><a href="<?php echo base_url() . 'Users/auth/create_user' ?>">About Study</a></li>
        <li><a href="<?php echo base_url() . 'Users/auth/create_user' ?>">Enrollment</a></li>
        <li><a href="<?php echo base_url() . 'Users/auth/create_user' ?>">Exam Preparation</a></li>
      </ul>
    </li>
    
    <li class="submenu"> <a href="<?php echo base_url() . 'Users/auth' ?>"><i class="icon icon-bookmark"></i> <span>Training</span></a>
      <ul>
        
        <?php  foreach ($all_courses as $key => $value) : ?>
          <li><a href="<?php echo base_url() . 'Users/auth/create_user' ?>"><?php echo ucwords($value->name); ?></a></li>
        <?php endforeach; ?>
     
      </ul>
    </li>
    
    <li class="submenu"> <a href="<?php echo base_url() . 'Users/auth' ?>"><i class="icon icon-book"></i> <span>Documentation</span></a>
      <ul>
        <li><a href="<?php echo base_url() . 'Users/auth/create_user' ?>">Visa Process</a></li>
        <li><a href="<?php echo base_url() . 'Users/auth/create_user' ?>">Others</a></li>
      </ul>
    </li>
    
    <li> <a href="<?php echo base_url() . 'Users/auth' ?>"><i class="icon icon-hdd"></i> <span>Reports</span></a>
    </li>
      
      <li class="submenu"> <a href="<?php echo base_url() . 'Users/auth' ?>"><i class="icon icon-trophy"></i> <span>Test Scores</span></a>
      <ul>
        <li><a href="<?php echo base_url() . 'Users/auth/create_user' ?>">Students Scores</a></li>
        <li><a href="<?php echo base_url() . 'Users/auth/create_user' ?>">Accepted Universities</a></li>
      </ul>
    </li>
    
      <?php 
         if($view_courses_permission != FALSE || $this->ion_auth->is_admin()) : ?>
      <li class="submenu"> <a href="#"><i class="icon icon-fire"></i> <span>Courses</span></a>
    <ul>
      <li> <a href="<?php echo base_url() . 'Courses/courses' ?>"><i class="icon icon-eye-open"></i> <span>View Courses</span></a>
    </li>
      </ul>
      </li>
      <?php endif; ?>
     <li class="submenu"> <a href="<?php echo base_url() . 'Users/auth' ?>"><i class="icon icon-pencil"></i> <span>Registration</span></a>
      <ul>
        <li><a href="<?php echo base_url() . 'Users/auth/create_user' ?>">British</a></li>
        <li><a href="<?php echo base_url() . 'Users/auth/create_user' ?>">Others</a></li>
      </ul>
    </li>
        <li class="submenu"> <a href="<?php echo base_url() . 'Users/auth' ?>"><i class="icon icon-align-center"></i> <span>Universities</span></a>
      <ul>
        <li><a href="<?php echo base_url() . 'Users/auth/create_user' ?>">View Universities</a></li>
         <li><a href="<?php echo base_url() . 'Users/auth/create_user' ?>">Add Universities</a></li>
      </ul>
    </li>
    
    
    <?php 
         if($view_profession_permission != FALSE || $this->ion_auth->is_admin()) : ?>
      <li class="submenu"> <a href="#"><i class="icon icon-link"></i> <span>Profession</span></a>
      <ul>
      <li> <a href="<?php echo base_url() . 'Users/auth/create_group' ?>"><i class="icon icon-eye-open"></i> <span>View Profession</span></a>
    </li>
      </ul>
    </li>
    <?php endif ; ?>
    
            
          <?php 
         if($view_branch_permission != FALSE || $this->ion_auth->is_admin()) : ?>
       <li class="submenu"> <a href="#"><i class="icon icon-columns"></i> <span>Branch</span></a>
      <ul>
      <li> <a href="<?php echo base_url() . 'Branch' ?>"><i class="icon icon-eye-open"></i> <span>View Branch</span></a>
    </li>
      </ul>
    </li>
    
     <?php  endif; ?>
    
    
    
      <?php 
         if($view_destination_permission != FALSE || $this->ion_auth->is_admin()) : ?>
       <li class="submenu"> <a href="#"><i class="icon icon-plane"></i> <span>Destinations</span></a>
      <ul>
      <li> <a href="<?php echo base_url() . 'Destinations/destinations' ?>"><i class="icon icon-eye-open"></i> <span>View Destinations</span></a>
    </li>
      </ul>
    </li>
    
     <?php  endif; ?>
    
   
  </ul>     
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
 <div id="content-header">
     <div id="breadcrumb"> <a href="<?php echo base_url() . 'Dashboard/dashboard/index'; ?>" title="Go to Dashboard" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#"><?php echo $this->uri->segment(1);?></a> 
         <?php 
         
         if(!empty($this->uri->segment(3))){
             $third_segment = $this->uri->segment(3);
             $third_segment = ucwords(str_replace("_", " ", $third_segment));
             ?>
                      <a href="#" class="current"><?php echo $third_segment ; ?></a> </div>
      <?php   }?>
  </div>
<!--End-breadcrumbs-->

 