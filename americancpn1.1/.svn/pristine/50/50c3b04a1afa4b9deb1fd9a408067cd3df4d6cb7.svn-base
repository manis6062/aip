<?php 
$CI = &get_instance();
	$themeoption = $CI->ThemeOptionModel->getAllFront();
	if($themeoption){
		$title = $themeoption->title;
		$caption = $themeoption->caption;
		$fav_icon = $themeoption->fav_icon;
	}else{
		$title = "Title";
		$caption = "Caption Motto";
		$fav_icon = "default_fav.ico";
	}
$menu = $CI->MenuModel->getAllByType('main-menu', 'main-menu/footer-menu', '');
?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $title." | ".$caption;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url();?>style/front/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- <link href="<?php echo base_url();?>style/front/calendar-eightysix-default.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>style/front/calendar-eightysix-osx-dashboard.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>style/front/calendar-eightysix-vista.css" rel="stylesheet" type="text/css" media="all" /> -->

<!-- <script type="text/javascript" src="<?php echo base_url();?>js/front/mootools-1.2.4-core.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/front/mootools-1.2.4.2-more.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/front/calendar-eightysix-v1.0.1.js"></script> -->

<!-- step complete form -->
<link rel="shortcut icon" href="<?php echo base_url().THEME_OPTION_IMAGE_PATH.$fav_icon;?>" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/front/formstyle.css" media="all" />
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url()?>js/front/jquery.inputfocus-0.9.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>js/front/jquery.main.js"></script>



<!-- <script src="<?php echo base_url();?>js/front/jquery.min.js"></script> -->
 
<link href="<?php echo base_url();?>style/front/flexslider.css" rel="stylesheet" type="text/css" media="all" />

<script defer src="<?php echo base_url();?>js/front/jquery.flexslider.js"></script>

  <script type="text/javascript">
    // $(function(){
      // SyntaxHighlighter.all();
    // });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
<script type="text/javascript">
		// window.addEvent('domready', function() {
			// new CalendarEightysix('exampleI', 	 { 'offsetY': -4 });
			// new CalendarEightysix('exampleII', 	 { 'startMonday': true, 'format': '%m.%d.%Y', 'slideTransition': Fx.Transitions.Back.easeOut, 'draggable': true, 'offsetY': -4 });
	// });	
</script>
<!-- <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> -->

<?php
	$result = $CI->db->query("Select * from nc_theme_option");
	//mysql_query("Select * from nc_theme_option");
	//print_r($result);
	$themeoption = $result->row();
	if($themeoption){
		$title = $themeoption->title;
		$caption = $themeoption->caption;
		$backcolor = $themeoption->head_color;
		$custom_css = $themeoption->custom_css;
		$fav_icon = $themeoption->fav_icon;
		$footer_color = $themeoption->footer_color;
		$logo = $themeoption->logo;
	}else{
		$title = "Title";
		$caption = "Motto";
		$head_back_image = '';
		$backcolor = '';
		$custom_css = '';
		$footer_color = '';
		$footer_back_image = '';
		$logo = '';
	}
?>
<style type="text/css">
.header-top {
	<?php if(!empty($backcolor)){?>
		background: #<?php echo $backcolor;?>;
	<?php }else{?>
		background: #FFF;
	<?php }?>
	padding: 15px 0;
}
.footer {
	<?php if(!empty($footer_color)){?>
		background: #<?php echo $footer_color;?>;
	<?php }else{?>
		background: #FFF;
	<?php }?>
	padding: 2% 0;
}
<?php echo $custom_css;?>

</style>		

</head>
<body>
  <div class="header-top">
	<div class="wrap">
        <div class="logo">
        	<?php if(!empty($logo)){?>
        		<a href="<?php echo base_url();?>"><img src="<?php echo base_url().'uploads/theme/'.$logo;?>"></a>
        	<?php }else{?>
				<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>style/img/logofront.png"></a>
			<?php }?>
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
					<?php if ($this->session->userdata(USER_ID)) {
						$name = $this -> session -> userdata(ADMIN_AUTH_USERNAME);?>
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
							<!-- <div class="login_btn">					
								<a href="<?php echo base_url();?>register" title="Register">Sign up</a>
							</div>	 -->							
		   				</div>	
					<?php }?>	
	
				
	     <div class="clear"></div>
		
     </div>
    </div>