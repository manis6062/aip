



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add  Banner

        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Title</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                Start creating your amazing application!
            </div><!-- /.box-body -->
            <div class="box-footer">
                Footer
            </div><!-- /.box-footer-->
        </div><!-- /.box -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<!----------------------------------Old Code--------------------------------------------------------!>

<!--<div id="content" class="span10">-->
<!--            <!-- content starts -->-->
<!--            <div class="row-fluid">-->
<!--                <div class="box span12">-->
<!--                    <div class="box-header well" data-original-title>-->
<!--                        <h2><i class="icon-edit"></i>Add New Banner</h2>-->
<!--                    </div>-->
<!--                    <div class="box-content">-->
<!--                                                --><?php
//                        if(validation_errors())
//                        {
//
//                            ?>
<!--                             <div class="message error">--><?php //echo validation_errors(); ?><!--</div>-->
<!--                            --><?php //} ?>
<!--                        --><?php
//                        if($error)
//                        {
//
//                            ?>
<!--                             <div class="message error">-->
<!--                             --><?php
//                            foreach ($error as $value) {
//                                echo $value;
//                            }
//                             ?>
<!--                             </div>-->
<!--                            --><?php //} ?>
<!--                         --><?php //$attributes = array('class' => 'formular', 'id' => 'form');
//                                echo form_open_multipart(ADMIN_PATH . 'banner/add', $attributes);
//                           ?>
<!--                    <table class="form">-->
<!--                        <tr>-->
<!--                            <td class="col1">-->
<!---->
<!--                                --><?php //$attributes = array('class' => 'left', );
//                            echo form_label('Banner Background Image:(660*251)', 'name', $attributes);
//                                    ?>
<!--                            </td>-->
<!--                            <td class="col2">-->
<!--                                --><?php //$data = array('name' => 'path', 'id' => 'path', 'value' => '', 'class' => '', 'onchange' => 'readURL(this);',);
//                                echo form_upload($data);
//                            ?><!--(Max Filesize: 1Mb)<br/>-->
<!--                            <img id="blah" src="#" alt="" width="20%"/>-->
<!--                            </td>-->
<!--                        </tr>-->
<!---->
<!--                        <tr>-->
<!--                            <td class="col1">-->
<!---->
<!--                                --><?php //$attributes = array('class' => 'left', );
//                            echo form_label('Banner Middle Image:(660*251)', 'name', $attributes);
//                                    ?>
<!--                            </td>-->
<!--                            <td class="col2">-->
<!--                                --><?php //$data = array('name' => 'mimage', 'id' => 'mimage', 'value' => '', 'class' => '', 'onchange' => 'readURL1(this);',);
//                                echo form_upload($data);
//                            ?><!--(Max Filesize: 1Mb)<br/>-->
<!--                            <img id="blah1" src="#" alt="" width="20%"/>-->
<!--                            </td>-->
<!--                        </tr>-->
<!---->
<!--                        <tr>-->
<!--                            <td class="col1">-->
<!---->
<!--                                --><?php //$attributes = array('class' => 'left', );
//                            echo form_label('Banner Right Image:(660*251)', 'name', $attributes);
//                                    ?>
<!--                            </td>-->
<!--                            <td class="col2">-->
<!--                                --><?php //$data = array('name' => 'rimage', 'id' => 'rimage', 'value' => '', 'class' => '', 'onchange' => 'readURL2(this);',);
//                                echo form_upload($data);
//                            ?><!--(Max Filesize: 1Mb)<br/>-->
<!--                            <img id="blah2" src="#" alt="" width="20%"/>-->
<!--                            </td>-->
<!--                        </tr>-->
<!---->
<!--                      <tr>-->
<!--                            <td class="col1">-->
<!--                                --><?php //$attributes = array('class' => 'left', );
//                                echo form_label('Description:', 'index', $attributes);
//                                    ?>
<!--                            </td>-->
<!--                            <td class="col2">-->
<!---->
<!--                                --><?php //$data = array('name' => 'description', 'id' => 'description', 'value' => set_value('description'), 'class' => 'medium', 'rows' => '5', );
//                                    echo form_textarea($data);
//                                ?>
<!--                            </td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td>-->
<!--                                <label>-->
<!--                                    Status:</label>-->
<!--                            </td>-->
<!--                            <td>-->
<!--                              --><?php //$extra = 'style="width:390px;" class="chzn-select medium select"';
//                                $options = array('yes' => 'Yes', 'no' => 'No', );
//                                echo form_dropdown('publish', $options, set_value('publish'), $extra);
//                                ?>
<!--                            </td>-->
<!--                        </tr>-->
<!---->
<!--                        <tr>-->
<!--                            <td>-->
<!--                                <label>-->
<!--                                    &nbsp;</label>-->
<!--                            </td>-->
<!--                            <td>-->
<!--                               --><?php //$data = array('name' => 'submit', 'id' => 'submit', 'value' => 'Save', 'class' => 'btn btn-primary', );
//
//                                echo form_submit($data);
//								?>
<!--                                <a href="--><?php //echo site_url(ADMIN_PATH . 'banner'); ?><!--" class="btn btn-primary">Clear</a>-->
<!---->
<!--                            </td>-->
<!--                        </tr>-->
<!---->
<!--                    </table>-->
<!--                   --><?php
//                echo form_close();
//               ?>
<!---->
<!---->
<!---->
<!--                    </div>-->
<!--                </div><!--/span-->-->
<!---->
<!--            </div><!--/row-->-->
<!--    </div>-->
<!--    </div>-->
<!--<hr>-->