



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Menu

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



<?php
//$CI = &get_instance();
//$content = $CI->ContentModel->getAllActive();
//$module = $CI->ModuleModel->getAll();
//$parent_menu = $CI->MenuModel->getAll('Active');
//?>
<!--<div id="content" class="span10">-->
<!--    <!-- content starts -->-->
<!--    <div class="row-fluid">-->
<!--        <div class="box span12">-->
<!--            <div class="box-header well" data-original-title>-->
<!--                <h2><i class="icon-edit"></i> --><?php //echo $title; ?><!--</h2>-->
<!--            </div>-->
<!--            <div class="box-content">-->
<!--                --><?php
//                if (validation_errors()) {
//                    ?>
<!--                    <div class="message error">--><?php //echo validation_errors(); ?><!--</div>-->
<!--                --><?php
//                }
//                ?>
<!--                --><?php
//                $attributes = array('class' => 'formular');
//                echo form_open(ADMIN_PATH . 'menu/add', $attributes);
//                ?>
<!--                <table class="form">-->
<!--                    <tr>-->
<!--                        <td class="col1">-->
<!--                            --><?php
//                            $attributes = array(
//                                'class' => 'left',
//                            );
//                            echo form_label('Title:', 'menu_title', $attributes);
//                            ?>
<!--                        </td>-->
<!--                        <td class="col2">-->
<!--                            --><?php
//                            $data = array(
//                                'name' => 'menu_name',
//                                'id' => 'menu_name',
//                                'value' => set_value('menu_name'),
//                                'class' => 'medium',
//                            );
//                            echo form_input($data);
//                            ?>
<!--                        </td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>-->
<!--                            <label>-->
<!--                                Menu Type:</label>-->
<!--                        </td>-->
<!--                        <td>-->
<!--                            --><?php
//                            $options = array(
//                                '' => 'Select',
//                                'top-menu' => 'Top Menu',
//                                'main-menu' => 'Main Menu',
//                                'footer-menu' => 'Footer Menu',
//                                'main-menu/footer-menu' => 'Main Menu/Footer Menu',
//                                'top-menu/footer-menu' => 'Top Menu/Footer Menu',
//                            );
//                            echo form_dropdown('menu_type', $options, set_value('menu_type'));
//                            ?>
<!--                        </td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>-->
<!--                            <label>-->
<!--                                Content:</label>-->
<!--                        </td>-->
<!--                        <td>-->
<!--                            <select name="content">-->
<!--                                <option value="">Select</option>-->
<!--                                --><?php
//                                foreach ($content as $value) {
//                                    ?>
<!--                                    <option-->
<!--                                        value="--><?php //echo $value->content_id;?><!--">--><?php //echo $value->content_title;?><!--</option>-->
<!--                                --><?php //} ?>
<!--                            </select>-->
<!--                        </td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>-->
<!--                            <label>-->
<!--                                Menu Module:</label>-->
<!--                        </td>-->
<!--                        <td>-->
<!--                            <select name="module">-->
<!--                                <option value="">Select</option>-->
<!--                                --><?php
//                                foreach ($module as $value) {
//                                    ?>
<!--                                    <option value="--><?php //echo $value->id;?><!--">--><?php //echo $value->module_name;?><!--</option>-->
<!--                                --><?php //} ?>
<!--                            </select>-->
<!--                        </td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>-->
<!--                            <label>-->
<!--                                Parent Menu:</label>-->
<!--                        </td>-->
<!--                        <td>-->
<!--                            <select name="parent">-->
<!--                                <option value="">Select</option>-->
<!--                                --><?php
//                                foreach ($parent_menu as $value) {
//                                    ?>
<!--                                    <option value="--><?php //echo $value->id;?><!--">--><?php //echo $value->menu_name;?><!--</option>-->
<!--                                --><?php //} ?>
<!--                            </select>-->
<!--                        </td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>-->
<!--                            <label>-->
<!--                                Status:</label>-->
<!--                        </td>-->
<!--                        <td>--><?php
//                            $options = array(
//                                '' => 'Select',
//                                'Active' => 'Active',
//                                'Inactive' => 'Inactive',
//                            );
//                            echo form_dropdown('status', $options, set_value('status'));
//                            ?>
<!--                        </td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>-->
<!--                            <label>-->
<!--                                &nbsp;</label>-->
<!--                        </td>-->
<!--                        <td>-->
<!--                            --><?php
//                            $data = array(
//                                'name' => 'submit',
//                                'id' => 'submit',
//                                'value' => 'Save',
//                                'class' => 'btn btn-primary',
//                            );
//                            echo form_submit($data);
//                            ?>
<!--                            <a href="--><?php //echo site_url(ADMIN_PATH . 'menu'); ?><!--" class="btn btn-primary">Clear</a>-->
<!--                        </td>-->
<!--                    </tr>-->
<!--                </table>-->
<!--                --><?php
//                echo form_close();
//                ?>
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--</div>-->
<!--<hr>-->