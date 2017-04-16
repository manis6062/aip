

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Manage Banner

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

<?php //$allowed = $this -> AuthMasterModel -> getAuth();
//$ts = $this -> uri -> total_segments();
//$offset = (is_numeric($this -> uri -> segment($ts))) ? $this -> uri -> segment($ts) : 0;
//?>
<!--<div id="content" class="span10">-->
<!--	<!-- content starts -->-->
<!--	<div class="row-fluid">        -->
<!--                <div class="box span12">-->
<!--                    <div class="box-header well" data-original-title>-->
<!--                        <h2><i class="icon-user"></i> Banner List</h2>-->
<!--                    </div>-->
<!--                    <div class="box-content">-->
<!--                        --><?php
//                            if ($this->session->flashdata('su_message')) {
//                                ?>
<!--                                <div class="message info"><p>--><?php //echo $this->session->flashdata('su_message') ?><!--<p></div> -->
<!--                                --><?php //} ?>
<!--                            --><?php
//                            if (in_array('user_add', $allowed)) {
//                                ?>
<!--                                <a href="--><?php //echo site_url(ADMIN_PATH . 'banner/addAction'); ?><!--" class="btn btn-primary">New</a>-->
<!--                        --><?php //} ?>
<!--                        --><?php
//                            $attributes = array('class' => 'formular', 'id' => 'form');
//                            echo form_open_multipart(ADMIN_PATH . 'banner/remove_checked', $attributes);
//                        ?>
<!--                        <table class="table table-striped table-bordered bootstrap-datatable datatable">-->
<!--                          <thead>-->
<!--                              <tr>-->
<!--                                <th style="width: 5%;">#</th>-->
<!--                                <th style="width: 15%;">Title</th>-->
<!--                                <th style="width: 20%;">Background Image</th>-->
<!--                                 <!--<th>Index</th>-->-->
<!--        -->
<!--                                <th style="width: 20%;">Middle Image</th>-->
<!--                                <th style="width: 20%;">Right Image</th>-->
<!--                                <th style="width: 5%;">Status</th>-->
<!--                                <th style="width: 5%;">action</th>-->
<!--                              </tr>-->
<!--                          </thead>   -->
<!--                          <tbody>-->
<!--                            --><?php
//                    if ($photoList != 0 && count($photoList) > 0) {
//                        $count = 1;
//                        foreach ($photoList as $values) {
//                            ?>
<!--                            <tr class="item">-->
<!--                                <td>--><?php //echo $count; ?><!--<input type="checkbox" name="msg[]" value="--><?php //echo $values->slider_id; ?><!--" /></td>-->
<!--                                <td>--><?php //echo  $values -> description; ?><!--</td>-->
<!--                                <td><img src="--><?php //echo base_url() . "uploads/banner/" . $values -> path; ?><!--" width="150" /></td>-->
<!--                                <!-- <td>--><?php ////echo $values->slider_index;  ?><!--</td>-->-->
<!--                                <td><img src="--><?php //echo base_url() . "uploads/banner/" . $values -> mimage; ?><!--" width="70" /></td>-->
<!--                                <td><img src="--><?php //echo base_url() . "uploads/banner/" . $values -> rimage; ?><!--" width="100" /></td>-->
<!---->
<!--                                <td>-->
<!--                                    --><?php //if (in_array('banner_status', $allowed)) {?>
<!--                                        <a href="--><?php //echo site_url(ADMIN_PATH . 'banner/changeStatus/' . $values -> slider_id . "/" . $values -> publish . "/" . $offset); ?><!--">--><?php //echo $values -> publish; ?><!--</a>-->
<!--                                    --><?php //} else{?>
<!--                                        --><?php //echo $values -> publish; ?>
<!--                                    --><?php //}?><!--                                                                                -->
<!--                                </td>-->
<!--                                <td class="action">-->
<!--                                    --><?php
//                                    if (in_array('banner_update', $allowed)) {
//                                        ?>
<!--                                        <a href="--><?php //echo site_url(ADMIN_PATH . 'banner/updateAction/' . $values -> slider_id . "/" . $offset); ?><!--"><img src="--><?php //echo base_url(); ?><!--/style/img/edit.png" alt="edit"></a> -->
<!--                                        --><?php //} ?>
<!--                                    --><?php
//                                    if (in_array('banner_delete', $allowed)) {
//                                        ?>
<!--                                        <a href="--><?php //echo site_url(ADMIN_PATH . 'banner/deleteAction/' . $values -> slider_id . "/" . $offset); ?><!--"  onclick="return confirm('Make Sure Befor You Delete This Record');"><img src="--><?php //echo base_url(); ?><!--/style/img/delete.png" alt="delete"></a> -->
<!--                                        --><?php //} ?>
<!---->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            --><?php
//                            $count++;
//                            }
//                            }
//                    ?>
<!--                          </tbody>-->
<!--                      </table>  -->
<!--                      --><?php //
//                            $data = array('name' => 'delete', 'id' => 'delete', 'value' => 'Delete', 'class' => 'btn btn-primary', );
//                            echo form_submit($data);
//                            echo form_close();?><!--          -->
<!--                    </div>-->
<!--                </div><!--/span-->-->
<!--            -->
<!--            </div><!--/row-->-->
<!--</div>-->
<!--</div>-->
<!--<hr>-->