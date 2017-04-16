<?php 
$ts = $this -> uri -> total_segments();
$offset = (is_numeric($this -> uri -> segment($ts))) ? $this -> uri -> segment($ts) : 0;
?>
<div id="content" class="span10">
    <!-- content starts -->
    <div class="row-fluid">        
                <div class="box span12">
                    <div class="box-header well" data-original-title>
                        <h2><i class="icon-user"></i> News and Events List</h2>
                    </div>
                    <div class="box-content">
                        <?php
                        if ($this->session->flashdata('su_message')) {
                            ?>
                            <div class="message info"><p><?php echo $this->session->flashdata('su_message') ?><p></div> 
                            <?php
                        }
                        ?>
                        <?php
                        if (in_array('news_add', $authorities)) {
                            ?><a href="<?php echo site_url(ADMIN_PATH . 'news/addNews'); ?>" class="btn btn-primary">New</a>
                            <?php
                        }
                        ?>
                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th width="15%">Title</th>
                                    <th width="35%">Brief Description</th>
                                    <th>Order</th>
                                    <th>Date</th>
                                    <th>Status</th>
            
                                    <th>action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($newsList != 0 && count($newsList) > 0) {
                                    $count = 1;
                                    foreach ($newsList as $values) {
                                        ?>
                                        <tr class="item">
                                            <td><?php echo $count; ?></td>
                                            <td><?php echo $values->news_title; ?></td>
                                            <td><?php echo word_limiter($values->news_brief, 25) ?></td>
                                            <td style="margin-right:5px">
                                                <?php echo $values->news_order; ?>
                                                <?php if(in_array('news_order', $authorities)){?>
                                                    -<a href="<?php echo site_url(ADMIN_PATH . "news/updateStatus/$values->news_id/$values->news_order/1/$offset") ?>">
                                                        <img src="<?php echo base_url(); ?>/style/img/arrow-desc.png" /></a>
                                                    <a href="<?php echo site_url(ADMIN_PATH . "news/updateStatus/$values->news_id/$values->news_order/2/$offset") ?>">
                                                        <img src="<?php echo base_url(); ?>/style/img/arrow-asc.png" />
                                                    </a>
                                                <?php }?></td>
                                            <td><?php echo $values->news_date; ?></td>
                                            <td>
                                                <?php if(in_array('news_status', $authorities)){?>
                                                <a href="<?php echo site_url(ADMIN_PATH . 'news/changeStatus/' . $values->news_id . "/" . $values->news_status . "/$offset"); ?>">
                                                        <?php echo $values->news_status; ?>
                                                    </a>                                    
                                                <?php }else{?>
                                                    <?php echo $values->news_status; ?>
                                                <?php }?>                
                                            </td>
                                            <td class="action">
                                                <?php
                                                if (in_array('news_update', $authorities)) {
                                                    ?>
                                                    <a href="<?php echo site_url(ADMIN_PATH . 'news/updateNews/' . $values->news_id . '/' . $offset); ?>"><img src="<?php echo base_url(); ?>/style/img/edit.png" alt="edit"></a> 
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if (in_array('news_delete', $authorities)) {
                                                    ?>
                                                    <a href="<?php echo site_url(ADMIN_PATH . 'news/deleteNews/' . $values->news_id . '/' . $offset); ?>"  onclick="return confirm('Make Sure Befor You Delete This Record');"><img src="<?php echo base_url(); ?>/style/img/delete.png" alt="delete"></a> 
                                                    <?php
                                                }
                                                ?>
            
                                            </td>
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
    </div>

</div>
</div>
<hr>