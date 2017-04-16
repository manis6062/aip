<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>americanCPN | Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="robots" content="noindex, nofollow"/>
    <link href="<?php echo base_url(); ?>backend/docs/css/bootstrap-3.3.2.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>backend/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>backend/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>backend/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>backend/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>backend/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>backend/plugins/morris/morris.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>backend/css/cpn.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>backend/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo base_url(); ?>backend/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>backend/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo base_url(); ?>backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"
          rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>backend/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo base_url() . ADMIN_JS; ?>bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>backend/plugins/select2/select2.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>backend/css/bootstrapValidator.css" rel="stylesheet" type="text/css"/>


    <script src="<?php echo base_url(); ?>backend/docs/js/jquery-2.1.3.min.js"></script>
    <script src="<?php echo base_url(); ?>backend/docs/js/bootstrap-3.3.2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>backend/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>backend/js/bootstrapValidator.js"></script>
    <script type="text/javascript">
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="<?php echo base_url(); ?>backend/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>backend/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>backend/js/html5shiv.min.js"></script>
    <script src="<?php echo base_url(); ?>backend/js/respond.min.js"></script>
    <![endif]-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <script src="<?php echo base_url(); ?>backend/js/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>backend/plugins/morris/morris.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>backend/plugins/sparkline/jquery.sparkline.min.js"
            type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"
            type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"
            type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>backend/plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>backend/js/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>backend/plugins/daterangepicker/daterangepicker.js"
            type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>backend/plugins/datepicker/bootstrap-datepicker.js"
            type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"
            type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>backend/plugins/slimScroll/jquery.slimscroll.min.js"
            type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>backend/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>backend/dist/js/app.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() . ADMIN_JS; ?>md5.js"></script>
    <script src="<?php echo base_url() . ADMIN_JS; ?>bootstrap3-editable/js/bootstrap-editable.js"></script>
    <script src="<?php echo base_url(); ?>backend/plugins/select2/select2.full.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>backend/plugins/input-mask/jquery.inputmask.js"
            type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>backend/plugins/input-mask/jquery.inputmask.date.extensions.js"
            type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>backend/plugins/input-mask/jquery.inputmask.extensions.js"
            type="text/javascript"></script>


</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url('administrator'); ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>american</b>CPN</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="<?php echo base_url(); ?>backend/dist/img/user2-160x160.jpg"
                                                     class="img-circle"
                                                     alt="User Image"/>
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="<?php echo base_url(); ?>backend/dist/img/user3-128x128.jpg"
                                                     class="img-circle"
                                                     alt="User Image"/>
                                            </div>
                                            <h4>
                                                AdminLTE Design Team
                                                <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="<?php echo base_url(); ?>backend/dist/img/user4-128x128.jpg"
                                                     class="img-circle"
                                                     alt="User Image"/>
                                            </div>
                                            <h4>
                                                Developers
                                                <small><i class="fa fa-clock-o"></i> Today</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="<?php echo base_url(); ?>backend/dist/img/user3-128x128.jpg"
                                                     class="img-circle"
                                                     alt="User Image"/>
                                            </div>
                                            <h4>
                                                Sales Department
                                                <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="<?php echo base_url(); ?>backend/dist/img/user4-128x128.jpg"
                                                     class="img-circle"
                                                     alt="User Image"/>
                                            </div>
                                            <h4>
                                                Reviewers
                                                <small><i class="fa fa-clock-o"></i> 2 days</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-yellow"></i> Very long description here that
                                            may not fit into the page and may cause design problems
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-red"></i> 5 new members joined
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> You changed your username
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
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
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Create a nice theme
                                                <small class="pull-right">40%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-green" style="width: 40%"
                                                     role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                     aria-valuemax="100">
                                                    <span class="sr-only">40% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Some task I need to do
                                                <small class="pull-right">60%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-red" style="width: 60%"
                                                     role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                     aria-valuemax="100">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Make beautiful transitions
                                                <small class="pull-right">80%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-yellow" style="width: 80%"
                                                     role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                     aria-valuemax="100">
                                                    <span class="sr-only">80% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo base_url(); ?>backend/dist/img/user2-160x160.jpg" class="user-image"
                                 alt="User Image"/>
                            <span class="hidden-xs"><?php echo $this->session->userdata(NAME) ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php echo base_url(); ?>backend/dist/img/user2-160x160.jpg"
                                     class="img-circle" alt="User Image"/>

                                <p>
                                    <?php echo $this->session->userdata(NAME) ?> - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo base_url('admin/logout') ?>" class="btn btn-default btn-flat">Sign
                                        out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img style="width: auto" src="<?php echo base_url(); ?>backend/dist/img/user2-160x160.jpg"
                         class="img-circle"
                         alt="User Image"/>
                </div>
                <div class="pull-left info">
                    <p><?php echo $this->session->userdata(NAME) ?></p>
                    <?php echo form_dropdown("roles", $this->session->userdata(ROLES),
                        $this->session->userdata(ROLE_NAME), array('class' => 'form-control roles')) ?>
                </div>
            </div>
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="<?php echo $this->uri->segment(2) == '' ? 'active' : ''; ?> boxer super_admin admin super_broker broker owner client">
                    <a href="<?php echo base_url() . 'administrator'; ?>">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>

                </li>
                <li class="<?php echo $this->uri->segment(2) == 'user' ? 'active' : ''; ?> treeview boxer super_admin admin broker super_broker">
                    <a href="#"><i class='fa fa-users'></i> <span>User Management</span> <i
                            class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li class="<?php echo $this->uri->segment(3) == '' ? 'active' : ''; ?>"><a
                                href="<?php echo base_url() . 'administrator/user'; ?>"><i
                                    class='fa fa-cogs'></i>Manage Users</a></li>
                        <li class="<?php echo $this->uri->segment(3) == 'userForm' ? 'active' : ''; ?>"><a
                                href="<?php echo base_url() . 'administrator/user/userForm'; ?>"><i
                                    class='fa fa-user-plus'></i>Add User</a></li>
                    </ul>
                </li>
                <li class="<?php $ownermenu = array('cardType', 'line', 'ChooseAndCharge');
                echo in_array($this->uri->segment(2), $ownermenu) ? 'active' : ''; ?> treeview boxer super_admin owner super_broker broker">
                    <a href="#"><i class='fa fa-usd'></i> <span>Line Management</span> <i
                            class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li class="<?php echo $this->uri->segment(3) == '' ? 'active' : ''; ?> boxer super_admin admin super_broker broker">
                            <a
                                href="<?php echo base_url('administrator/ChooseAndCharge') ?>"><i
                                    class='fa fa-truck'></i>Choose And
                                Charge</a></li>

                        <li class="<?php echo $this->uri->segment(3) == 'cardTypes' ? 'active' : ''; ?>  boxer super_admin admin super_broker broker">
                            <a
                                href="<?php echo base_url() . 'administrator/cardType/cardTypes'; ?>"><i
                                    class='fa fa-cc-visa'></i>card types</a></li>
                        <li class="<?php echo $this->uri->segment(3) == 'lines' ? 'active' : ''; ?> "><a
                                href="<?php echo base_url() . 'administrator/line/lines' ?>"><i
                                    class='fa fa-cogs'></i>manage lines</a></li>
                        <li class="<?php echo $this->uri->segment(3) == 'lineForm' ? 'active' : ''; ?> "><a
                                href="<?php echo base_url() . 'administrator/line/lineForm'; ?>"><i
                                    class='fa fa-plus-square-o'></i>add line</a></li>
                    </ul>
                </li>
                <li class="<?php $contentmgnt = array('mail', 'newsletter');
                echo in_array($this->uri->segment(2), $contentmgnt) ? 'active' : ''; ?> treeview boxer super_admin admin super_broker broker">
                    <a href="#"><i class='fa fa-newspaper-o'></i> <span>Mail Management</span> <i
                            class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li class="<?php echo $this->uri->segment(2)=='mail'?'active':''?> treeview boxer super_admin super_broker broker admin">
                            <a href="<?php echo base_url() . 'administrator/mail'; ?>"><i class='fa fa-envelope'></i>
                                <span>Email</span></a>
                        </li>
                        <li class="<?php echo $this->uri->segment(2)=='newsletter'?'active':''?> treeview boxer super_admin admin super_broker broker">
                            <a href="#"><i class='fa fa-newspaper-o'></i> <span>NewsLetter</span> <i
                                    class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li class="<?php echo $this->uri->segment(3)==''?'active':''?>"><a href="<?php echo base_url('administrator/newsletter') ?>">Add
                                        Templates</a>
                                </li>
                                <li class="<?php echo $this->uri->segment(3)=='sendNewsletter'?'active':''?>"><a href="<?php echo base_url('administrator/newsletter/sendNewsletter') ?>">Send
                                        Newsletter</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="<?php $contentmgnt = array('banner', 'content', 'menu','faq','process','social','contact','themeoption');
                echo in_array($this->uri->segment(2), $contentmgnt) ? 'active' : ''; ?> treeview boxer super_admin admin super_broker broker">
                    <a href="#"><i class='fa fa-folder-open'></i> <span>Content Management</span> <i
                            class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li class="<?php echo $this->uri->segment(2)=='banner'?'active':''?> treeview boxer super_admin admin super_broker broker">
                            <a href="#"><i class='fa fa-header'></i> <span>Banner Management</span> <i
                                    class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li class="<?php echo $this->uri->segment(3)==''?'active':''?>"><a href="<?php echo base_url('administrator/banner') ?>">Manage
                                        Banner</a>
                                </li>
                                <li class="<?php echo $this->uri->segment(3)=='bannerForm'?'active':''?>"><a href="<?php echo base_url('administrator/banner/bannerForm') ?>">Add Banner</a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php echo $this->uri->segment(2)=='content'?'active':''?> treeview boxer super_admin admin super_broker broker">
                            <a href="#"><i class='fa fa-folder-open'></i> <span>Public Page</span> <i
                                    class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li class="<?php echo $this->uri->segment(3)==''?'active':''?>"><a href="<?php echo base_url('administrator/content') ?>">Manage
                                        Content</a>
                                </li>
                                <li class="<?php echo $this->uri->segment(3)=='contentForm'?'active':''?>"><a href="<?php echo base_url('administrator/content/contentForm') ?>">Add Content</a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php echo $this->uri->segment(2)=='menu'?'active':''?> treeview boxer super_admin admin super_broker broker">
                            <a href="#"><i class='fa fa-server'></i> <span>Menu Management</span> <i
                                    class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li class="<?php echo $this->uri->segment(3)==''?'active':''?>"><a href="<?php echo base_url('administrator/menu') ?>">Manage
                                        Menu</a></li>
                                <li class="<?php echo $this->uri->segment(3)=='menuForm'?'active':''?>"><a href="<?php echo base_url('administrator/menu/menuForm') ?>">Add Menu</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo $this->uri->segment(2) == 'faq' ? 'active' : ''; ?> treeview boxer super_admin admin">
                            <a href="<?php echo base_url('administrator/referrer') ?>"><i class='fa fa-question'></i>
                                <span>Faq Management</span>
                                <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li class="<?php echo $this->uri->segment(3) == '' ? 'active' : ''; ?> "><a
                                        href="<?php echo base_url('administrator/faq') ?>">Faqs</a></li>
                                <li class="<?php echo $this->uri->segment(3) == 'faqForm' ? 'active' : ''; ?>"><a
                                        href="<?php echo base_url('administrator/faq/faqForm') ?>">Add Faq</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo $this->uri->segment(2)=='process'?'active':''?> treeview boxer super_admin admin">
                            <a href="<?php echo base_url('administrator/referrer') ?>"><i
                                    class='fa fa-puzzle-piece'></i> <span>Process Management</span>
                                <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li class="<?php echo $this->uri->segment(3)==''?'active':''?>"><a href="<?php echo base_url('administrator/process') ?>">Manage
                                        Process</a>
                                </li>
                                <li class="<?php echo $this->uri->segment(3)=='processForm'?'active':''?>"><a href="<?php echo base_url('administrator/process/processForm') ?>">Add
                                        Process</a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php echo $this->uri->segment(2)=='social'?'active':''?> treeview boxer super_admin admin super_broker broker">
                            <a href="<?php echo base_url('administrator/referrer') ?>"><i class='fa fa-facebook'></i>
                                <span>Social Media Management</span>
                                <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li class="<?php echo $this->uri->segment(3)==''?'active':''?>"><a href="<?php echo base_url('administrator/social') ?>">Manage
                                        Social
                                        Media</a>
                                </li>
                                <li class="<?php echo $this->uri->segment(3)=='socialForm'?'active':''?>"><a href="<?php echo base_url('administrator/social/socialForm') ?>">Add
                                        Social
                                        Media</a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php echo $this->uri->segment(2)=='contact'?'active':''?> treeview boxer super_admin admin super_broker broker">
                            <a href="<?php echo base_url('administrator/referrer') ?>"><i class='fa fa-street-view'></i>
                                <span>Contact Management</span>
                                <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="<?php echo base_url('administrator/contact') ?>">Update
                                        Contact</a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php echo $this->uri->segment(2)=='themeoption'?'active':''?> treeview boxer super_admin admin super_broker broker">
                            <a href="<?php echo base_url('administrator/referrer') ?>"><i class='fa fa-ellipsis-v'></i>
                                <span> Theme Option</span>
                                <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="<?php echo base_url('administrator/themeoption') ?>">Manage
                                        Theme
                                        Option</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="<?php $authmenu = array('role', 'auth');
                echo in_array($this->uri->segment(2), $authmenu) ? 'active' : ''; ?> treeview boxer super_admin admin">
                    <a href="#"><i class='fa fa-lock'></i> <span>Access Management</span> <i
                            class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li class="<?php echo ($this->uri->segment(2)=='role' && $this->uri->segment(3)!='roleAuth')?'active':''?> treeview boxer super_admin admin">
                            <a href="#"><i class='fa fa-lock'></i> <span>Role Management</span> <i
                                    class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li class="<?php echo $this->uri->segment(3) == 'roles' ? 'active' : ''; ?> "><a
                                        href="<?php echo base_url() . 'administrator/role/roles'; ?>"><i
                                            class='fa fa-unlock-alt'></i>Role List</a></li>
                                <li class="<?php echo $this->uri->segment(3) == 'roleForm' ? 'active' : ''; ?>"><a
                                        href="<?php echo base_url() . 'administrator/role/roleForm'; ?>"><i
                                            class='fa fa-gears'></i>Add Role</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo $this->uri->segment(2)=='auth'?'active':''?> treeview boxer super_admin admin">
                            <a href="#"><i class='fa fa-lock'></i> <span>Auth Management</span> <i
                                    class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li class="<?php echo $this->uri->segment(3) == 'auths' ? 'active' : ''; ?>"><a
                                        href="<?php echo base_url() . 'administrator/auth/auths'; ?>"><i
                                            class='fa fa-unlock-alt'></i>Auth List</a></li>
                                <li class="<?php echo $this->uri->segment(3) == 'authForm' ? 'active' : ''; ?>"><a
                                        href="<?php echo base_url() . 'administrator/auth/authForm'; ?>"><i
                                            class='fa fa-gears'></i>Add Auth</a></li>
                            </ul>

                        <li class="<?php echo ($this->uri->segment(2)=='role' && $this->uri->segment(3) == 'roleAuth') ? 'active' : ''; ?>"><a
                                href="<?php echo base_url() . 'administrator/role/roleAuth'; ?>"><i
                                    class='fa fa-gears'></i>Role Auth List</a></li>
                    </ul>
                </li>
            </ul>
        </section>
    </aside>

    <script>
        $("." + $(".roles").find("option:selected").val()).css({'display': 'block'});

        $(".roles").change(function () {
            $(".roles option").each(function () {
                $("." + $(this).val()).css({'display': 'none'});
            });
            $("." + $(".roles").find("option:selected").val()).css({'display': 'block'});

            var selectedRoleLabel = $(".roles").find("option:selected").text();
            var selectedRoleName = $(".roles").find("option:selected").val();
            $.ajax({
                url: "<?php echo base_url().'/administrator/home/changeRole/'?>",
                method: "POST",
                data: {current_role_name: selectedRoleName, current_role_label: selectedRoleLabel}
            });


        });
    </script>






