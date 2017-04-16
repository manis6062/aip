<?php 
$CI=&get_instance();
$menu = $CI->MenuModel->getAllByType('main-menu', 'main-menu/footer-menu', '');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Cpn</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url();?>style/front/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- <script src="<?php echo base_url();?>js/front/jquery.min.js"></script> -->



<link rel="stylesheet" href="<?php echo base_url();?>style/front/tabstyle.css"> 
	<script src="<?php echo base_url();?>js/front/modernizr.js"></script>
	<script src="<?php echo base_url();?>js/front/jquery-2.1.1.js"></script>
<script src="<?php echo base_url();?>js/front/tabmain.js"></script>


	
	
		

</head>
<body>
  <div class="header-top">
	<div class="wrap">
        <div class="logo">
			<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>style/img/logofront.png"></a>
		</div>
		<div class="cssmenu">
		  <nav id="nav" role="navigation">
			<a href="#nav" title="Show navigation">Show navigation</a>
			<a href="#" title="Hide navigation">Hide navigation</a>
			<ul class="clearfix">
				<?php
                    if (!empty($menu)) {
                        $i = 1;
                        foreach ($menu as $value) {
                                ?>
                            <li <?php
                                if ($this->uri->segment(4) == "$value->id") {
                                    echo 'class="active"';
                                }
                                ?>><?php if($value->module_controller=="Content"){?>
                                		<a href="<?php echo site_url($value->module_controller.'/' . $value->content_id); ?>">
                                	<?php }elseif($value->module_controller=="Home"){?>
                                		<a href="<?php echo site_url(); ?>">
                                	<?php }else{?>
                                		<a href="<?php echo site_url($value->module_controller); ?>">
                                	<?php } echo $value->menu_name; ?></a></li>
                            <?php
                            $i++;
                    }
                }
                ?>
				<div class="clear"></div>
			</ul>
		    </nav>
		  </div>		  
					<?php if (isset($this -> session -> userdata['logged_in'])) {
						$name = $this -> session -> userdata['logged_in']['member_name'];?>
						<div class="buttons s">
							<p style="float: left;padding: 6px;">Hi, <?php echo $name;?></p>
							<div class="login_btn"><a href="<?php echo base_url();?>member/logout" title="Logout">Logout</a></div>
							<div class="clear"></div>
						</div>							
					<?php }else{?>	
						<div class="buttons">
							<div class="login_btn">					
								<a href="<?php echo base_url();?>member" title="Login">Login</a>
							</div>	
							<div class="login_btn">					
								<a href="<?php echo base_url();?>register" title="Register">Sign up</a>
							</div>								
		   				</div>	
					<?php }?>	
	
				
	     <div class="clear"></div>
		
     </div>
    </div>