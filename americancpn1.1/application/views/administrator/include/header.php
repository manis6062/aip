<?php
	$CI = &get_instance();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Tej Technology Cms website">
	<meta name="author" content="Niroj Shakya">

	<link href="<?php echo base_url() . ADMIN_JS; ?>bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
	<script src="<?php echo base_url() . ADMIN_JS; ?>bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
	<link href="<?php echo base_url() . ADMIN_JS; ?>bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
	<script src="<?php echo base_url() . ADMIN_JS; ?>bootstrap3-editable/js/bootstrap-editable.js"></script>
	<script src="<?php echo base_url() . ADMIN_JS; ?>moments.js"></script>
</head>

<body>

<?php

	$CI = &get_instance();
	if ($this->session->userdata(ADMIN_AUTH_TYPE) == 'affiliate' && $this->session->userdata(ADMIN_AUTH_TYPE) == 'referral') {
		$businessName = $CI->AffiliateModel->checkAffiliatePaymentSatus($this->session->userdata(ADMIN_AUTH_AFFILIATEID));
	} else {
		$allowed = $this->session->userdata(AUTHORITIES);
	}
?>
<!-- topbar starts -->
<div>
	<div>
		<div>
			<a data-toggle="collapse"
			   data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
				<span></span>
				<span></span>
				<span></span>
			</a>
			<a
				href="<?php echo base_url() . 'member'; ?>"><span><?php if ($this->session->userdata(ADMIN_AUTH_TYPE) == 'affiliate') {
						echo $businessName->affiliate_business;
					} else {
						echo SITE_NAME;
					} ?></span></a>

			<!-- user dropdown starts -->
			<div class="btn-group" role="group">
				<a data-toggle="dropdown" href="#">
					<i></i><span> <?php echo $this->session->userdata(ADMIN_AUTH_USERNAME); ?></span>
					<span></span>
				</a>
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					User <span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu">
					<?php
						{
							{ ?>
								<li><a href="<?php echo site_url('admin/config'); ?>">Profile</a></li>
								<li></li>
							<?php }
							{ ?>
								<li>
									<a href="<?php echo site_url(ADMIN_PATH . 'user/changePassword/' . $this->session->userdata(USER_ID)); ?>">Change
										Password</a></li>
								<li></li>
							<?php }
						}
						if ($this->session->userdata(ADMIN_AUTH_ROLE) == '4') {
							?>
							<li>
								<a href="<?php echo site_url(ADMIN_PATH . 'affiliate/view/' . $this->session->userdata(USER_ID)); ?>">Profile</a>
							</li>
							<li></li>
							<li>
								<a href="<?php echo site_url(ADMIN_PATH . 'user/changePassword/' . $this->session->userdata(USER_ID)); ?>">Change
									Password</a></li>
							<li></li>
							<?php
						}
						if ($this->session->userdata(ADMIN_AUTH_ROLE) == '5') {
							?>
							<li>
								<a href="<?php echo site_url(ADMIN_PATH . 'referral/view/' . $this->session->userdata(USER_ID)); ?>">Profile</a>
							</li>
							<li></li>
							<li>
								<a href="<?php echo site_url(ADMIN_PATH . 'user/changePassword/' . $this->session->userdata(USER_ID)); ?>">Change
									Password</a></li>
							<li></li>
							<?php
						}
						if ($this->session->userdata(ADMIN_AUTH_ROLE) == '6') {
							?>
							<li>
								<a href="<?php echo site_url(ADMIN_PATH . 'tradelineowner/view/' . $this->session->userdata(USER_ID)); ?>">Profile</a>
							</li>
							<li></li>
							<li>
								<a href="<?php echo site_url(ADMIN_PATH . 'user/changePassword/' . $this->session->userdata(USER_ID)); ?>">Change
									Password</a></li>
							<li></li>
							<?php
						}
						if ($this->session->userdata(ADMIN_AUTH_TYPE) == 'client') {
							$referralStatus = $CI->ClientModel->checkClientPaymentSatus($this->session->userdata(USER_ID));
							{
								{
									$client_id = $CI->ClientModel->getclientid($this->session->userdata(USER_ID));
									?>
									<li>
										<a href="<?php echo site_url(ADMIN_PATH . 'client/view/' . $client_id); ?>">Profile</a>
									</li>
									<li></li>
								<?php }
								{ ?>
									<li>
										<a href="<?php echo site_url(ADMIN_PATH . 'user/changePassword/' . $this->session->userdata(USER_ID)); ?>">Change
											Password</a></li>
									<li></li>
								<?php }
							}
						} ?>
					<li><a href="<?php echo site_url('admin/logout'); ?>">Logout</a></li>
				</ul>
			</div>
			<!-- user dropdown ends -->

			<!-- user dropdown starts -->
			<div>
				<?php $privilage_role = $this->session->userdata(ROLES);
					if (count($privilage_role) > 1) {
						?>
						<a data-toggle="dropdown" href="#">
							<!-- <i > --></i><span
								> <?php echo ucwords($this->session->userdata(ADMIN_AUTH_TYPE)); ?></span>
							<span></span>
						</a>

						<ul>
							<?php
								foreach ($privilage_role as $val) {
									foreach ($val as $key => $value) {
										?>
										<li>
											<a href="<?php echo site_url(ADMIN_PATH . 'user/switchRole/' . $value . '/' . $key); ?>"><?php echo ucwords($value); ?></a>
										</li>
									<?php }
								} ?>
						</ul>
					<?php } else {
						?>
						<a data-toggle="dropdown" href="#">
						<span
							> <?php echo ucwords($this->session->userdata(ADMIN_AUTH_TYPE)); ?></span>
						</a>
					<?php } ?>
			</div>
			<div class="btn-group" role="group">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					Go <span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li><a target="_blank" href="<?php echo base_url(); ?>">Visit Site</a></li>
					<li><a href="<?php echo site_url('admin'); ?>">Dashboard</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</body>