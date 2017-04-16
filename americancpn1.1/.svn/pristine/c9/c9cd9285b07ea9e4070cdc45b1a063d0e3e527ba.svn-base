<div class="content-wrapper">
    <section class="content-header">
        <h1>
            line
            <small>add</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url() . 'administrator'; ?>"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="<?php echo base_url() . 'administrator/line/lines'; ?>">lines</a></li>
            <li class="active">add</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <form action="<?php echo base_url() . 'administrator/line/addLine'; ?>" method="post"
                  id="line">
                <div class="col-md-6">
                    <div class="box box-danger">
                        <div class="box-header">
                            <h3 class="box-title">line information:</h3>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <?php
                                    echo form_label('line owner name:');
                                    $owners = array($this->session->userdata(USER_ID) => $this->session->userdata(NAME));
                                    echo form_dropdown('user_id', $owners, $this->session->userdata(USER_ID), array('class' => 'form-control select2'))
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <?php echo form_label('credit card type:');
                                    echo form_dropdown('type', $type_ids, $this->session->userdata(USER_ID), array('class' => 'form-control select2', 'id' => 'type'))
                                    ?>
                                </div>
                                <div class="form-group col-md-5">
                                    <?php echo form_label('card name:');
                                    echo form_dropdown('name', 'your card name', '', array('class' => 'form-control select2', 'id' => 'name'))
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <?php
                                    echo form_label('issuer bank name:', 'bank', array('class' => 'control-label'));
                                    echo '<div class="input-group">';
                                    echo '<div class="input-group-addon"><i class="fa fa-phone"></i></div>';
                                    echo form_input(array('class' => 'form-control', 'id' => 'bank', 'name' => 'bank'));
                                    echo '</div>';
                                    ?>
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="phone" class="control-label">bank phone number:</label>

                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input type="text" class="form-control"
                                               id="phone" name="phone"
                                               data-inputmask='"mask": "(999) 999-9999"'
                                               data-mask/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-8">
                                    <?php echo form_label('bank site:', 'url', array('class' => 'control-label')) ?>

                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input type="text" class="form-control" id="url" name="url"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <label class="control-label" for="lmt">credit card limit:</label>

                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input type="text" class="form-control" id="lmt" name="lmt"/>
                                    </div>
                                </div>
                                <div class="form-group col-md-5">
                                    <label class="control-label" for="balance">credit card balance:</label>

                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input type="text" class="form-control" id="balance" name="balance"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <label class="control-label" for="open">card opened date:</label>

                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input type="text" class="form-control" id="open" name="open"/>
                                    </div>
                                </div>
                                <div class="form-group col-md-5">
                                    <label class="control-label" for="statement">monthly statement date:</label>

                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input type="text" class="form-control" id="statement" name="statement"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-danger">
                        <div class="box-header">
                            <h3 class="box-title">line preferences:</h3>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <label class="control-label" for="charge">line cost:</label>

                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input type="text" class="form-control" id="charge" name="charge"
                                               data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                                    </div>
                                </div>
                                <div class="form-group col-md-5">
                                    <?php echo form_label('payment type:', 'payment', array('class' => 'control-label'));
                                    echo form_dropdown('payment', array('square cash', 'paypal', 'cash'), $this->session->userdata(USER_ID), array('class' => 'form-control select2'))
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <?php echo form_label('maximus users:', 'max', array('class' => 'control-label'));
                                    echo form_dropdown('max', array(1, 2, 3, 4, 5), $this->session->userdata(USER_ID), array('class' => 'form-control select2'))
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <?php echo form_label('activate line:', 'activate', array('class' => 'control-label'));
                                    echo form_dropdown('activate', array(1 => 'activate', 0 => 'activate later'), $this->session->userdata(USER_ID), array('class' => 'form-control select2'))
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
            </form>
        </div>
    </section>
</div>
<script>
    $(".select2").select2();
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    $("[data-mask]").inputmask();
    $("#type").change(function () {
        $.get("<?php echo base_url() . 'administrator/line/getCardNames'; ?>", {
            type: $("#type").find("option:selected").text()
        }).done(function (data) {
            var data1 = $.parseJSON(data);
            var names = "";
            $.each(data1, function (id, name) {
                names += "<option value='" + id + "'>" + name + "</option>";
            });
            $("#name").html(names);
            $(".select2").select2();
        })
    });
    $("#line").bootstrapValidator({
        /*http://www.jqueryscript.net/form/Powerful-Form-Validation-Plugin-For-jQuery-Bootstrap-3.html*/
        message: 'This value is not valid',
        fields: {
            bank: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and can\'t be empty'
                    }
                }
            },
            url: {
                validators: {
                    stringLength: {
                        min: 0
                    },
                    uri: {
                        message: 'The url is required and can\'t be empty'
                    }
                }
            }
        }
    });

</script>


