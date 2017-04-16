$(function() {
	//original field values
	var field_values = {
		//id        :  value
		'username' : 'username',
		'password' : 'password',
		'cpassword' : 'password',
		'firstname' : 'first name',
		'lastname' : 'last name',
		'email' : 'email address',
		'domainname' : 'Domain Name',
		'cdomainname' : 'Confirm Domain Name',
		'gender' : 'Gender',
		'city' : 'City',
		'state' : 'State',
		'zip' : 'Zip',
		'address' : 'Address',
		'ssn' : 'Social Security Number',
		'dob' : 'Date of Birth',
		
	};

	//inputfocus
	$('input#username').inputfocus({
		value : field_values['username']
	});
	$('input#password').inputfocus({
		value : field_values['password']
	});
	$('input#cpassword').inputfocus({
		value : field_values['cpassword']
	});
	$('input#lastname').inputfocus({
		value : field_values['lastname']
	});
	$('input#firstname').inputfocus({
		value : field_values['firstname']
	});
	$('input#email').inputfocus({
		value : field_values['email']
	});
	$('input#domainname').inputfocus({
		value : field_values['domainname']
	});
	$('input#cdomainname').inputfocus({
		value : field_values['cdomainname']
	});
	
	$('input#gender').inputfocus({
		value : field_values['gender']
	});
	$('input#city').inputfocus({
		value : field_values['city']
	});
	$('input#state').inputfocus({
		value : field_values['state']
	});
	$('input#zip').inputfocus({
		value : field_values['zip']
	});
	$('input#address').inputfocus({
		value : field_values['address']
	});
	$('input#ssn').inputfocus({
		value : field_values['ssn']
	});
	$('input#dob').inputfocus({
		value : field_values['dob']
	});

	//reset progress bar
	$('#progress').css('width', '0');
	$('#progress_text').html('0% Complete');

	//first_step
	$('form').submit(function() {
		return false;
	});
	$('#submit_first').click(function() {
		//remove classes
		$('#first_step input').removeClass('error').removeClass('valid');

		//ckeck if inputs aren't empty
		var fields = $('#first_step input[type=text], #first_step input[type=password]');
		var error = 0;
		fields.each(function() {
			var value = $(this).val();
			if (value.length < 4 || value == field_values[$(this).attr('id')]) {
				$(this).addClass('error');
				$(this).effect("shake", {
					times : 3
				}, 50);

				error++;
			} else {
				$(this).addClass('valid');
			}
		});

		if ($("input#username").val() != '') {
			var urlval1 = $("input#url").val();
			dataString = 'username=' + $("input#username").val();
			var test = 0;
			$.ajax({
				type : "POST",
				url : urlval1 + 'register/checkUsername',
				data : dataString,
				async : false,
				success : function(result) {
					if (result == 1) {
						$('#first_step input[type=text]').each(function() {
							$(this).removeClass('valid').addClass('error');
							$(this).effect("shake", {
								times : 3
							}, 50);
							error++;
						});

					}

				}
			});

		}

		if (!error) {
			if ($('#password').val() != $('#cpassword').val()) {
				$('#first_step input[type=password]').each(function() {
					$(this).removeClass('valid').addClass('error');
					$(this).effect("shake", {
						times : 3
					}, 50);
				});
				return false;
			} else {
				//update progress bar
				$('#progress_text').html('33% Complete');
				$('#progress').css('width', '113px');

				//slide steps
				$('#first_step').slideUp();
				$('#second_step').slideDown();
			}
		} else
			return false;
	});

	$('#submit_second').click(function() {
		//remove classes
		$('#second_step input').removeClass('error').removeClass('valid');

		var ssnPattern = /^\d{3}-\d{2}-\d{4}$/;
		var zipPattern = /^\d{3,10}$/;
		var dobPattern = /^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/;
		var fields = $('#second_step input[type=text], #second_step select');
		var error = 0;
		fields.each(function() {
			var value = $(this).val();
			if (value.length < 3 || value == field_values[$(this).attr('id')] || ($(this).attr('id') == 'ssn' && !ssnPattern.test(value) ) || ($(this).attr('id') == 'zip' && !zipPattern.test(value) )  || ($(this).attr('id') == 'dob' && !dobPattern.test(value) )) {
				$(this).addClass('error');
				$(this).effect("shake", {
					times : 3
				}, 50);

				error++;
			} else {
				$(this).addClass('valid');
			}
		});

		if (!error) {
			//update progress bar
			$('#progress_text').html('66% Complete');
			$('#progress').css('width', '226px');

			//slide steps
			$('#second_step').slideUp();
			$('#third_step').slideDown();
		} else
			return false;

	});

	$('#submit_third').click(function() {
		//remove classes
		$('#third_step input').removeClass('error').removeClass('valid');

		var domainPattern = /^[a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}$/;
		var fields = $('#third_step input[type=text]');
		var error = 0;
		fields.each(function() {
			var value = $(this).val();
			if (value.length < 5 || value == field_values[$(this).attr('id')] || ($(this).attr('id') == 'domainname' && !domainPattern.test(value) )) {
				$(this).addClass('error');
				$(this).effect("shake", {
					times : 3
				}, 50);

				error++;
			} else {
				$(this).addClass('valid');
			}
		});

		if (!error) {
			if ($('#domainname').val() != $('#cdomainname').val()) {
				$('#third_step input[type=text]').each(function() {
					$(this).removeClass('valid').addClass('error');
					$(this).effect("shake", {
						times : 3
					}, 50);
				});
				return false;
			} else {

				$('#progress_text').html('100% Complete');
				$('#progress').css('width', '339px');

				//prepare the fourth step
				var fields = new Array($('#username').val(), 
                                                        $('#password').val(), 
                                                        $('#gender').val(), 
                                                        $('#state').val(), 
                                                        $('#city').val(), 
                                                        $('#zip').val(), 
                                                        $('#address').val(), 
                                                        $('#ssn').val(),
                                                        $('#dob').val(),
                                                        $('#domainname').val());
				var tr = $('#fourth_step tr');
				tr.each(function() {
					//alert( fields[$(this).index()] )
					$(this).children('td:nth-child(2)').html(fields[$(this).index()]);
				});

				//slide steps
				$('#third_step').slideUp();
				$('#fourth_step').slideDown();
			}
		} else
			return false;

	});

	$('#submit_fourthsdfds').click(function() {
		//update progress bar
		$('#progress_text').html('100% Complete');
		$('#progress').css('width', '339px');

		//prepare the fourth step
		var fields = new Array($('#username').val(), $('#password').val(), $('#email').val(), $('#firstname').val() + ' ' + $('#lastname').val(), $('#age').val(), $('#gender').val(), $('#country').val(), $('#domainname').val());
		var tr = $('#fourth_step tr');
		tr.each(function() {
			//alert( fields[$(this).index()] )
			$(this).children('td:nth-child(2)').html(fields[$(this).index()]);
		});

		//slide steps
		$('#fourth_step').slideUp();
		$('#fifth_step').slideDown();
	});

	$('#submit_fourth').click(function() {
		
		if ($('#agree').attr('checked')) {
			var urlval = $("input#url").val();
			var aemail = $("input#aemail").val();

			dataString = $("#detailinfo").serialize();

			$.ajax({
				type : "POST",
				url : urlval + 'register/detailInfo',
				data : dataString,

				success : function() {
					alert('Please check your email address ('+aemail+') for your Website Detail');
					window.location.href = urlval + 'member';
				}
			});
		}

		else{
			$('#fourth_step input[type=checkbox]').each(function() {
                $(this).removeClass('valid').addClass('error');
                $(this).effect("shake", {
                    times: 3
                }, 50);
            });
            return false;	
		}


	});
	

	
	
	//referrer form validation
	$('#submit_1').click(function() {
		//remove classes
		$('#first_st input').removeClass('error').removeClass('valid');

		//ckeck if inputs aren't empty
		var fields = $('#first_st input[type=text], #first_st input[type=password]');
		var error = 0;
		fields.each(function() {
			var value = $(this).val();
			if (value.length < 4 || value == field_values[$(this).attr('id')]) {
				$(this).addClass('error');
				$(this).effect("shake", {
					times : 3
				}, 50);

				error++;
			} else {
				$(this).addClass('valid');
			}
		});

		if ($("input#username").val() != '') {
			var urlval1 = $("input#url").val();
			dataString = 'username=' + $("input#username").val();
			var test = 0;
			$.ajax({
				type : "POST",
				url : urlval1 + 'register/checkUsername',
				data : dataString,
				async : false,
				success : function(result) {
					if (result == 1) {
						$('#first_st input[type=text]').each(function() {
							$(this).removeClass('valid').addClass('error');
							$(this).effect("shake", {
								times : 3
							}, 50);
							error++;
						});

					}

				}
			});

		}

		if (!error) {
			if ($('#password').val() != $('#cpassword').val()) {
				$('#first_st input[type=password]').each(function() {
					$(this).removeClass('valid').addClass('error');
					$(this).effect("shake", {
						times : 3
					}, 50);
				});
				return false;
			} else {
				//update progress bar
				$('#progress_text').html('50% Complete');
				$('#progress').css('width', '170px');

				//slide steps
				$('#first_st').slideUp();
				$('#second_st').slideDown();
			}
		} else
			return false;
	});
	
	$('#submit_2').click(function() {
		//remove classes
		$('#second_st input').removeClass('error').removeClass('valid');

		var ssnPattern = /^\d{3}-\d{2}-\d{4}$/;
		var zipPattern = /^\d{3,10}$/;
		var dobPattern = /^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/;
		var fields = $('#second_st input[type=text], #second_st select');
		var error = 0;
		fields.each(function() {
			var value = $(this).val();
			if (value.length < 3 || value == field_values[$(this).attr('id')] || ($(this).attr('id') == 'ssn' && !ssnPattern.test(value) ) || ($(this).attr('id') == 'zip' && !zipPattern.test(value) )  || ($(this).attr('id') == 'dob' && !dobPattern.test(value) )) {
				$(this).addClass('error');
				$(this).effect("shake", {
					times : 3
				}, 50);

				error++;
			} else {
				$(this).addClass('valid');
			}
		});

		if (!error) {
			$('#progress_text').html('100% Complete');
				$('#progress').css('width', '339px');

				//prepare the fourth step
				var fields = new Array($('#username').val(), 
                                                        $('#password').val(), 
                                                        $('#gender').val(), 
                                                        $('#state').val(), 
                                                        $('#city').val(), 
                                                        $('#zip').val(), 
                                                        $('#address').val(), 
                                                        $('#ssn').val(),
                                                        $('#dob').val());
                                                        // $('#domainname').val()
				var tr = $('#fourth_st tr');
				tr.each(function() {
					//alert( fields[$(this).index()] )
					$(this).children('td:nth-child(2)').html(fields[$(this).index()]);
				});

				//slide steps
				$('#second_st').slideUp();
				$('#fourth_st').slideDown();
		} else
			return false;

	});
	
	
	$('#submit_4').click(function() {
		
		if ($('#agree').attr('checked')) {
			var urlval = $("input#url").val();
			var aemail = $("input#aemail").val();

			dataString = $("#detailinfo").serialize();

			$.ajax({
				type : "POST",
				url : urlval + 'register/detailInfo',
				data : dataString,

				success : function() {
					alert('Please check your email address ('+aemail+') for your Website Detail');
					window.location.href = urlval + 'member';
				}
			});
		}

		else{
			$('#fourth_st input[type=checkbox]').each(function() {
                $(this).removeClass('valid').addClass('error');
                $(this).effect("shake", {
                    times: 3
                }, 50);
            });
            return false;	
		}


	});

	
    

});
