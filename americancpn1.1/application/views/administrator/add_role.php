<div class="content-wrapper">
	<section class="content-header">
		<a class="btn btn-primary" href="<?php echo base_url() . 'administrator/role/listRole'; ?>">Go Back</a>
	</section>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'admin';?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url().'administrator/role/addRole';?>">Roles</a></li>
        <li class="active">Add Role</li>
    </ol>
	<section class="content">
		<div class="box">
			<?php $attributes = array('id' => 'login-form', 'class' => 'box-body');
				echo form_open(base_url() . 'administrator/role/addNewRole', $attributes);
			?>
			<div class="form-group">
				<div class="col-xs-3">
					<?php $data = array(
						'name' => 'value',
						'id' => 'value',
						'placeholder' => 'Enter Value',
						'value' => set_value('value'),
						'class' => 'form-control'
					);
						echo form_input($data);
						echo form_error('value');
					?>
				</div>
				<div class="col-xs-3">
					<?php
						$data = array(
							'name' => 'label',
							'id' => 'label',
							'placeholder' => 'Enter Label',
							'value' => set_value('label'),
							'class' => 'form-control',);
						echo form_input($data);
						echo form_error('label');
					?>
				</div>
				<div class="col-xs-3">
					<label>Public</label>
					<?php $data = array(
						'1' => 'Yes',
						'0' => 'No',
					);
						echo form_dropdown('public', $data, '1');
						echo form_error('label');
					?>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-4 col-sm-8">
						<?php
							$data = array(
								'name' => 'submit',
								'id' => 'submit',
								'value' => 'Submit',
								'class' => 'btn bg-purple margin'
							);
							echo form_submit($data);
						?>
					</div>
				</div>

				<?php echo form_close(); ?>
			</div>
	</section>
</div>



