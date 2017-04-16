
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Referral List

        </h1>
    </section>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('administrator/referral') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><?php echo $this->head;?></a></li>
        <li class="active"><?php echo $this->title?></li>
    </ol>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo $this->title;?></h3>
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


<?php //$allowed = $this -> AuthMasterModel -> getRoleAuth();
//$ts = $this -> uri -> total_segments();
//$offset = (is_numeric($this -> uri -> segment($ts))) ? $this -> uri -> segment($ts) : 0;
//?>
<!--<script type="text/javascript">-->
<!--    function pageredirect(data, id) {-->
<!--        window.location = "--><?php //echo base_url().'administrator/affiliate/view/';?><!--"+id+'#'+data;-->
<!--    }-->
<!--</script>-->
<!--<div id="content" class="span10">-->
<!--    <!-- content starts -->-->
<!--    <div class="row-fluid">-->
<!--        <div class="box span12">-->
<!--            <div class="box-header well" data-original-title>-->
<!--                <h2><i class="icon-user"></i> --><?php //echo $title;?><!--</h2>-->
<!--            </div>-->
<!--            <div class="box-content">-->
<!--                --><?php
//                if ($this->session->flashdata('su_message')) {
//                    ?>
<!--                    <div class="message info"><p>--><?php //echo $this->session->flashdata('su_message') ?><!--<p></div>-->
<!--                --><?php //} ?>
<!--                <a href="--><?php //echo site_url(ADMIN_PATH . 'referral/add'); ?><!--" class="btn btn-primary">Add New Referral</a>-->
<!--                <table class="table table-striped table-bordered bootstrap-datatable datatable">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>S.No.</th>-->
<!--                        <th>Referral Name--><?php //echo '&nbsp;&nbsp;&nbsp' ; ?><!--<img src="--><?php //echo base_url(); ?><!--/style/img/sort.png"></th>-->
<!---->
<!--                        <th>Primary Contact--><?php //echo '&nbsp;&nbsp;&nbsp' ; ?><!--<img src="--><?php //echo base_url(); ?><!--/style/img/sort.png"></th>-->
<!--                        <th>Secondary Contact--><?php //echo '&nbsp;&nbsp;&nbsp' ; ?><!--<img src="--><?php //echo base_url(); ?><!--/style/img/sort.png"></th>-->
<!--                        <th>Email Address--><?php //echo '&nbsp;&nbsp;&nbsp' ; ?><!--<img src="--><?php //echo base_url(); ?><!--/style/img/sort.png"></th>-->
<!--                        <th>T O --><?php //echo '&nbsp;&nbsp;&nbsp' ; ?><!--<img src="--><?php //echo base_url(); ?><!--/style/img/sort.png"></th>-->
<!---->
<!--                        <th>Action</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    --><?php
//                    if ($referrals != 0 && count($referrals) > 0) {
//                        $count = 1;
//                        foreach ($referrals as $values) {
//                            ?>
<!--                            <tr class="item">-->
<!--                                <td>--><?php //echo $count; ?><!--</td>-->
<!--                                <td>-->
<!--                                    <a href="--><?php //echo site_url(ADMIN_PATH . 'referral/view/' . $values -> user_id); ?><!--" title="Click to edit">-->
<!--                                        --><?php //echo $values -> ref_fname.' '.$values->ref_lname; ?>
<!--                                    </a>-->
<!---->
<!--                                </td>-->
<!--                                <!-- <td>--><?php //echo $values -> scn; ?><!--</td> -->-->
<!---->
<!--                                <td>--><?php //echo $values -> ref_primary_contact; ?><!--</td>-->
<!--                                <td>--><?php //echo $values -> ref_secondary_contact; ?><!--</td>-->
<!--                                <td>--><?php //echo $values -> ref_email; ?><!--</td>-->
<!--                                <td>--><?php //echo $values -> notradelineowner; ?><!--</td>-->
<!---->
<!---->
<!--                                <td class="action">-->
<!---->
<!--                                    --><?php
//                                    if(($values -> notradelineowner) == 0 ) { ?>
<!---->
<!--                                        <a href="--><?php //echo site_url(ADMIN_PATH . 'referral/deleteReferral/' .$values -> ref_id); ?><!--"  onclick="javascript:return confirm('Are you sure you want to delete this Referral?')" title="Click to delete"> <img src="--><?php //echo base_url(); ?><!--/style/img/delete.png" alt="Delete Referral"></a>-->
<!---->
<!--                                    --><?php // } else { ?>
<!---->
<!--                                        <a  onclick="javascript:return confirm('First Delete The tradeline owners under this referral.')" title="Delete the tradeline owners first"> <img src="--><?php //echo base_url(); ?><!--/style/img/delete.png" "></a>-->
<!--                                    --><?php //}  ?>
<!--                                </td>-->
<!--                            </tr>-->
<!--                            --><?php
//                            $count++;
//                        }
//                    }
//                    ?>
<!--                    </tbody>-->
<!--                </table>-->
<!--            </div>-->
<!--        </div><!--/span-->-->
<!---->
<!--    </div><!--/row-->-->
<!--</div>-->
<!--</div>-->
<!--<hr>-->