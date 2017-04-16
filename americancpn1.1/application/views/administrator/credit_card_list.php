<script type="text/javascript">
    function pageredirect(data) {

        window.location = "<?php echo base_url().'administrator/tradelineowner/cardList/';?>" + data;
    }
</script>

<div id="content" class="span10">


    <!-- content starts -->

    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <h2><i class="icon-user"></i> <?php echo $title; ?></h2>
            </div>

            <div class="box-content">
                <?php
                if ($this->session->flashdata('su_message')) {

                    ?>
                    <div class="message info"><p><?php echo $this->session->flashdata('su_message') ?><p></div>
                <?php } ?>

                <?php if ($usertype != 1) { ?>
                    <a href="<?php echo site_url(ADMIN_PATH . 'tradelineowner/tradelineowner_addCard/'); ?>"
                       class="btn btn-primary">Add New Card</a>
                <?php } ?>


                <select name="redirect" onchange="pageredirect(this.value)">
                    <option value=""><?php echo $status; ?></option>
                    <option value="All">All</option>
                    <option value="Active">Active</option>

                    <option value="Inactive">Inactive</option>
                </select>


                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Card Type<?php echo '&nbsp;&nbsp;&nbsp'; ?><img
                                src="<?php echo base_url(); ?>/style/img/sort.png"></th>
                        <th>Card Name<?php echo '&nbsp;&nbsp;'; ?><img
                                src="<?php echo base_url(); ?>/style/img/sort.png"></th>
                        <th>Issued Bank<?php echo '&nbsp;&nbsp;&nbsp'; ?><img
                                src="<?php echo base_url(); ?>/style/img/sort.png"></th>
                        <th>Closing Date<?php echo '&nbsp;&nbsp;&nbsp'; ?><img
                                src="<?php echo base_url(); ?>/style/img/sort.png"></th>
                        <th>AU Added<img src="<?php echo base_url(); ?>/style/img/sort.png"></th>
                        <th>AU Pending<img src="<?php echo base_url(); ?>/style/img/sort.png"></th>
                        <th>Receivable Amount<img src="<?php echo base_url(); ?>/style/img/sort.png"></th>
                        <th>Collectable Amount<img src="<?php echo base_url(); ?>/style/img/sort.png"></th>
                        <!-- <th>Opening<?php echo '&nbsp;&nbsp;&nbsp'; ?><img src="<?php echo base_url(); ?>/style/img/sort.png"></th>
							<th>Closing<?php echo '&nbsp;&nbsp;&nbsp'; ?><img src="<?php echo base_url(); ?>/style/img/sort.png"></th>
							<th>Balance %<?php echo '&nbsp;&nbsp;&nbsp'; ?><img src="<?php echo base_url(); ?>/style/img/sort.png"></th>
							<th>Cost<?php echo '&nbsp;&nbsp;&nbsp'; ?><img src="<?php echo base_url(); ?>/style/img/sort.png"></th> -->
                        <?php if ($usertype != 1) {
                            echo "<th>Action</th>";
                        } ?>
                    </tr>
                    </thead>

                    <tfoot>
                    <tr>
                        <th colspan="7" style="text-align:center">Total:</th>
                        <th>$ <?php echo $sumOfReceivableAmountTradelineOwner[0]['card_sell_cost'] * 0.8; ?></th>
                        <th>$ <?php echo $sumOfCollectableAmountTradelineOwner[0]['card_sell_cost'] * 0.8; ?></th>
                        <th colspan="3"></th>

                    </tr>
                    </tfoot>


                    <tbody>
                    <?php
                    if ($cardList != 0 && count($cardList) > 0) {
                        $count = 1;
                        foreach ($cardList as $values) {
                            ?>
                            <tr class="item">
                                <td><?php echo $count; ?></td>
                                <td>
                                    <a href="<?php echo site_url(ADMIN_PATH . 'tradelineowner/addClientToCard/' . $values->card_id) ?>"
                                       title="<?php echo $values->nocard; ?> new Client Need to be Added"><?php echo $values->card_name; ?>
                                        &nbsp; <strong class="red"> <?php if ($values->nocard != 0) {
                                                echo $values->nocard;
                                            } ?></strong></a></td>
                                <td><?php echo($values->card_type); ?></td>
                                <td><?php echo $values->card_bank_name; ?></td>
                                <td><?php echo $values->card_close_date; ?></td>

                                <td><?php echo $values->countaddedcard; ?></td>
                                <td><?php echo $values->nocard; ?></td>
                                <!-- <td><?php echo $values->card_open_date; ?></td>
                                <td><?php echo $values->card_close_date; ?></td>
                                <td><?php echo ceil((($values->card_balance * 100) / $values->card_limit)) . '%'; ?></td>
                                <td>
                                    </td>-->
                                <td>$ <?php echo $values->card_sell_cost * 0.8; ?></td>

                                <?php if (($values->verify_status) != 0) { ?>
                                    <td>$ <?php echo $values->verify_status * 0.8; ?></td> <?php } else { ?>
                                    <td></td> <?php } ?>


                                <?php if ($usertype != 1) { ?>
                                    <td class="action" style="width:100px">
                                        <!-- <a href="<?php echo site_url(ADMIN_PATH . 'chooseandcharge/updateAction/' . $values->id); ?>"><img src="<?php echo base_url(); ?>/style/img/edit.png" alt="edit"></a>
		                               <a href="<?php echo site_url(ADMIN_PATH . 'chooseandcharge/deleteAction/' . $values->id); ?>"  onclick="return confirm('Make Sure Before You Delete This Record');"><img src="<?php echo base_url(); ?>/style/img/delete.png" alt="delete"></a>
		                               <a href="<?php echo site_url(ADMIN_PATH . 'tradelineowner/view/' . $values->owner_id); ?>"><img src="<?php echo base_url(); ?>/style/img/view.png" alt="delete"></a>
		                              <a title="Add Client To The Card" href="<?php echo base_url() . 'administrator/creditcard/creditCardClients/' . $values->card_id; ?>"><img src="<?php echo base_url(); ?>/style/img/view.png" alt="Add Client To The Card"></a> -->


                                        <a href="<?php echo site_url(ADMIN_PATH . 'tradelineowner/tradeline_creditcard_update/' . $values->card_id); ?>"
                                           title="Click to edit">
                                            <i class="icon icon-blue icon-edit"></i></a>
                                        <?php if (($values->countaddedcard) == 0 || ($values->nocard == 0)) { ?>
                                            <a href="<?php echo site_url(ADMIN_PATH . 'tradelineowner/deleteCardFromList/' . $values->card_id); ?>"
                                               onclick="javascript:return confirm('Are you sure you want to delete this Card Details?')"
                                               title="Click here to delete"> <i
                                                    class="icon icon-red icon-trash"></i></a>
                                        <?php } else { ?>
                                            <a onclick="javascript:return confirm('First Delete the Authorized Users Before Decline This Card')"
                                               title="Click to decline">
                                                <img src="<?php echo base_url(); ?>/style/img/delete.png"
                                                     alt="Decline Card Details"></a>
                                        <?php }

                                        if ($values->card_status == 'Inactive') {
                                            ?>
                                            <a href="<?php echo site_url(ADMIN_PATH . 'tradelineowner/changeStatus/' . $values->card_id . '/Active'); ?>"><i
                                                    class="icon icon-green icon-check"></i></a>
                                        <?php } else { ?>
                                            <a href="<?php echo site_url(ADMIN_PATH . 'tradelineowner/changeStatus/' . $values->card_id . '/Inactive'); ?>"><i
                                                    class="icon icon-blue icon-cancel"></i></a>
                                        <?php } ?>
                                    </td>
                                <?php } ?>
                            </tr>
                            <?php
                            $count++;
                        }
                    }
                    ?>


                    </tbody>
                </table>
            </div>
        </div>
        <!--/span-->

    </div>
    <!--/row-->


    <!-- content ends -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->
</div>
<hr>

