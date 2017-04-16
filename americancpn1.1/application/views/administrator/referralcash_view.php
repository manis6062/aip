<?php $allowed = $this -> AuthModel -> getAuth();
$ts = $this -> uri -> total_segments();
$offset = (is_numeric($this -> uri -> segment($ts))) ? $this -> uri -> segment($ts) : 0;
?>
<script type="text/javascript">
	function pageredirect(data, id) {
	 	window.location = "<?php echo base_url().'administrator/affiliate/view/';?>"+id+'#'+data;
	}
</script>
<div id="content" class="span10">
    <!-- content starts -->
    <div class="row-fluid">        
                <div class="box span12">
                    <div class="box-header well" data-original-title>
                        <h2><i class="icon-user"></i> <?php echo $title;?></h2>
                    </div>
                    
                    <div class="box-content">
                    	
                    	<?php
                            if ($this->session->flashdata('su_message')) {
                                ?>
                                <div class="message info"><p><?php echo $this->session->flashdata('su_message') ?><p></div> 
                        <?php } ?>
                    	
                    	
                                                <?php
                        if(validation_errors())
                        {
                            
                            ?>
                             <div class="message error"><?php echo validation_errors(); ?></div> 
                            <?php } ?>
                       
                         <?php $attributes = array('class' => 'formular', 'id' => 'form');
                                echo form_open_multipart(ADMIN_PATH . 'payment/addcash', $attributes);
                           ?>
                    <table class="form">
                        <tr>
                            <td class="col1">
                           
                                <?php $attributes = array('class' => 'left', );
                            echo form_label('Payment Title', 'title', $attributes);
                                    ?>
                            </td>
                            <td class="col2">
                                <?php
		                        $data = array(
		                            'name' => 'ptitle',
		                            'id' => 'ptitle',
		                            'value' => set_value('ptitle'),
		                            'class' => 'medium'
		                                //'readonly' => 'readonly'
		                        );
		                        echo form_input($data);
		                        ?>
                            </td>
                        </tr>
                      <tr>
                            <td class="col1">
                                <?php $attributes = array('class' => 'left', );
                                echo form_label('Payment Amount:', 'amount', $attributes);
                                    ?>
                            </td>
                            <td class="col2">
                                 
                                <?php $data = array('name' => 'amount', 'id' => 'amount', 'value' => set_value('amount'), 'class' => 'medium' );
                                    echo form_input($data);
                                ?>
                            </td>
                        </tr>
                        
                        
                        <tr>
                            <td>
                                <label>
                                    &nbsp;</label>
                            </td>
                            <td>
                               <?php $data = array('name' => 'submit', 'id' => 'submit', 'value' => 'Save', 'class' => 'btn btn-navy', );

                                echo form_submit($data);
								?>
                                 <a href="<?php echo site_url(ADMIN_PATH . ''); ?>" class="btn btn-navy">Cancel</a>
                            
                            </td>
                        </tr>
                        
                    </table>
                   <?php
                echo form_close();
               ?>
                    
                     

                    </div>
                    
                    
                    
                </div><!--/span-->
            
            </div><!--/row-->
</div>
</div>
<hr>