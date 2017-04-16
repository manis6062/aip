

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
        <?php echo $this->session->userdata(NAME); ?>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url('administrator/mail');?>"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Inbox</li>
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
				<li class="active" ><a href="<?php echo base_url('administrator/mail');?>"><i class="fa fa-inbox"></i> Inbox <span class="label label-primary pull-right"><?php if(!empty($count_receivedEmails)){echo $count_receivedEmails ;}?></span></a></li>
				<li ><a href="<?php echo base_url('administrator/mail/sent_mail');?>"><i class="fa fa-envelope-o"></i> Sent<span class="label label-primary pull-right"></span></a></li>
				<li><a href="<?php echo base_url('administrator/mail/trash_mail');?>"><i class="fa fa-trash-o"></i> Trash</a></li>
			</ul>
		</div><!-- /.box-body -->
	</div><!-- /. box -->
</div><!-- /.col -->
<div class="col-md-9">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Inbox</h3>
			<div class="box-tools pull-right">
<!--				<div class="has-feedback">-->
<!--					<input type="text" class="form-control input-sm" placeholder="Search Mail"/>-->
<!--					<span class="glyphicon glyphicon-search form-control-feedback"></span>-->
<!--				</div>-->
			</div><!-- /.box-tools -->
		</div><!-- /.box-header -->
		<div class="box-body no-padding">
			<div class="mailbox-controls">
				<!-- Check all button -->
<!--				<button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>-->
				<div class="btn-group">
<!--					<button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>-->

				</div><!-- /.btn-group -->
				<a href="<?php echo base_url('administrator/mail');?> " <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button></a>
				<div class="pull-right">
					1-50/200
					<div class="btn-group">
						<button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
						<button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
					</div><!-- /.btn-group -->
				</div><!-- /.pull-right -->
			</div>
			<div class="table-responsive mailbox-messages">
				<table class="table table-hover table-striped">
					<tbody>

					<form method="post" action="<?php echo base_url('administrator/mail/deleteMultiple')?>">

					<?php
					if(!empty($receivedEmails)){
                        $count = 1 ;
					foreach ($receivedEmails as $values) {?>
					<tr>
                        <td><?php echo $count++ ?> </td>
<!--						<td><input type="checkbox" name = "checkbox[]" value="--><?php //echo $values->id ?><!--"/></td>-->
						<td class="mailbox-name"><a href="<?php echo base_url('administrator/mail/read_mail'). '/' .$values->id?>"><?php echo $values->receiver ?></a></td>
						<td class="mailbox-subject"><b><?php echo $values->subject ?></b> - <?php echo (strlen($values->msg) >= 10) ?>...</td>
						<td class="mailbox-date"><?php echo $values->date ?></td>
						<td><a href="<?php echo base_url('administrator/mail/deleteFromInbox') . '/' .$values->id . '/' . $values->receiver_id ?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a></td>

					</tr>
                                <?php }}?>
						<div class="mailbox-controls">
<!--				    <input type="checkbox"  id="select-all">-->
<!--					<button type="submit" class="btn btn-default btn-sm" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></button>-->
						</div>
							</form>
					</tbody>
				</table><!-- /.table -->
			</div><!-- /.mail-box-messages -->
		</div><!-- /.box-body -->
		<div class="box-footer no-padding">
			<div class="mailbox-controls">
				<!-- Check all button -->

				<div class="btn-group">

					<a href="<?php echo base_url('administrator/mail')?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Back"><i class="fa fa-chevron-left"></i></a>

				</div><!-- /.btn-group -->
				<button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
				<div class="pull-right">
					1-50/200
					<div class="btn-group">
						<button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
						<button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
					</div><!-- /.btn-group -->
				</div><!-- /.pull-right -->
			</div>
		</div>
	</div><!-- /. box -->
</div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->




<!--<script src = "http://code.jquery.com/jquery-1.11.3.min.js"></script>-->

<!-- Page Script -->
<script language='JavaScript'>
	$(document).ready(function(){
		$('#select-all').click(function(event) {
			if(this.checked) {
				// Iterate each checkbox
				$(':checkbox').each(function() {
					this.checked = true;
				});
			}
			else {
				// Iterate each checkbox
				$(':checkbox').each(function() {
					this.checked = false;
				});
			}
		});
	});
</script>";