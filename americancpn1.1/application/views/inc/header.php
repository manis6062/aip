<?php
	$CI = &get_instance();
	$this->load->model('MenuModel');
	$this->load->model('ContactModel');
	$this->load->model('SocialModel');
	$menu = $CI->MenuModel->getAllByType('main-menu', 'main-menu/footer-menu', '');
	$contact = $CI->ContactModel->getAll();
	$social = $CI->SocialModel->getAllActive();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>American CPN | <?php echo $title; ?></title>
	<!-- core CSS -->
	<script src="<?php echo base_url() ?>frontend/js/jquery.js"></script>
	<link href="<?php echo base_url() ?>frontend/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>frontend/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>frontend/css/animate.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>frontend/css/prettyPhoto.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>frontend/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>frontend/css/responsive.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script> -->


	<script src="<?php echo base_url() ?>frontend/js/jquery.maskedinput.js"></script>

</head>
<!--/head-->

<body class="homepage">

<header id="header">
	<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-xs-6">
					<div class="top-number"><p><i class="fa fa-phone-square"></i> <?php //echo $contact->tel;?>
							<a class="phoneTag" href="tel:18002728030"> 180-272-8030 </a></p></div>
					<div class="beta">
						Beta
					</div>

				</div>
				<div class="col-sm-6 col-xs-6">
					<div class="social">
						<ul class="social-share" style="margin-right:15px; !important;">
							<?php if (!empty($social)) {
								foreach ($social as $key => $value) { ?>
									<li><a href="<?php echo $value->social_link; ?>"
										   class="<?php echo $value->social_title; ?>"><i
												class="fa fa-<?php echo $value->social_title; ?>"></i></a></li>
									<?php
								}
							} ?>
						</ul>

						<div class="pull-right btn-login">
							<?php if ($this->session->userdata(USER_ID)) { ?>

								<a href="<?php echo base_url() . 'member' ?>">Dashboard</a>  | <a
									href="<?php echo base_url() . 'member/logout' ?>">log out</a>
							<?php } else { ?>
								<a href="<?php echo base_url() . 'register/signUp' ?>">sign up</a>  | <a
									href="<?php echo base_url() . 'member'; ?>">log in</a>
							<?php } ?>
						</div>


					</div>
				</div>
			</div>

		</div>
		<!--/.container-->
	</div>
	<!--/.top-bar-->

	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="row">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="logo"><a href="<?php echo base_url() ?>"><img
								src="<?php echo base_url() ?>frontend/images/logo.png" alt="logo"></a></div>
				</div>

				<div class="collapse navbar-collapse navbar-right">
					<ul class="nav navbar-nav">
						<li <?php
							if (($this->uri->segment(1) == '') || ($this->uri->segment(1) == 'home')) {
								echo 'class="active">';
							} else {
								echo '>';
							}
						?>
						<a href="<?php echo base_url(); ?>">home</a>

						</li>
						<?php
							foreach ($menu as $mmenu) {
								if ($mmenu->menu_name != 'home') {
									?>

									<li <?php
									if (($mmenu->module_controller == 'content') && ($this->uri->segment(2) == $mmenu->content_id)) {
										echo 'class="active">';
									} elseif (($mmenu->module_controller == $this->uri->segment(1)) && ($mmenu->module_controller != 'content')) {
										echo 'class="active">';
									} else {
										echo '>';
									}
									?>
										<a href="<?php
									echo site_url($mmenu->module_controller);
									if ($mmenu->module_controller == 'content') {
										?>/<?php
										echo $mmenu->content_id;
									}
									?>"><?php echo $mmenu->menu_name; ?></a>
									</li>
									<?php
								}
							}
						?>
					</ul>
				</div>
			</div>
		</div>
		<!--/.container-->
	</nav>
	<!--/nav-->

</header>
<!--/header-->