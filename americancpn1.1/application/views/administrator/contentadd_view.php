


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Content

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
<!--                        <h2><i class="icon-edit"></i> --><?php //echo $title; ?><!--</h2>-->
<!--                    </div>-->
<!--                    <div class="box-content">-->
<!--            --><?php
//            if (validation_errors()) {
//                ?>
<!--                <div class="message error">--><?php //echo validation_errors(); ?><!--</div> -->
<!--                --><?php
//            }
//            ?>
<!--            --><?php
//            $attributes = array('class' => 'formular');
//            echo form_open(ADMIN_PATH . 'content/add', $attributes);
//            ?>
<!--            <table class="form">-->
<!--                <tr>-->
<!--                    <td class="col1" >-->
<!--                        --><?php
//                        $attributes = array(
//                            'class' => 'left',
//                        );
//                        echo form_label('Title:', 'username', $attributes);
//                        ?>
<!--                    </td>-->
<!--                    <td class="col2">-->
<!--                        --><?php
//                        $data = array(
//                            'name' => 'content_title',
//                            'id' => 'content_title',
//                            'value' => set_value('content_title'),
//                            'class' => 'medium',
//                        );
//                        echo form_input($data);
//                        ?>
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>-->
<!--                        <label>-->
<!--                            Description:</label>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <textarea class="medium" id="description"  style="width:100%"  name="content_description" ></textarea>-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>-->
<!--                        <label>-->
<!--                            &nbsp;</label>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        --><?php
//                        $data = array(
//                            'name' => 'submit',
//                            'id' => 'submit',
//                            'value' => 'Save',
//                            'class' => 'btn btn-primary',
//                        );
//                        echo form_submit($data);
//						?>
<!--                         <a href="--><?php //echo site_url(ADMIN_PATH . 'content'); ?><!--" class="btn btn-primary">Clear</a>-->
<!--                        -->
<!--                        -->
<!--                    </td>-->
<!--                </tr>-->
<!--            </table>-->
<!--            --><?php
//            echo form_close();
//            ?>
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--<hr>-->