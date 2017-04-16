<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>

<style>
    /* option:checked:before { content: "✓" } */
    option:before { content: "☐ " }
    option:checked:before { content: "☑ " }
</style>

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
                <li><a href="<?php echo base_url('administrator/mail');?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Mailbox</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo base_url('administrator/mail');?>" class="btn btn-primary btn-block margin-bottom">Back to Inbox</a>
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Folders</h3>
                            <div class='box-tools'>
                                <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
                            </div>
                        </div>
                        <div class="box-body no-padding">
                            <ul class="nav nav-pills nav-stacked">
                                <li ><a href="<?php echo base_url('administrator/mail');?>"><i class="fa fa-inbox"></i> Inbox <span class="label label-primary pull-right"><?php if(!empty($count_receivedEmails)){echo $count_receivedEmails ;}?></span></a></li>
                                <li ><a href="<?php echo base_url('administrator/mail/sent_mail');?>"><i class="fa fa-envelope-o"></i> Sent<span class="label label-primary pull-right"></span></a></li>
                                <li><a href="<?php echo base_url('administrator/mail/trash_mail');?>"><i class="fa fa-trash-o"></i> Trash</a></li>

                            </ul>
                        </div><!-- /.box-body -->
                    </div><!-- /. box -->

                </div><!-- /.col -->
                <div class="col-md-9">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Compose New Message</h3>
                        </div><!-- /.box-header -->

                        <?php $attributes = array('class' => 'formular', 'id' => 'form');
                        echo form_open_multipart(ADMIN_PATH . 'mail/sendEmails', $attributes);
                        ?>
                        <div class="box-body">

                            <label class="col-sm-2 control-label">Send Email To </label>

                            <div class="form-group">

                                <?php
                                if(!empty($roles)):

                                    foreach($roles as $key=>$val):?>
                                        <div class="col-sm-1">

                                            <?php
                                            $data = array(
                                                'name'        => 'roleid[]',
                                                'id'          => $val->name,
                                                'value'       => $val->id,

                                            );
                                            echo form_radio($data); ?>
                                            <label for="User" class=""><?php echo $val->label;?></label>
                                        </div>

                                        <script >
                                            $('input[id^="<?php echo $val->name ;?>"]').not('#checkbox_all').click(function () {
                                                $('#checkbox_all').prop('checked', false);
                                                var roleid = $(this).val();
                                                var location_url = '<?php echo base_url('administrator/mail/compose') ?>' + '/' + roleid;

                                                $.ajax ({
                                                    type: "POST",
                                                    url: location_url,
                                                    data: ({role_id:roleid}),
                                                    success: function(roleid) {
                                                        $('#changes').html($(roleid).find('#changes *'));
                                                        console.log(roleid);

                                                    }

                                                });

                                            });

                                        </script>

                                    <?php
                                    endforeach;


                                endif;
                                ?>
                            </div>



                            <div class="form-group">

                                <div class="col-md-6" id = "to">
                                    <label class="">To (*):</label>

                                    <select id = "changes" name="toemails[]" class="form-control"  placeholder="Select Email IDs" multiple data-rel="chosen">
                                        <?php
                                        if(!empty($users)){
                                            foreach ($users as $key => $values) {?>
                                                <option value="<?php echo $values->email;?>"><?php echo $values->first_name;?> </option>
                                            <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <input id="mybutton" type="button" onclick="changeText()" value="Email To New User" class="btn bg-maroon margin" />

                                <div class="col-xs-6" id = "toggle"  style="display: none">
                                    <label>Send Email To New User (*):</label>
                                    <input type="text" name ="to_new_user[]" class="form-control" placeholder="Enter Email Address">
                                </div>
                                <script>
                                    jQuery(function () {
                                        $('#mybutton').click(function () {
                                            $("#toggle").toggle("hide");
                                            $("#to").toggle("slide");
                                        });
                                    })

                                    function changeText() // no ';' here
                                    {
                                        var elem = document.getElementById("mybutton");
                                        if (elem.value=="Email To Existing Users") elem.value = "Email To New User";
                                        else elem.value = "Email To Existing Users";
                                    }


                                </script>




                            </div>





                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label>Subject (*):</label>
                                    <input type="text" class="form-control"
                                           name="subject" required >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label>Message:</label>
                                    <div class='box-body pad'>
                                        <form>
										<textarea id="editor1" name="msg"
                                                  rows="10" cols="80">

										</textarea>
                                        </form>
                                    </div>

                                    <?php
                                    $data = array('name' => 'submit', 'id' => 'submit', 'value' =>
                                        'Send Emails', 'class' => 'btn btn-primary', );
                                    echo form_submit($data);
                                    ?>
                                </div>
                            </div>





                        </div>

                        <?php echo form_close(); ?>

                    </div><!-- /. box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->


</div><!-- ./wrapper -->

<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-
wysihtml5.all.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
    });
</script>
</body>
</html>