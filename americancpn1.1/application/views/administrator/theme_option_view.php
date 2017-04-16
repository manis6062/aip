



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Manage Theme

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
//$CI = &get_instance();
//$category = $CI -> PortfolioCategoryModel -> getAll();
//$path = THEME_OPTION_IMAGE_PATH;
//?>
<!--<div id="content" class="span10">-->
<!--            <!-- content starts -->-->
<!--            <div class="row-fluid sortable">-->
<!--                <div class="box span12">-->
<!--                    <div class="box-header well" data-original-title>-->
<!--                        <h2><i class="icon-edit"></i>--><?php //echo $title; ?><!--</h2>-->
<!--                    </div>-->
<!--                    <div class="box-content">-->
<!--                    	 --><?php
//                            if ($this->session->flashdata('su_message')) {
//                                ?>
<!--                                <div class="message info"><p>--><?php //echo $this->session->flashdata('su_message') ?><!--<p></div> -->
<!--                                --><?php //} ?>
<!--                        --><?php
//                        if($error)
//                        {
//
//                            ?>
<!--                             <div class="message error">-->
<!--                             --><?php
//							foreach ($error as $value) {
//								echo $value;
//							}
//                             ?>
<!--                             </div> -->
<!--                            --><?php //} ?>
<!--                            --><?php
//                        if(validation_errors())
//                        {
//
//                            ?>
<!--                             <div class="message error">--><?php //echo validation_errors(); ?><!--</div> -->
<!--                            --><?php //} ?>
<!--                         --><?php //$attributes = array('class' => 'formular', 'id' => 'form');
//								echo form_open_multipart(ADMIN_PATH . 'theme_option/update', $attributes);
//                           ?>
<!--                    <table class="form">-->
<!--                    	--><?php //if(!empty($themeoption)){?>
<!--	                    	<input name="id" id="id" type="hidden" value="--><?php //echo $themeoption -> id; ?><!--"/>-->
<!--	                        <input name="old_fav_icon" id="old_fav_icon" type="hidden" value="--><?php //echo $themeoption -> fav_icon; ?><!--"/>-->
<!--	                        <input name="old_logo" id="old_logo" type="hidden" value="--><?php //echo $themeoption -> logo; ?><!--"/>-->
<!--                        --><?php //} ?>
<!--                        <tr>-->
<!--                        	<td colspan="2"><legend>Header Options</legend></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td class="col1">-->
<!--                                --><?php //$attributes = array('class' => 'left', );
//								echo form_label('Heading Title:', 'title', $attributes);
//                                ?>
<!--                            </td>-->
<!--                            <td class="col2">-->
<!--                                --><?php
//								if (!empty($themeoption)) {
//									$data = array('name' => 'title', 'id' => 'title', 'value' => set_value('title') == "" ? $themeoption -> title : set_value('title'), 'class' => 'medium', );
//								} else {
//									$data = array('name' => 'title', 'id' => 'title', 'value' => set_value('title'), 'class' => 'medium', );
//								}
//								echo form_input($data);
//                                ?>
<!--                            </td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td class="col1">-->
<!--                                --><?php //$attributes = array('class' => 'left', );
//								echo form_label('Heading Caption:', 'caption', $attributes);
//                                ?>
<!--                            </td>-->
<!--                            <td class="col2">-->
<!--                                --><?php
//								if (!empty($themeoption)) {
//									$data = array('name' => 'caption', 'id' => 'caption', 'value' => set_value('caption') == "" ? $themeoption -> caption : set_value('caption'), 'class' => 'medium', );
//								} else {
//									$data = array('name' => 'caption', 'id' => 'caption', 'value' => set_value('caption'), 'class' => 'medium', );
//								}
//								echo form_input($data);
//                                ?>
<!--                            </td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td class="col1">-->
<!--                           -->
<!--                                --><?php //$attributes = array('class' => 'left', );
//							echo form_label('Fav icon:', 'fav_icon', $attributes);
//                                    ?>
<!--                            </td>-->
<!--                            <td class="col2">-->
<!--                                --><?php //$data = array('name' => 'fav_icon', 'id' => 'fav_icon', 'value' => '', 'class' => 'medium', 'onchange' => 'readFav(this)');
//								echo form_upload($data);
//                            ?><!--(Max Filesize: 1Mb)<br/>-->
<!--                            --><?php //if(!empty($themeoption)){?>
<!--                            	<img id="blah4" --><?php //if($themeoption->fav_icon==''){?><!--style="display: none;"--><?php //} ?><!-- src="--><?php //echo base_url() . $path . $themeoption -> fav_icon; ?><!--" alt=""/>-->
<!--                            --><?php //} ?><!--	-->
<!--                            </td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td class="col1">-->
<!--                                --><?php //$attributes = array('class' => 'left', );
//								echo form_label('Header Background Color:', 'head_back_color', $attributes);
//                                ?>
<!--                            </td>-->
<!--                            <td class="col2">-->
<!--                                --><?php
//								if (!empty($themeoption)) {
//									$data = array('name' => 'head_color', 'id' => 'head_color', 'value' => set_value('head_color') == "" ? $themeoption -> head_color : set_value('head_color'), 'class' => 'medium color', );
//								} else {
//									$data = array('name' => 'head_color', 'id' => 'head_color', 'value' => set_value('head_color'), 'class' => 'medium color', );
//								}
//								echo form_input($data);
//                                ?>
<!--                            </td>-->
<!--                        </tr>-->
<!--                        <!-- <tr>-->
<!--                            <td class="col1">-->
<!--                           -->
<!--                                --><?php //$attributes = array('class' => 'left', );
//							echo form_label('Affiliation Background Image:', 'header_back_image', $attributes);
//                                    ?>
<!--                            </td>-->
<!--                            <td class="col2">-->
<!--                                --><?php //$data = array('name' => 'header_image', 'id' => 'header_image', 'value' => '', 'class' => 'medium', 'onchange' => 'readBackimage(this)');
//								echo form_upload($data);
//                            ?><!--(Max Filesize: 1Mb)<br/>-->
<!--                            --><?php //if(!empty($themeoption)){?>
<!--                            <img id="blah2" --><?php //if($themeoption->head_back_image==''){?><!--style="display: none;"--><?php //} ?><!-- src="--><?php //echo base_url() . $path . $themeoption -> head_back_image; ?><!--" alt="" width="40%"/>-->
<!--                            	<br /><div id="back_image">-->
<!--                            		--><?php
//									if ($themeoption -> head_back_image != '') {
//
//										$data = array('name' => 'remove_back_background', 'id' => 'remove_back', 'class' => 'medium remove_back', 'value' => 'true', 'content' => 'Remove Header Background Image',
//										// 'checked'     => FALSE,
//										'onclick' => 'chkimagehead(this)', );
//										echo form_button($data);
//										// echo "Remove";
//									}
//								?>
<!--								</div>-->
<!--							--><?php //}?><!--	-->
<!--                            </td>-->
<!--                        </tr> -->-->
<!--                        <tr>-->
<!--                        	<td>&nbsp;</td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                        	<td colspan="2"><legend>Logo Option</legend></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td class="col1">-->
<!--                           -->
<!--                                --><?php //$attributes = array('class' => 'left', );
//							echo form_label('Logo:', 'logo', $attributes);
//                                    ?>
<!--                            </td>-->
<!--                            <td class="col2">-->
<!--                                --><?php //$data = array('name' => 'logo', 'id' => 'logo', 'value' => '', 'class' => 'medium', 'onchange' => 'readLogo(this)');
//								echo form_upload($data);
//                            ?><!--(Max Filesize: 1Mb)(Max width:200px and Max height:65px)<br/>-->
<!--                            --><?php //if(!empty($themeoption)){?>
<!--                            	<img id="blah1" --><?php //if($themeoption->logo==''){?><!--style="display: none;"--><?php //} ?><!-- src="--><?php //echo base_url() . $path . $themeoption -> logo; ?><!--" alt=""/>-->
<!--                            --><?php //} ?><!--		-->
<!--                            </td>-->
<!--                        </tr>                        -->
<!--                        <tr>-->
<!--                        	<td>&nbsp;</td>-->
<!--                        </tr>-->
<!--                        -->
<!--                        -->
<!--                        -->
<!--                        -->
<!--                        -->
<!--                        -->
<!--                        -->
<!--                        -->
<!--                        -->
<!--                        -->
<!--                        -->
<!--                        -->
<!--                        -->
<!--                        --><?php //if(!empty($themeoption)){?>
<!-- <!--                        I added-->
<!-- --> -->
<!--                       <tr>-->
<!--                        <td colspan="2"><legend>Feature Options</legend></td>-->
<!--                        </tr>-->
<!--                     -->
<!--                        <tr>-->
<!--                        	<td>-->
<!--                            	<h3> Feature 1</h3>-->
<!--                        	</td>-->
<!--                        </tr>-->
<!--                        -->
<!--                            <td class="col1">-->
<!--                            <p>Heading </p></td>-->
<!--                            <td class="col2">-->
<!--                                <input name="featureheading1" type="text" id="featureheading1" value="--><?php //echo $themeoption -> featureheading1; ?><!--">-->
<!--                            </td>-->
<!--                        <tr>-->
<!--                        </tr>-->
<!--                            <td class="col1">-->
<!--                                Tagline-->
<!--                            </td>-->
<!--                            <td class="col2">-->
<!--                                <input name="featuretagline1" type="text" id="featuretagline1" value="--><?php //echo $themeoption -> featuretagline1; ?><!--">-->
<!--                            </td>-->
<!--                            -->
<!--                        <tr>-->
<!--                        </tr>-->
<!--                            <td class="col1">-->
<!--                                Description-->
<!--                            </td>-->
<!--                            <td class="col2">-->
<!--                            <textarea name="featuredesc1" id="featuredescription">--><?php //echo $themeoption -> featuredesc1; ?><!--</textarea>-->
<!--                            </td>-->
<!--                        </tr>-->
<!---->
<!---->
<!--                        <tr>-->
<!--                        	<td>-->
<!--                            	<h3> Feature 2</h3>-->
<!--                        	</td>-->
<!--                        </tr>-->
<!--                        -->
<!--                            <td class="col1">-->
<!--                            <p>Heading </p></td>-->
<!--                            <td class="col2">-->
<!--                                <input name="featureheading2" type="text" id="featureheading2" value="--><?php //echo $themeoption -> featureheading2; ?><!--">-->
<!--                            </td>-->
<!--                        <tr>-->
<!--                        </tr>-->
<!--                            <td class="col1">-->
<!--                                Tagline-->
<!--                            </td>-->
<!--                            <td class="col2">-->
<!--                                <input name="featuretagline2" type="text" id="featuretagline2" value="--><?php //echo $themeoption -> featuretagline2; ?><!--">-->
<!--                            </td>-->
<!--                            -->
<!--                        <tr>-->
<!--                        </tr>-->
<!--                            <td class="col1">-->
<!--                                Description-->
<!--                            </td>-->
<!--                            <td class="col2">-->
<!--                            <textarea name="featuredesc2" id="featuredescription">--><?php //echo $themeoption -> featuredesc2; ?><!--</textarea>-->
<!--                            </td>-->
<!--                        </tr>-->
<!---->
<!---->
<!--                        <tr>-->
<!--                        	<td>-->
<!--                            	<h3> Feature 3</h3>-->
<!--                        	</td>-->
<!--                        </tr>-->
<!--                        -->
<!--                            <td class="col1">-->
<!--                            <p>Heading </p></td>-->
<!--                            <td class="col2">-->
<!--                                <input name="featureheading3" type="text" id="featureheading3" value="--><?php //echo $themeoption -> featureheading3; ?><!--">-->
<!--                            </td>-->
<!--                        <tr>-->
<!--                        </tr>-->
<!--                            <td class="col1">-->
<!--                                Tagline-->
<!--                            </td>-->
<!--                            <td class="col2">-->
<!--                                <input name="featuretagline3" type="text" id="featuretagline3" value="--><?php //echo $themeoption -> featuretagline3; ?><!--">-->
<!--                            </td>-->
<!--                            -->
<!--                        <tr>-->
<!--                        </tr>-->
<!--                            <td class="col1">-->
<!--                                Description-->
<!--                            </td>-->
<!--                            <td class="col2">-->
<!--                            <textarea name="featuredesc3" id="featuredescription">--><?php //echo $themeoption -> featuredesc3; ?><!--</textarea>-->
<!--                            </td>-->
<!--                        </tr>-->
<!---->
<!--                        -->
<!--                        -->
<!--                        -->
<!--                        -->
<!--                         <tr>-->
<!--                        <td colspan="2"><legend>Video</legend></td>-->
<!--                        </tr>-->
<!--                     -->
<!--                    -->
<!--                        -->
<!--                            <td class="col1">-->
<!--                            <p>Youtube iFrame Source</p></td>-->
<!--                            <td class="col2">-->
<!--                             <textarea name="theme_video" id="featuredescription">--><?php //echo $themeoption -> theme_video; ?><!--</textarea>&nbsp;&nbsp;(example:www.youtube.com/embed/NLPQzy-THKs?feature=player_detailpage)-->
<!--                            </td>-->
<!--                        <tr>-->
<!--                        -->
<!--                        -->
<!--                        -->
<!--                        --><?php //} else{ ?>
<!--                        	<tr>-->
<!--                        <td colspan="2"><legend>Feature Options</legend></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                        -->
<!--                        <tr>-->
<!--                        	<td>-->
<!--                            	<h3> Feature 1</h3>-->
<!--                        	</td>-->
<!--                        </tr>-->
<!--                        -->
<!--                            <td class="col1">-->
<!--                            <p>Heading </p></td>-->
<!--                            <td class="col2">-->
<!--                                <input name="featureheading1" type="text" id="featureheading1">-->
<!--                            </td>-->
<!--                        <tr>-->
<!--                        </tr>-->
<!--                            <td class="col1">-->
<!--                                Tagline-->
<!--                            </td>-->
<!--                            <td class="col2">-->
<!--                                <input name="featuretagline1" type="text" id="featuretagline1">-->
<!--                            </td>-->
<!--                            -->
<!--                        <tr>-->
<!--                        </tr>-->
<!--                            <td class="col1">-->
<!--                                Description-->
<!--                            </td>-->
<!--                            <td class="col2">-->
<!--                            <textarea name="featuredesc1" id="featuredescription"></textarea>-->
<!--                            </td>-->
<!--                        </tr>-->
<!---->
<!---->
<!--                        <tr>-->
<!--                        	<td>-->
<!--                            	<h3> Feature 2</h3>-->
<!--                        	</td>-->
<!--                        </tr>-->
<!--                        -->
<!--                            <td class="col1">-->
<!--                            <p>Heading </p></td>-->
<!--                            <td class="col2">-->
<!--                                <input name="featureheading2" type="text" id="featureheading2">-->
<!--                            </td>-->
<!--                        <tr>-->
<!--                        </tr>-->
<!--                            <td class="col1">-->
<!--                                Tagline-->
<!--                            </td>-->
<!--                            <td class="col2">-->
<!--                                <input name="featuretagline2" type="text" id="featuretagline2">-->
<!--                            </td>-->
<!--                            -->
<!--                        <tr>-->
<!--                        </tr>-->
<!--                            <td class="col1">-->
<!--                                Description-->
<!--                            </td>-->
<!--                            <td class="col2">-->
<!--                            <textarea name="featuredesc2" id="featuredescription"></textarea>-->
<!--                            </td>-->
<!--                        </tr>-->
<!---->
<!---->
<!--                        <tr>-->
<!--                        	<td>-->
<!--                            	<h3> Feature 3</h3>-->
<!--                        	</td>-->
<!--                        </tr>-->
<!--                        -->
<!--                            <td class="col1">-->
<!--                            <p>Heading </p></td>-->
<!--                            <td class="col2">-->
<!--                                <input name="featureheading3" type="text" id="featureheading3">-->
<!--                            </td>-->
<!--                        <tr>-->
<!--                        </tr>-->
<!--                            <td class="col1">-->
<!--                                Tagline-->
<!--                            </td>-->
<!--                            <td class="col2">-->
<!--                                <input name="featuretagline3" type="text" id="featuretagline3">-->
<!--                            </td>-->
<!--                            -->
<!--                        <tr>-->
<!--                        </tr>-->
<!--                            <td class="col1">-->
<!--                                Description-->
<!--                            </td>-->
<!--                            <td class="col2">-->
<!--                            <textarea name="featuredesc3" id="featuredescription"></textarea>-->
<!--                            </td>-->
<!--                        </tr>	-->
<!--                        -->
<!--                        -->
<!--                        -->
<!--                                     <tr>-->
<!--                        <td colspan="2"><legend>Video</legend></td>-->
<!--                        </tr>-->
<!--                     -->
<!--                    -->
<!--                        -->
<!--                            <td class="col1">-->
<!--                            <p>iFrame</p></td>-->
<!--                            <td class="col2">-->
<!--                             <textarea name="theme_video" id="featuredescription"></textarea>-->
<!--                            </td>-->
<!--                        <tr>-->
<!--                        -->
<!--                        	-->
<!--                        --><?php //} ?>
<!--                        -->
<!--                        -->
<!--                        -->
<!--                        -->
<!--                        -->
<!--                        -->
<!--                        -->
<!--                        -->
<!--                        -->
<!--                        <tr>-->
<!--                        	<td colspan="2"><legend>Footer Option</legend></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td class="col1">-->
<!--                                --><?php //$attributes = array('class' => 'left', );
//								echo form_label('Footer Background Color:', 'footer_color', $attributes);
//                                ?>
<!--                            </td>-->
<!--                            <td class="col2">-->
<!--                                --><?php
//								if (!empty($themeoption)) {
//									$data = array('name' => 'footer_color', 'id' => 'footer_color', 'value' => set_value('footer_color') == "" ? $themeoption -> footer_color : set_value('footer_color'), 'class' => 'medium color', );
//								} else {
//									$data = array('name' => 'footer_color', 'id' => 'footer_color', 'value' => set_value('footer_color'), 'class' => 'medium color', );
//								}
//								echo form_input($data);
//                                ?>
<!--                            </td>-->
<!--                        </tr>-->
<!--                        <!-- <tr>-->
<!--                            <td class="col1">-->
<!--                           -->
<!--                                --><?php //$attributes = array('class' => 'left', );
//							echo form_label('Video Background Image:', 'footer_back_image', $attributes);
//                                    ?>
<!--                            </td>-->
<!--                            <td class="col2">-->
<!--                                --><?php //$data = array('name' => 'footer_image', 'id' => 'footer_image', 'value' => '', 'class' => 'medium', 'onchange' => 'readFooterimage(this)');
//								echo form_upload($data);
//                            ?><!--(Max Filesize: 1Mb)<br/>-->
<!--                            --><?php //if(!empty($themeoption)){?>
<!--                            <img id="blah3" --><?php //if($themeoption->footer_back_image==''){?><!--style="display: none;"--><?php //} ?><!-- src="--><?php //echo base_url() . $path . $themeoption -> footer_back_image; ?><!--" alt="" width="40%"/><br />-->
<!--                            	<div id="foot_image">-->
<!--                            		--><?php
//									if ($themeoption -> footer_back_image != '') {
//
//										$data = array('name' => 'remove_footer_background', 'id' => 'remove_footer', 'class' => 'medium remove_footer', 'value' => 'true', 'content' => 'Remove Footer Background Image',
//										// 'checked'     => FALSE,
//										'onclick' => 'chkimage(this)', );
//										echo form_button($data);
//										// echo "Remove";
//									}
//								?>
<!--								</div>-->
<!--							--><?php //}?><!--	-->
<!--                            </td>-->
<!--                        </tr> -->-->
<!--                        <tr>-->
<!--                        	<td>&nbsp;</td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                        	<td colspan="2"><legend>Custom Css Option</legend></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td class="col1">-->
<!--                                --><?php //$attributes = array('class' => 'left', );
//								echo form_label('Custom Css:', 'custom_css', $attributes);
//                                ?>
<!--                            </td>-->
<!--                            <td class="col2">-->
<!--                                --><?php
//								if (!empty($themeoption)) {
//									$data = array('name' => 'custom_css', 'id' => 'custom_css', 'value' => set_value('custom_css') == "" ? $themeoption -> custom_css : set_value('custom_css'), 'class' => 'medium', );
//								} else {
//									$data = array('name' => 'custom_css', 'id' => 'custom_css', 'value' => set_value('custom_css'), 'class' => 'medium', );
//								}
//								echo form_textarea($data);
//                                ?>
<!--                            </td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td>-->
<!--                                <label>-->
<!--                                    &nbsp;</label>-->
<!--                            </td>-->
<!--                            <td>-->
<!--                               --><?php
//							if (!empty($themeoption)) {
//								$data = array('name' => 'submit', 'id' => 'submit', 'value' => 'Update', 'class' => 'btn btn-primary', );
//							} else {
//								$data = array('name' => 'submit', 'id' => 'submit', 'value' => 'Save', 'class' => 'btn btn-primary', );
//							}
//							echo form_submit($data);
//							// $data = array('name' => 'reset', 'id' => 'reset', 'value' => 'Clear', 'class' => 'btn btn-primary', );
//							// echo form_reset($data);
//                            ?>
<!--                            </td>-->
<!--                        </tr>-->
<!--                        -->
<!--                    </table>-->
<!--                   --><?php //echo form_close(); ?>
<!--                   </div>-->
<!--                </div><!--/span-->-->
<!---->
<!--            </div><!--/row-->  -->
<!--    </div>-->
<!--    </div>-->
<!--<hr>-->