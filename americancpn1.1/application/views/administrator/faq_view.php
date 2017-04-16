




<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Manage Faq

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
<!--            <!-- content starts -->-->
<!--            <div class="row-fluid">-->
<!--                <div class="box span12">-->
<!--                    <div class="box-header well" data-original-title>-->
<!--                        <h2><i class="icon-edit"></i> --><?php //echo $title1; ?><!--</h2>-->
<!--                    </div>-->
<!--                    <div class="box-content">-->
<!--            --><?php
//            if (validation_errors()) {
//                ?>
<!--                <div class="message error">--><?php //echo validation_errors(); ?><!--</div> -->
<!--                --><?php //} ?>
<!--            --><?php //$attributes = array('class' => 'formular');
//            if (!empty($photoRecord)) {
//                echo form_open(ADMIN_PATH . 'faq/update', $attributes);
//            } else {
//                echo form_open(ADMIN_PATH . 'faq/add', $attributes);
//            }
//            ?>
<!--            <table class="form">-->
<!--            	<p style="color:red;">(Fields marked with '*' are required.)</p>-->
<!--                <tr>-->
<!--                    --><?php //if(!empty($photoRecord)){?>
<!--                        <input name="faq_id" type="hidden" value="--><?php //echo $photoRecord->faq_id?><!--"/>-->
<!--                        --><?php //} ?>
<!--                    <td class="col1" >-->
<!--                        --><?php //$attributes = array('class' => 'left', );
//                        echo form_label('Question (*):', 'question', $attributes);
//                        ?>
<!--                    </td>-->
<!--                    <td class="col2">-->
<!--                        --><?php
//                        if (!empty($photoRecord)) {
//                            $data = array('name' => 'question', 'id' => 'question', 'value' => set_value('question') == "" ? $photoRecord -> faq_question : set_value('question'), 'class' => 'medium', );
//                        } else {
//                            $data = array('name' => 'question', 'id' => 'question', 'value' => set_value('question'), 'class' => 'medium', );
//                        }
//                        echo form_input($data);
//                        ?>
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td class="col1" >-->
<!--                        --><?php //$attributes = array('class' => 'left', );
//                        echo form_label('Answer (*):', 'answer', $attributes);
//                        ?>
<!--                    </td>-->
<!--                    <td class="col2">-->
<!--                        --><?php
//                        if (!empty($photoRecord)) {
//                            $data = array('name' => 'answer', 'class'=>'ckeditor', 'id' => 'description', 'value' => set_value('answer') == "" ? $photoRecord -> faq_answer : set_value('answer'),);
//                        } else {
//                            $data = array('name' => 'answer', 'class'=>'ckeditor', 'id' => 'description', 'value' => set_value('answer'),);
//                        }
//                        echo form_textarea($data);
//                        ?>
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>-->
<!--                        <label>-->
<!--                            &nbsp;</label>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        --><?php
//                        if (!empty($photoRecord)) {
//                            $data = array('name' => 'submit', 'id' => 'submit', 'value' => 'Update', 'class' => 'btn btn-primary', );
//                        } else {
//                            $data = array('name' => 'submit', 'id' => 'submit', 'value' => 'Save', 'class' => 'btn btn-primary', );
//                        }
//                        echo form_submit($data);
//                        ?>
<!--                    </td>-->
<!--                </tr>-->
<!--            </table>-->
<!--            --><?php //echo form_close(); ?>
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--</div>-->
<!--<div id="content" class="span10">-->
<!--    <!-- content starts -->-->
<!--    <div class="row-fluid sortable">        -->
<!--                <div class="box span12">-->
<!--                    <div class="box-header well" data-original-title>-->
<!--                        <h2><i class="icon-user"></i> --><?php //echo $title; ?><!--</h2>-->
<!--                    </div>-->
<!--                    <div class="box-content">-->
<!--                        --><?php
//                        if($this->session->flashdata('su_message'))
//                        {
//
//                            ?>
<!--                             <div class="message info"><p>--><?php //echo $this->session->flashdata('su_message')?><!--<p></div> -->
<!--                            --><?php //} ?>
<!--                       --><?php //if (in_array('faq_view', $allowed)) { ?>
<!--                                <a href="--><?php //echo site_url(ADMIN_PATH . 'faq'); ?><!--" class="btn btn-primary">New</a>-->
<!--                        --><?php //} ?>
<!--                    <table class="table table-striped table-bordered bootstrap-datatable datatable">-->
<!--                    <thead>-->
<!--                        <tr>-->
<!--                            <th>&nbsp;</th>-->
<!--                            <th>Question</th>-->
<!--                            <th>Answer</th>-->
<!--                            <th>Action</th>-->
<!--                        </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                         --><?php
//                        if( $faqList !=0 && count($faqList) > 0)
//                        {
//                            $count=1;
//                            foreach($faqList as  $values)
//                            {
//                            ?>
<!--                            <tr class="item">-->
<!--                                <td>--><?php //echo $count; ?><!--</td>-->
<!--                                <td>--><?php //echo $values -> faq_question; ?><!--</td>   -->
<!--                                <td>--><?php //echo word_limiter($values -> faq_answer, 100, '');?><!--</td>                             -->
<!--                               <td class="action" style="width:100px">-->
<!--	                               <a href="--><?php //echo site_url(ADMIN_PATH . 'faq/updateAction/' . $values -> faq_id); ?><!--"><img src="--><?php //echo base_url(); ?><!--/style/img/edit.png" alt="edit"></a> -->
<!--	                               <a href="--><?php //echo site_url(ADMIN_PATH . 'faq/deleteAction/' . $values -> faq_id); ?><!--"  onclick="return confirm('Make Sure Before You Delete This Record');"><img src="--><?php //echo base_url(); ?><!--/style/img/delete.png" alt="delete"></a> -->
<!--                               </td>-->
<!--                            </tr>-->
<!--                            --><?php
//                            $count++;
//                            }
//                            }
//                        ?>
<!--                     </tbody>-->
<!--                      </table>            -->
<!--                    </div>-->
<!--                </div><!--/span-->-->
<!--            -->
<!--            </div><!--/row-->-->
<!--</div>-->
<!--</div>-->
<!--<hr>-->