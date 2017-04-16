<style>
	.col1 {
		width: 27%;;
	}
</style>
<script type="text/javascript">
	jQuery(function ($) {
		$("#card_exp_date").mask("99/9999", {placeholder: "MM/YYYY"});
		$("#card_open_date").mask("99/9999", {placeholder: "MM/YYYY"});
		$("#card_close_date").mask("99", {placeholder: "DD"});
		$("#cphone").mask("(999) 999-9999", {placeholder: " "});
		$(document).ready(function () {
			$("#balance , #credit_limit , #no_auth_user , #charge").keydown(function (e) {
				// Allow: backspace, delete, tab, escape, enter and .
				if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
						// Allow: Ctrl+A
					(e.keyCode == 65 && e.ctrlKey === true) ||
						// Allow: home, end, left, right, down, up
					(e.keyCode >= 35 && e.keyCode <= 40)) {
					// let it happen, don't do anything
					return;
				}
				// Ensure that it is a number and stop the keypress
				if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
					e.preventDefault();
				}
			});
		});

	});


</script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<!-- Load jQuery UI Main JS  -->
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script>
	$(function () {
		$("#datepicker").datepicker({
			changeMonth: true,
			changeYear: true,
			showButtonPanel: true,
			yearRange: "-100:+0",
			dateFormat: 'mm/yy'
		}).focus(function () {
			var thisCalendar = $(this);
			$('.ui-datepicker-calendar').detach();
			$('.ui-datepicker-close').click(function () {
				var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
				var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
				thisCalendar.datepicker('setDate', new Date(year, month, 1));
			});
		});
	});
</script>
<div class="content-wrapper">
	<section class="content">
		<section class="col-md-4">
			<div class="box">
				<section class="content-header">
					<h4>
						<?php echo $title ?>
					</h4>
				</section>
				<div class="box-body no-padding">
					<?php
						if (validation_errors()) {
							?>
							<div class="message error"></div>
						<?php } ?>
					<?php $attributes = array('class' => 'formular');
						echo form_open(ADMIN_PATH . 'tradelineowner/tradelineowner_addCardAction');
					?>
					<table class="table">
						<tr>
							<td>
								<label>card type</label>
							</td>
							<td>
								<div id="dropdown">
									<?php
										if ($card_lists) {
											foreach ($card_lists as $cards) {
												$drop[$cards->type] = $cards->type;
											}
											$dropped = array_merge(array('' => 'Select Your Card Type'), $drop, array('Others' => 'Others'));
											echo form_dropdown('card_name', $dropped, set_value('card_name'), 'class="form-control"');
											echo form_error('card_name');
										}
									?>
								</div>
							</td>
							<td>
								<div id="Card" style="display: none">
									<?php $data = array('name' => 'new_card', 'placeholder' => 'Enter Credit Card Type', 'value' => set_value('new_card'), 'class' => 'form-control',);
										echo form_input($data);
										echo form_error('new_card');
									?>
								</div>
							</td>
						</tr>

						<tr>
							<td>
								<label>card name</label>
							</td>
							<td>

								<?php $data = array('name' => 'card_type', 'placeholder' => 'Enter Credit Card Name', 'id' => 'card_type', 'value' => set_value('card_type'), 'class' => 'form-control',);
									echo form_input($data);
								?>
							</td>
						</tr>
						<tr>
							<td>
								<label>issued bank</label>
							</td>
							<td>
								<?php $data = array('name' => 'bank', 'placeholder' => 'Enter Bank Name', 'id' => 'bank', 'value' => set_value('bank'), 'class' => 'form-control',);
									echo form_input($data);
									echo form_error('bank');
								?>
							</td>
						</tr>
						<tr>
							<td>
								<label>credit limit</label>
							</td>
							<td>
								<?php $data = array('name' => 'credit_limit', 'placeholder' => 'Enter Credit Limit', 'id' => 'credit_limit', 'value' => set_value('credit_limit'), 'class' => 'form-control',);
									echo form_input($data);
									echo form_error('credit_limit');
								?>
							</td>
						</tr>
						<tr>
							<td>
								<label>balance</label>
							</td>
							<td>
								<?php $data = array('name' => 'balance', 'placeholder' => 'Enter Balance', 'id' => 'balance', 'value' => set_value('balance'), 'class' => 'form-control',);
									echo form_input($data);
									echo form_error('balance');
								?>
							</td>
						</tr>
						<tr>
							<td><label># of authorized users </label></td>
							<td>
								<?php $data = array('name' => 'no_auth_user', 'placeholder' => 'Enter no. of authorized users', 'id' => 'no_auth_user', 'value' => set_value('no_auth_user'), 'class' => 'form-control',);
									echo form_input($data);
									echo form_error('no_auth_user');
								?>
							</td>
						</tr>
						<tr>
							<td><label>expiration date</label></td>
							<td>
								<?php
									$data = array('name' => 'card_exp_date', 'id' => 'card_exp_date', 'placeholder' => 'MM/YYYY', 'value' => set_value('card_exp_date'), 'class' => 'form-control',);
									echo form_input($data);
									echo form_error('card_exp_date');
								?>
							</td>
						</tr>
						<tr>
							<td>
								<label>opened date</label>
							</td>
							<td>
								<?php
									$data = array('name' => 'card_open_date', 'id' => 'datepicker', 'placeholder' => 'MM/YYYY', 'value' => set_value('card_open_date'), 'class' => 'form-control',);
									echo form_input($data);
									echo form_error('card_open_date');
								?>
							</td>
						</tr>
						<tr>
							<td>
								<label>closing day</label>
							</td>
							<td>
								<?php $options = array(
									'' => 'Select Closing Day',
									'1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10',
									'11' => '11', '12' => '12', '13' => '13', '14' => '14', '15' => '15', '16' => '16', '17' => '17', '18' => '18', '19' => '19', '20' => '20',
									'21' => '21', '22' => '22', '23' => '23', '24' => '24', '25' => '25', '26' => '26', '27' => '27', '28' => '28', '29' => '29', '30' => '30', '31' => '31');
									echo form_dropdown('card_close_date', $options, set_value('card_close_date'), 'class="form-control"');
									echo form_error('card_close_date');
								?>
						</tr>
						<tr>
							<td>
								<label>bank phone number</label>
							</td>
							<td>
								<?php $data = array('name' => 'cphone', 'placeholder' => 'Enter Bank Phone No.', 'id' => 'cphone', 'value' => set_value('cphone'), 'class' => 'form-control',);
									echo form_input($data);
									echo form_error('cphone');
								?>
							</td>
						</tr>
						<tr>
							<td><label>charge</label></td>
							<td>
								<?php $data = array('name' => 'charge', 'placeholder' => 'Enter charge amount', 'id' => 'cphone', 'value' => set_value('charge'), 'class' => 'form-control',);
									echo form_input($data);
									echo form_error('charge');
								?>
							</td>
						</tr>

						<tr>
							<td>
								<?php $attributes = array('class' => 'left',);
									echo form_label('Payment Type (*):', 'payment', $attributes);
								?>
							</td>
						</tr>
						<tr>
							<td><label>phone</label></td>
							<td>
								<?php
									if (!empty($photoRecord)) {
										$data = array('name' => 'phone', 'class' => 'medium', 'required' => 'required', 'id' => 'phone', 'value' => set_value('phone') == "" ? $photoRecord->tradeline_owner_phone : set_value('phone'),);
									} else {
										$data = array('name' => 'phone', 'class' => 'medium', 'required' => 'required', 'id' => 'phone', 'value' => set_value('phone'),);
									}
									echo form_input($data);
								?>
							</td>
						</tr>
						<tr>
							<td>
								<label>test</label>
							</td>
							<td>
								<input type="hidden" name="to_id" value="<?php echo $referralDetail->id ?>">
								<input type="hidden" name="referral_id" value="<?php echo $referralDetail->id ?>">
								<input type="hidden" name="user_id" value="<?php echo $referralDetail->id ?>">
								<?php
									$data = array('name' => 'submit', 'id' => 'submit', 'value' => 'Register', 'class' => 'btn btn-default',);
									echo form_submit($data);
									echo '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp';
								?>
								<a href="<?php echo site_url(ADMIN_PATH . 'tradelineowner/cardList'); ?>"
								   class="btn btn-default">Cancel</a>
							</td>
						</tr>
					</table>
					<?php echo form_close(); ?>
				</div>
			</div>
		</section>
</div>
<hr>
<script>
	$('#dropdown select[name = card_name]').change(function (e) {
		if ($('#dropdown select[name = card_name]').val() == 'Others') {
			$('#Card').show();
		} else {
			$('#Card').hide();
		}
	});
</script>
