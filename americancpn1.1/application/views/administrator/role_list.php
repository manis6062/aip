<link href="<?php echo base_url(); ?>backend/css/americacpn.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() . ADMIN_JS; ?>bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
<div class="content-wrapper">
	<section class="content-header">
		<a class="btn btn-primary" href="<?php echo base_url() . 'administrator/role/addRole'; ?>">Add Role</a>
	</section>
	<section class="content">
		<div class="col-md-6">
			<div class="box">
				<div class="box-header">
					<h4>
						Manage Roles
						<small><?php echo $title; ?></small>
					</h4>
				</div>
				<div class="box-body">
					<table id="roles" class="table table-bordered table-striped">
						<thead>
						<tr role="row">
							<th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
								style="width: 180px;" aria-label="Rendering engine: activate to sort column ascending"
								aria-sort="descending">id
							</th>
							<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
								style="width: 229px;" aria-label="Browser: activate to sort column ascending">value
							</th>
							<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
								style="width: 194px;" aria-label="Platform(s): activate to sort column ascending">label
							</th>
							<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
								style="width: 154px;" aria-label="Engine version: activate to sort column ascending">
								action
							</th>
							<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
								style="width: 111px;" aria-label="CSS grade: activate to sort column ascending">public
							</th>
						</tr>
						</thead>
						<tbody>
						<?php
							if ($data != 0 && count($data) > 0) {
								foreach ($data as $key => $role) {
									?>
									<tr role="row" class="odd">
										<td class="sorting_1"><?php echo $role->id; ?></td>
										<td><a href="" data-type="text" id="value"
											   data-pk=<?php echo $role->id; ?>> <?php echo $role->value; ?> </a></td>
										<td><a href="" data-type="text" id="label"
											   data-pk=<?php echo $role->id; ?>> <?php echo $role->label; ?> </a></td>
										<td>
											<button type="button"
													onclick="deleteRole(<?php echo $role->id ?>)">
												Delete
											</button>
										</td>
										<td><a href="" data-type="select" id="public"
											   data-value="<?php echo $role->public ?>"
											   data-source="[ {value: 0, text: 'No'}, {value: 1, text: 'Yes'}]"
											   data-pk=<?php echo $role->id; ?>></a>
										</td>
									</tr>
								<?php }
							} ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
</div>

<script src="<?php echo base_url(); ?>backend/js/jQuery-2.1.4.min.js"></script>
<script src="<?php echo base_url(); ?>backend/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() . ADMIN_JS; ?>bootstrap3-editable/js/bootstrap-editable.js"></script>
<script src="<?php echo base_url() . ADMIN_JS; ?>moments.js"></script>

<script>
	$.fn.editable.defaults.mode = 'inline';
	$('#roles a').editable({
		url: '<?php echo base_url() . 'administrator/post'; ?>',
		params: function (params) {
			params.table = 'role';
			return params;
		},
		success: function (response, newValue) {
			if (response.status == 'error') return response.msg;
		}
	});
	function deleteRole(id) {
		var location = '<?php echo base_url(ADMIN_PATH.'role/deleteRole');?>' + '/' + id;
		window.location.href = location;
	}

</script>








