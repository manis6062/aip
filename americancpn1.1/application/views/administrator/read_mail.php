<!DOCTYPE html>
<html>

<body class="skin-blue sidebar-mini">
<div class="wrapper">


<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
                <?php echo $this->session->userdata(NAME); ?>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active">Mailbox</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-3">
					<a href="<?php echo base_url('administrator/mail/compose')?>" class="btn btn-primary btn-block margin-bottom">Compose</a>
					<div class="box box-solid">
						<div class="box-header with-border">
							<h3 class="box-title">Folders</h3>
							<div class='box-tools'>
								<button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
							</div>
						</div>
						<div class="box-body no-padding">
							<ul class="nav nav-pills nav-stacked">
								<li><a href="<?php echo base_url('administrator/mail');?>"><i class="fa fa-inbox"></i> Inbox <span class="label label-primary pull-right"><?php if(!empty($count_receivedEmails)){echo $count_receivedEmails ;}?></span></a></li>
								<li><a href="<?php echo base_url('administrator/mail/sent_mail');?>"><i class="fa fa-envelope-o"></i> Sent</a></li>
								<li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
							</ul>
						</div><!-- /.box-body -->
					</div><!-- /. box -->

				</div><!-- /.col -->
				<div class="col-md-9">
					<div class="box box-primary">
						<div class="box-header with-border">
							<div class="box-tools pull-right">
								<a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
								<a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
							</div>
						</div><!-- /.box-header -->


						<?php
						foreach($read_mail as $values ) {?>
						<div class="box-body no-padding">
							<div class="mailbox-read-info">
								<h3><?php echo $values -> subject ?></h3>
								<h5>From: <?php echo $values -> sender ;?> <span class="mailbox-read-time pull-right"><?php echo $values -> date ;?></span></h5>
							</div><!-- /.mailbox-read-info -->
							<div class="mailbox-controls with-border text-center">
								<div class="btn-group">
									<a href="<?php echo base_url('administrator/mail')?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Back"><i class="fa fa-chevron-left"></i></a>
									<a href="<?php echo base_url('administrator/mail/deleteAction') . '/' .$values->id ?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>



							</div><!-- /.mailbox-controls -->
							<div class="mailbox-read-message">								</div><!-- /.btn-group -->

							<p>Hello <?php echo $values -> receiver ;?>,</p>
								<p><?php echo $values -> msg ;?></p>
								<p>Thanks,<br><?php echo $values -> sender ;?></p>
							</div><!-- /.mailbox-read-message -->
						</div>

						<?php } ?>



						<!-- /.box-body -->

						<div class="box-footer">
							<div class="btn-group">
								<a href="<?php echo base_url('administrator/mail')?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Back"><i class="fa fa-chevron-left"></i></a>
								<a href="<?php echo base_url('administrator/mail/deleteAction') . '/' .$values->id ?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
							</div><!-- /.btn-group -->

						</div><!-- /.box-footer -->
					</div><!-- /. box -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</section><!-- /.content -->
	</div><!-- /.content-wrapper -->

</div><!-- ./wrapper -->

<!-- Page Script -->
<script>
	$(function () {
		//Enable iCheck plugin for checkboxes
		//iCheck for checkbox and radio inputs
		$('.mailbox-messages input[type="checkbox"]').iCheck({
			checkboxClass: 'icheckbox_flat-blue',
			radioClass: 'iradio_flat-blue'
		});

		//Enable check and uncheck all functionality
		$(".checkbox-toggle").click(function () {
			var clicks = $(this).data('clicks');
			if (clicks) {
				//Uncheck all checkboxes
				$(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
				$(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
			} else {
				//Check all checkboxes
				$(".mailbox-messages input[type='checkbox']").iCheck("check");
				$(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
			}
			$(this).data("clicks", !clicks);
		});

		//Handle starring for glyphicon and font awesome
		$(".mailbox-star").click(function (e) {
			e.preventDefault();
			//detect type
			var $this = $(this).find("a > i");
			var glyph = $this.hasClass("glyphicon");
			var fa = $this.hasClass("fa");

			//Switch states
			if (glyph) {
				$this.toggleClass("glyphicon-star");
				$this.toggleClass("glyphicon-star-empty");
			}

			if (fa) {
				$this.toggleClass("fa-star");
				$this.toggleClass("fa-star-o");
			}
		});
	});
</script>

</body>
</html>