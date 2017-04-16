<div id="content" class="span10">
            <!-- content starts -->
            <div class="row-fluid">
                <div class="box span12">
                    <div class="box-header well" data-original-title>
                        <h2><i class="icon-edit"></i> <?php echo $title; ?></h2>
                    </div>
                    <div class="box-content">
                        <?php 
						if(validation_errors())
						{
							
							?>
							 <div class="message error"><?php echo validation_errors();  ?></div> 
							<?php
						}
					   ?>
                		 <?php
						   $attributes = array('class' => 'formular');
						   echo form_open(ADMIN_PATH.'news/update/'.$offset, $attributes);
						   ?>
                    <table class="form">
                        <tr>
                            <td class="col1">
                                <?php
									$attributes = array(
									'class' => 'left',
								);
								echo form_label('Title:', 'name', $attributes);
									?>
                            </td>
                            <td class="col2">
                                <?php 
							$data = array(
							  'name'        => 'news_title',
							  'id'          => 'news_title',
							  'value'       =>  set_value('news_title')==""?$newsRecord->news_title:set_value('news_title'),
							  'class'        => 'medium',
							);
							echo form_input($data); 
								?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <label>
                                   Brief Description:</label>
                            </td>
                            <td>
                                <textarea class="medium" id="description"  style="width:100%"  name="news_brief" ><?php echo set_value('news_brief')==""?$newsRecord->news_brief:set_value('news_brief'); ?></textarea>
                            </td>
                        </tr>
                         
                        <tr>
                            <td>
                                <label>
                                   Detail Description:</label>
                            </td>
                            <td>
                              <textarea class="medium" id="detail_description"  style="width:100%"  name="news_details" ><?php echo set_value('news_details')==""?$newsRecord->news_details:set_value('news_details') ?></textarea>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="col1">
                                <?php
									$attributes = array(
									'class' => 'left',
								);
								echo form_label('Date:', 'name', $attributes);
									?>
                            </td>
                            <td class="col2">
                                <?php 
							$data = array(
							  'name'        => 'news_date',
							  'id'          => 'news_date',
							  'value'       => set_value('news_date')==""?$newsRecord->news_date:set_value('news_date'),
							  'class'        => 'input-xlarge datepicker',
							);
							echo form_input($data); 
								?>
                            </td>
                        </tr>
                        <tr>
                            <td class="col1">
                                <?php
									$attributes = array(
									'class' => 'left',
								);
								echo form_label('Status:', 'name', $attributes);
									?>
                            </td>
                            <td class="col2">
                               <select name="news_status" class="chzn-select medium select" style="width:390px;">
                    
                              <option value="yes" <?php if(set_value("news_status")=='yes' || $newsRecord->news_status=='yes'){ echo 'selected="selected"';} ?>>Yes</option>
                              <option value="no" <?php if(set_value("news_status")=='no' || $newsRecord->news_status=='no'){ echo 'selected="selected"';} ?>>No</option>
                              
						  
                          </select>
                            </td>
                        </tr>
                       
                      
                        
                        
                       
                        
                        <tr>
                            <td>
                                <label>
                                    &nbsp;</label>
                            </td>
                            <td>
                             <input type="hidden" name="news_id" value="<?php  echo $newsRecord->news_id;?>" />
                 			<input type="hidden" name="updt_cnt" value="<?php  echo $newsRecord->updt_cnt;?>" />
                               <?php 
							$data = array(
							  'name'        => 'submit',
							  'id'          => 'submit',
							  'value'       => 'Save',
							  'class'        => 'btn btn-primary',
							);
							
							echo form_submit($data); 
							$data = array(
							  'name'        => 'reset',
							  'id'          => 'reset',
							  'value'       => 'Clear',
							  'class'        => 'btn btn-primary',
							);
							echo form_reset($data); 
							?>
                            </td>
                        </tr>
                        
                    </table>
                   <?php
			   echo form_close();
			   ?>
                    
                	
                </div>
            </div>
            
        </div>
        
    </div>
    </div>
<hr>