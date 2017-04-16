
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script>
    $(function () {
        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-100:+0"

        });
    });
</script>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            User<small>Add</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url() . 'administrator'; ?>"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="<?php echo base_url() . 'administrator/user'; ?>">Users</a></li>
            <li class="active">add</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <form action="<?php echo base_url() . 'administrator/user/addUser'; ?>" method="post"
                  id="user">
                <div class="col-md-6">
                    <div class="box box-danger">
                        <div class="box-header">
                            <div class="box-body">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <?php
                                        echo form_label('Email Address:', 'email', array('class' => 'control-label'));
                                        echo '<div class="input-group">';
                                        echo '<div class="input-group-addon"><i class="fa fa-envelope"></i></div>';
                                        echo form_input(array('class' => 'form-control', 'id' => 'email', 'name' => 'email', 'autofocus' => 'true'));
                                        echo '</div>';
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <?php
                                        echo form_label('Password:', 'password', array('class' => 'control-label'));
                                        echo '<div class="input-group">';
                                        echo '<div class="input-group-addon"><i class="fa fa-phone"></i></div>';
                                        echo form_input(array('class' => 'form-control', 'id' => 'password', 'name' => 'password', 'type' => "password"));
                                        echo '</div>';
                                        ?>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <?php
                                        echo form_label('Re-enter Password:');
                                        echo form_input(array('class' => 'form-control', 'id' => 'rePassword', 'name' => 'rePassword', 'type' => "password"));
                                        ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-5">
                                        <?php
                                        echo form_label('First Name:');
                                        echo form_input(array('class' => 'form-control', 'id' => 'firstName', 'name' => 'firstName'));
                                        ?>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <?php
                                        echo form_label('MI:');
                                        echo form_input(array('class' => 'form-control', 'id' => 'mi', 'name' => 'mi'));
                                        ?>
                                    </div>

                                    <div class="form-group col-md-5">
                                        <?php
                                        echo form_label('Last Name:');
                                        echo form_input(array('class' => 'form-control', 'id' => 'lastName', 'name' => 'lastName'));
                                        ?>
                                    </div>

                                    <div class="form-group col-md-5">
                                        <label for="phone" class="control-label">Phone number:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                            <input type="text" class="form-control"
                                                   id="phone" name="phone"
                                                   data-inputmask='"mask": "(999) 999-9999"'
                                                   data-mask/>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="fax" class="control-label">Fax number:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-fax"></i></div>
                                            <input type="text" class="form-control"
                                                   id="fax" name="fax"
                                                   data-inputmask='"mask": "(999) 999-9999"'
                                                   data-mask/>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <?php echo form_label('Choose Role:', 'role', array('class' => 'control-label')) ?>
                                    <?php
                                    if (!empty($roles)):
                                        foreach ($roles as $key => $val):?>
                                            <input type="radio"
                                                   id="checker_<?php echo $val->name; ?>"
                                                   name="roleId" value="<?php echo $val->id; ?>">
                                            <label for="checker_<?php echo $val->name; ?>"
                                                   class=""><?php echo $val->label; ?></label>
                                        <?php
                                        endforeach;
                                    endif;
                                    ?>

                                    <div class="boxer broker referrer owner client form-group col-md-8">
                                        <?php
                                        echo form_label('Broker:');
                                        echo form_dropdown('brokerId', $brokers, '', array('class' => 'form-control select2', 'id' => 'brokerId', 'name' => 'brokerId', 'style' => 'width:400px'));
                                        ?>
                                    </div>
                                    <div class="boxer client form-group col-md-8 ">
                                        <label for="ssn" class="control-label">SSN:</label>

                                        <div class="input-group ">
                                            <input type="text" class="form-control"
                                                   id="ssn" name="ssn"
                                                   data-inputmask='"mask": "(999) 999-9999"'
                                                   data-mask/>
                                        </div>
                                    </div>
                                    <div class="boxer client form-group col-md-8 ">
                                        <label for="dob" class="control-label">Date Of Birth:</label>

                                        <div class='input-group date'>
                                            <input type='text' class="form-control" id='datepicker'/>
                                    <span class="input-group-addon">
                                       <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                        </div>
                                    </div>

                                    <div class="boxer broker form-group col-md-8">
                                        <?php
                                        echo form_label('Website:');
                                        echo form_input(array('class' => 'form-control', 'id' => 'site', 'name' => 'site'));
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <div class="input-group">
                                              <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary btn-flat">add</button>
                                              </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
<script>
    $(".select2").select2();
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    $("[data-mask]").inputmask();
    $("#user").bootstrapValidator({
        message: 'This value is not valid',
        fields: {
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and can\'t be empty'
                    }
                }
            }, roleId: {
                validators: {
                    notEmpty: {
                        message: 'Please select one of the role '
                    }
                }
            }, email: {
                validators: {
                    notEmpty: {
                        message: 'Valid email is required'
                    },
                    emailAddress: {
                        message: 'Enter valid email address'
                    }
                }
            }, firstName: {
                validators: {
                    notEmpty: {
                        message: 'First Name is required'
                    }
                }
            }, lastName: {
                validators: {
                    notEmpty: {
                        message: 'Last Name is required'
                    }
                }
            }, phone: {
                validators: {
                    notEmpty: {
                        message: 'Phone no. is required'
                    }
                }
            }, rePassword: {
                validators: {
                    notEmpty: {
                        message: 'Please re-type password'
                    },
                    identical: {
                        field: 'password',
                        message: 'Passwords do not match!'
                    }
                }
            }, brokerId: {
                validators: {
                    notEmpty: {
                        message: 'valid email is required'
                    }
                }
            }
        }

    });

</script>
