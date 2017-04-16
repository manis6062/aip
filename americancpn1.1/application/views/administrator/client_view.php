





<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Client List

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
<!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />-->
<?php //$allowed = $this -> AuthMasterModel -> getAuth();
//$ts = $this -> uri -> total_segments();
//$offset = (is_numeric($this -> uri -> segment($ts))) ? $this -> uri -> segment($ts) : 0;
//?>
<!--<script type="text/javascript">-->
<!--    function pageredirect(data, id) {-->
<!--        window.location = "--><?php //echo base_url().'administrator/client/view/';?><!--"+id+'#'+data;-->
<!--    }-->
<!--    jQuery(function($){-->
<!--        $("#date").mask("99/99/9999",{placeholder:"MM/DD/YYYY"});-->
<!---->
<!--        $("#ssn_no").mask("999-99-9999",{placeholder:" "});-->
<!---->
<!--    });-->
<!--</script>-->
<!---->
<!--<script src="http://code.jquery.com/jquery-1.9.1.js"></script>-->
<!--<!-- Load jQuery UI Main JS  -->-->
<!--<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>-->
<!---->
<!--<script>-->
<!--    $(function() {-->
<!--        $( "#datepicker" ).datepicker({-->
<!--            changeMonth: true,-->
<!--            changeYear: true,-->
<!--            yearRange: "-100:+0"-->
<!---->
<!--        });-->
<!--    });-->
<!---->
<!--</script>-->
<!--<style>-->
<!--    .form-horizontal .control-label{-->
<!--        width:90px;-->
<!--    }-->
<!--    input{-->
<!--        width:93%;-->
<!--    }-->
<!--    .form-horizontal .controls {-->
<!--        margin-left: 95px;}-->
<!--</style>-->
<!--<div id="content" class="span10">-->
<!--<!-- content starts -->-->
<!--<div class="row-fluid">-->
<!--<div class="box span12">-->
<!--<div class="box-header well" data-original-title>-->
<!--    <h2><i class="icon-user"></i>Clients</h2>-->
<!--</div>-->
<!--<div class="box-content">-->
<!---->
<?php //$attributes = array('id' => 'login-form', 'class' => 'form-horizontal box1');
//echo form_open(ADMIN_PATH. 'client/addAction2', $attributes);
//?>
<!---->
<!---->
<?php
//if ($this->session->flashdata('su_message')) {
//    ?>
<!--    <div class="message info"><p>--><?php //echo $this->session->flashdata('su_message') ?><!--<p></div>-->
<?php //} ?>
<?php //if($this->session->userdata(ADMIN_AUTH_ROLE) == '4'){?>
<!--<a href="--><?php //echo site_url(ADMIN_PATH . 'client/add'); ?><!--" class="btn btn-primary">Add New Client</a>--><?php //} ?>
<!--<table class="table table-striped table-bordered bootstrap-datatable datatable">-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th class="sortable">S.No.</th>-->
<!--        <th class="sorting">Client Name--><?php //echo '&nbsp;&nbsp;&nbsp' ; ?><!--<img src="--><?php //echo base_url(); ?><!--/style/img/sort.png"></th>-->
<!--        <th>DOB--><?php //echo '&nbsp;&nbsp;&nbsp' ; ?><!--<img src="--><?php //echo base_url(); ?><!--/style/img/sort.png"></th>-->
<!--        <th>Tradelines Bought--><?php //echo '&nbsp;&nbsp;&nbsp' ; ?><!--<img src="--><?php //echo base_url(); ?><!--/style/img/sort.png"></th>-->
<!--        <th>Tradelines Pending--><?php //echo '&nbsp;&nbsp;&nbsp' ; ?><!--<img src="--><?php //echo base_url(); ?><!--/style/img/sort.png"></th>-->
<!--        <th>Action</th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    --><?php
//    if ($clientList != 0 && count($clientList) > 0) {
//        $count = 1;
//        foreach ($clientList as $key=> $values) {
//            ?>
<!--            <tr class="item">-->
<!--                <td>--><?php //echo $count; ?><!--</td>-->
<!--                <td>--><?php //if (in_array('client_update', $allowed)) { ?>
<!--                        <a href="--><?php //echo site_url(ADMIN_PATH . 'client/view/' . $values -> id); ?><!--" title="Click to edit">-->
<!--                            --><?php //echo $values -> firstname.' '.$values->middlename.' '.$values->lastname; ?>
<!--                        </a>-->
<!--                    --><?php //}else{ echo $values -> firstname.' '.$values->middlename.' '.$values->lastname; }?>
<!--                </td>-->
<!--                <td>-->
<!--                    <div class = "hideValue--><?php //echo $key?><!--">-->
<!--                        --><?php //echo '********' ;?>
<!--                        <img src="--><?php //echo base_url(); ?><!--/style/img/eye.png" />-->
<!--                    </div>-->
<!--                    <div class = "showValue--><?php //echo $key?><!--" >-->
<!--                        --><?php //echo $values -> dob; ?>
<!--                        <img src="--><?php //echo base_url(); ?><!--/style/img/eye.png" />-->
<!--                    </div>-->
<!--                </td>-->
<!--                <td>-->
<!--                    <!---->
<!-- <a style="cursor: pointer;"--><?php //echo $key?><!--" class=""btn btn-primary" title="Tradeline Lists"  role="btn-group" data-toggle="popover" data-trigger="focus" data-content="<ul>--><?php
//    foreach($cardinfo as $val){
//        if($values->id == $val->client_id){
//          ?><!--<li>--><?php //echo $val->card_name ;if($val->card_type){echo ' | '.$val->card_type; }?><!--</li>-->
<!--          --><?php //
//        }
//    }
//    ?>
<!-- </ul>">--><?php //echo $values -> notradeline; ?><!--</a>-->
<!--  -->-->
<!---->
<!--                    --><?php //if ($values -> com_notradeline != 0){ ?>
<!---->
<!--                        <button type="button" data-toggle="popover--><?php //echo $key;?><!--" data-placement="top" title="Tradeline Lists" data-trigger="focus" data-content="<ul>--><?php
//                        foreach($cardinfocom as $val){
//                            if($values->id == $val->client_id){
//                                ?><!--<li>--><?php //echo $val->card_name ;if($val->card_type){echo ' | '.$val->card_type; }?><!--</li>-->
<!--          --><?php
//                            }
//                        }
//                        ?>
<!--</ul>" role="button" >--><?php //echo $values -> com_notradeline; ?><!--</button>  --><?php //}  ?>
<!---->
<!---->
<!--                </td>-->
<!---->
<!--                <script>-->
<!--                    $(function () {-->
<!--                        $('[data-toggle="popover--><?php //echo $key;?><!--"]').popover()-->
<!--                    })-->
<!---->
<!---->
<!--                    $('.showValue--><?php //echo $key?><!--').hide();-->
<!--                    $('.hideValue--><?php //echo $key?><!--, .showValue--><?php //echo $key?><!--').on('click',-->
<!--                        function()-->
<!--                        {-->
<!--                            $('.hideValue--><?php //echo $key?><!--, .showValue--><?php //echo $key?><!--').toggle()-->
<!--                        }-->
<!--                    );-->
<!---->
<!---->
<!---->
<!--                </script>-->
<!--                <!-- <td>--><?php //echo date('F d, Y', strtotime($values -> reg_date)) ?><!--</td> -->-->
<!---->
<!---->
<!---->
<!--                <td>-->
<!--                    <!---->
<!-- <a style="cursor: pointer;"--><?php //echo $key?><!--" class=""btn btn-primary" title="Tradeline Lists"  role="btn-group" data-toggle="popover" data-trigger="focus" data-content="<ul>--><?php
//    foreach($cardinfo as $val){
//        if($values->id == $val->client_id){
//          ?><!--<li>--><?php //echo $val->card_name ;if($val->card_type){echo ' | '.$val->card_type; }?><!--</li>-->
<!--          --><?php //
//        }
//    }
//    ?>
<!-- </ul>">--><?php //echo $values -> notradeline; ?><!--</a>-->
<!--  -->-->
<!---->
<!--                    --><?php //if ($values -> pro_notradeline != 0){ ?>
<!---->
<!--                        <button type="button" data-toggle="popover1--><?php //echo $key;?><!--" data-placement="top" title="Tradeline Lists" data-trigger="focus" data-content="<ul>--><?php
//                        foreach($cardinfopro as $val){
//                            if($values->id == $val->client_id){
//                                ?><!--<li>--><?php //echo $val->card_name ;if($val->card_type){echo ' | '.$val->card_type; }?><!--</li>-->
<!--          --><?php
//                            }
//                        }
//                        ?>
<!--</ul>" role="button" >--><?php //echo $values -> pro_notradeline; ?><!--</button>  --><?php //} ?>
<!---->
<!---->
<!--                </td>-->
<!---->
<!--                <script>-->
<!--                    $(function () {-->
<!--                        $('[data-toggle="popover1--><?php //echo $key;?><!--"]').popover()-->
<!--                    })-->
<!---->
<!---->
<!---->
<!---->
<!--                </script>-->
<!---->
<!--                <td class="action">-->
<!--                    <!-- --><?php
//if (in_array('client_update', $allowed)) {
//    ?>
<!--    <a href="--><?php //echo site_url(ADMIN_PATH . 'client/updateAction/' . $values -> id); ?><!--"><img src="--><?php //echo base_url(); ?><!--/style/img/edit.png" alt="edit"></a> -->
<!--    --><?php //} ?>
<?php
//if (in_array('client_delete', $allowed)) {
//    ?>
<!--    <a href="--><?php //echo site_url(ADMIN_PATH . 'client/deleteAction/' . $values -> id); ?><!--"  onclick="return confirm('Make Sure Before You Delete This Record');"><img src="--><?php //echo base_url(); ?><!--/style/img/delete.png" alt="delete"></a>-->
<!--    --><?php //} ?><!--	 -->-->
<!---->
<!---->
<!---->
<!---->
<!--                    <!-- <select style="width:80px;" onchange="pageredirect(this.value, --><?php //echo $values->id;?><!--)">-->
<!--  <option value="">Select</option>-->
<!--  <option value="employment">Employment</option>-->
<!--  <option value="billing">Billing</option> -->-->
<!--                    <!-- <option value="credit">Credit Credentials</option> -->-->
<!--                    <!-- <option value="portal">Portal</option> -->-->
<!--                    <!-- <option value="status">Status</option> -->-->
<!--                    <!-- <option value="Monthly Instructions">Monthly Instructions</option>-->
<!--                    <option value="Send Email">Send Email</option>-->
<!--                    <option value="Referral Agent">Referral Agent</option>-->
<!--                    <option value="Attachments">Attachments</option> -->-->
<!--                    <!-- <option value="comments">Comments</option> -->-->
<!---->
<!--                    <!-- </select>   -->-->
<!---->
<!---->
<!---->
<!---->
<!--                    --><?php
//                    if(($values -> com_notradeline) == 0  && ($values -> pro_notradeline) == 0 ) { ?>
<!---->
<!--                        <div class = "recyclebin--><?php //echo $key?><!-- ">-->
<!--                            <a href="--><?php //echo site_url(ADMIN_PATH . 'client/deleteAction/' .$values->id); ?><!--"  onclick="javascript:return confirm('Are you sure you want to delete this Client?')" title="Click to delete"> <img src="--><?php //echo base_url(); ?><!--/style/img/delete.png" alt="Delete Client"></a>-->
<!--                        </div>-->
<!---->
<!--                    --><?php // } else { ?>
<!---->
<!--                        <div class = "recyclebin--><?php //echo $key?><!-- ">-->
<!--                            <a  onclick="javascript:return confirm('First Delete The tradelines before deleting the clients.')" title="Delete the tradelines first"> <img src="--><?php //echo base_url(); ?><!--/style/img/delete.png" alt="Delete the tradelines first"></a>-->
<!--                        </div>-->
<!---->
<!--                    --><?php //}  ?>
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--                </td>-->
<!--            </tr>-->
<!--            --><?php
//            $count++;
//        }
//    }
//    ?>
<!--    </tbody>-->
<!--</table>-->
<!--</div>-->
<!--</div><!--/span-->-->
<!--</div><!--/row-->-->
<!--</div>-->
<!--</div>-->
<!--<hr>-->
