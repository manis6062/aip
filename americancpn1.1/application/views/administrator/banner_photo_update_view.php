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
						if($error)
						{
							
							?>
							 <div class="message error">
							 <?php 
							
							 foreach($error as $value)
							 {
								 echo $value;
							 }
							 ?>
							 </div> 
							<?php
						}
					   ?>
                		 <?php
						   $attributes = array('class' => 'formular');
						   echo form_open_multipart(ADMIN_PATH.'banner/update/'.$offset, $attributes);
						   ?>
                    <table class="form">
                        <tr>
                            <td class="col1">
                           <input type="hidden" name="old_image" value="<?php echo $photoRecord->path; ?>">
                           <input type="hidden" name="old_mimage" value="<?php echo $photoRecord->mimage; ?>">
                           <input type="hidden" name="old_rimage" value="<?php echo $photoRecord->rimage; ?>">
                           <input type="hidden" name="updt_cnt" value="<?php echo $photoRecord->updt_cnt; ?>">
                            <input type="hidden" name="slider_id" value="<?php echo $photoRecord->slider_id; ?>">
                                <?php
									$attributes = array(
									'class' => 'left',
								);
								echo form_label('Banner Backgound Image:', 'name', $attributes);
									?>
                            </td>
                            <td class="col2">
                                <?php 
							$data = array(
							  'name'        => 'path',
							  'id'          => 'path',
							  'value'       => '',
							  'class'        => '',
							  'onchange'     => 'readURL(this)',
							);
							echo form_upload($data); 
							?> (Max Filesize: 1Mb)<br/>
							<?php 
							     $path = BANNER_IMAGE_PATH;
							?>
                            <img id="blah" src="<?php echo '../../../.'.$path.$photoRecord->path;?>" alt="" width="20%"/>
                            </td>
                        </tr>
                        
                        
                        <tr>
                            <td class="col1">
                          
                                <?php
									$attributes = array(
									'class' => 'left',
								);
								echo form_label('Banner Middle Image:', 'name', $attributes);
									?>
                            </td>
                            <td class="col2">
                                <?php 
							$data = array(
							  'name'        => 'mimage',
							  'id'          => 'mimage',
							  'value'       => '',
							  'class'        => '',
							  'onchange'     => 'readURL1(this)',
							);
							echo form_upload($data); 
							?> (Max Filesize: 1Mb)<br/>
							<?php 
							     $path = BANNER_IMAGE_PATH;
							?>
                            <img id="blah1" src="<?php echo '../../../.'.$path.$photoRecord->mimage;?>" alt="" width="20%"/>
                            </td>
                        </tr>
                        
                        
                        <tr>
                            <td class="col1">
                          
                                <?php
									$attributes = array(
									'class' => 'left',
								);
								echo form_label('Banner Right Image:', 'name', $attributes);
									?>
                            </td>
                            <td class="col2">
                                <?php 
							$data = array(
							  'name'        => 'rimage',
							  'id'          => 'rimage',
							  'value'       => '',
							  'class'        => '',
							  'onchange'     => 'readURL2(this)',
							);
							echo form_upload($data); 
							?> (Max Filesize: 1Mb)<br/>
							<?php 
							     $path = BANNER_IMAGE_PATH;
							?>
                            <img id="blah2" src="<?php echo '../../../.'.$path.$photoRecord->rimage;?>" alt="" width="20%"/>
                            </td>
                        </tr>
                        
                        
                        
                        
                      <tr>
                            <td class="col1">
                                <?php
									$attributes = array(
									'class' => 'left',
								);
								echo form_label('Description:', 'index', $attributes);
									?>
                            </td>
                            <td class="col2">
                                  <?php 
								$data = array(
								  'name'        => 'description',
								  'id'          => 'description',
								  'value'       => set_value('description')==""?$photoRecord->description:set_value('description'),
								  'class'        => 'medium',
								  'rows'		=>'5',
								);
								echo form_textarea($data); 
								?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    Status:</label>
                            </td>
                            <td>
                              <?php
								$extra='style="width:390px;" class="chzn-select medium select"';
								$options = array(
								  'yes'  => 'Yes',
								  'no'    => 'No',
								);
								echo form_dropdown('publish', $options, set_value('publish')==""?$photoRecord->publish:set_value('publish'),$extra);
								?> 
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <label>
                                    &nbsp;</label>
                            </td>
                            <td>
                               <?php 
							$data = array(
							  'name'        => 'submit',
							  'id'          => 'submit',
							  'value'       => 'Update',
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