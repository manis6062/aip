<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>America CPN | Dashboard</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<link href="<?php echo base_url() . ADMIN_JS; ?>bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>backend/css/americacpn.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>backend/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>backend/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url() . ADMIN_JS; ?>bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">

	<!-- use js and script file on footer section -->


</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">
	<header class="main-header">
		<a href="<?php echo base_url('administrator'); ?>" class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini"><b>C</b>PN</span>
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><b>America</b>CPN</span>
		</a>
		<nav class="navbar navbar-static-top" role="navigation">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>
			<!-- Navbar Right Menu -->
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<!-- Messages: style can be found in dropdown.less-->
					<li class="dropdown messages-menu">
						<!-- Menu toggle button -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-envelope-o"></i>
							<span class="label label-success">4</span>
						</a>
						<ul class="dropdown-menu">
							<li class="header">You have 4 messages</li>
							<li>
								<!-- inner menu: contains the messages -->
								<ul class="menu">
									<li><!-- start message -->
										<a href="#">
											<div class="pull-left">
												<!-- User Image -->

											</div>
											<!-- Message title and timestamp -->
											<h4>
												Support Team
												<small><i class="fa fa-clock-o"></i> 5 mins</small>
											</h4>
											<!-- The message -->
											<p>Why not buy a new awesome theme?</p>
										</a>
									</li>
									<!-- end message -->
								</ul>
								<!-- /.menu -->
							</li>
							<li class="footer"><a href="#">See All Messages</a></li>
						</ul>
					</li>
					<!-- /.messages-menu -->

					<!-- Notifications Menu -->
					<li class="dropdown notifications-menu">
						<!-- Menu toggle button -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i>
							<span class="label label-warning">10</span>
						</a>
						<ul class="dropdown-menu">
							<li class="header">You have 10 notifications</li>
							<li>
								<!-- Inner Menu: contains the notifications -->
								<ul class="menu">
									<li><!-- start notification -->
										<a href="#">
											<i class="fa fa-users text-aqua"></i> 5 new members joined today
										</a>
									</li>
									<!-- end notification -->
								</ul>
							</li>
							<li class="footer"><a href="#">View all</a></li>
						</ul>
					</li>
					<!-- Tasks Menu -->
					<li class="dropdown tasks-menu">
						<!-- Menu Toggle Button -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-flag-o"></i>
							<span class="label label-danger">9</span>
						</a>
						<ul class="dropdown-menu">
							<li class="header">You have 9 tasks</li>
							<li>
								<!-- Inner menu: contains the tasks -->
								<ul class="menu">
									<li><!-- Task item -->
										<a href="#">
											<!-- Task title and progress text -->
											<h3>
												Design some buttons
												<small class="pull-right">20%</small>
											</h3>
											<div class="progress xs">
												<div class="progress-bar progress-bar-aqua" style="width: 20%"
													 role="progressbar" aria-valuenow="20" aria-valuemin="0"
													 aria-valuemax="100">
													<span class="sr-only">20% Complete</span>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</li>
							<li class="footer">
								<a href="#">View all tasks</a>
							</li>
						</ul>
					</li>
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="hidden-xs"><?php echo $this->session->userdata(NAME) ?></span>
						</a>
						<ul class="dropdown-menu">
							<!-- The user image in the menu -->
							<li class="user-footer">
								<a href="<?php echo site_url('administrator/user/updateuser/' .
									$this->session->userdata
									(USER_ID)); ?>" class="btn btn-default btn-flat">Profile</a>
								<a href="#" class="btn btn-default">Change Password</a>
								<a href="<?php echo site_url('admin/logout'); ?>" class="btn btn-default btn-flat">Sign
									out</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>