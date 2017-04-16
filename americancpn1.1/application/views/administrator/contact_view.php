

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Manage Contact

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

<!--<script src="http://code.jquery.com/jquery-1.9.1.js"></script>-->
<!--    <script type="text/javascript">-->
<!--        $(function() {-->
<!--            $('input[type="checkbox"]').on('change', function() {-->
<!--                $(this).closest('fieldset').find('.myClass').toggle(this.checked);-->
<!--            });-->
<!--        -->
<!--             $('input[type="checkbox"]').on('change', function() {-->
<!--                $(this).closest('fieldset').find('.myClass2').toggle(this.checked);-->
<!--            });-->
<!--        -->
<!--        });-->
<!--    </script>-->
<!---->
<!--<div id="content" class="span10">-->
<!--            <!-- content starts -->-->
<!--            <div class="row-fluid">-->
<!--                <div class="box span12">-->
<!--                    <div class="box-header well" data-original-title>-->
<!--                        <h2><i class="icon-edit"></i>--><?php //echo $title;?><!--</h2>-->
<!--                    </div>-->
<!--                    <div class="box-content">-->
<!--                        --><?php
//                            if ($this->session->flashdata('su_message')) {
//                                ?>
<!--                                <div class="message info"><p>--><?php //echo $this->session->flashdata('su_message') ?><!--<p></div> -->
<!--                                --><?php //} ?>
<!--                         --><?php //$attributes = array('class' => 'formular', 'id' => 'form');
//						 	if(!empty($contact)){
//                                echo form_open_multipart(ADMIN_PATH.'contact/update', $attributes);
//							}else{
//								echo form_open_multipart(ADMIN_PATH.'contact/insert', $attributes);
//							}
//                           ?>
<!--                                -->
<!--                    <fieldset>-->
<!--                    	-->
<!--                        <legend>Google Map <input type="checkbox" name="google" value="T" --><?php ////if(!empty($contact) && $contact->GOOGLE == 'T'){?><!-- checked --><?php ////}?><!--></legend>-->
<!--                        <span class="myClass"--><?php //if(!empty($contact) && $contact->GOOGLE != 'T'){?><!-- style="display:none" --><?php //}?><!-- >-->
<!---->
<!--                            Google Map Iframe Source: <input type=text name="source" value="--><?php //if(!empty($contact)){ echo $contact->source;}?><!--">-->
<!--                            </span>-->
<!--                    </fieldset>-->
<!---->
<!--                    <fieldset>-->
<!--                        <legend>Contact US Form <input type="checkbox" name="form" value="T"  --><?php ////if(!empty($contact) && $contact->CONTACT_FORM == 'T'){?><!-- checked --><?php ////}?><!--></legend>-->
<!--                        <span class="myClass2" --><?php //if(!empty($contact) && $contact->CONTACT_FORM != 'T'){?><!-- style="display:none"--><?php //}?><!-->-->
<!--                            Address: <input type=text name="address" value="--><?php //if(!empty($contact)){ echo $contact->address;}?><!--" ><br>-->
<!--                            Phone: <input type=text name="phone" value="--><?php //if(!empty($contact)){ echo $contact->tel;}?><!--" ><br>-->
<!--                            Website: <input type=text name="site" value="--><?php //if(!empty($contact)){ echo $contact->site;}?><!--" ><br>-->
<!--                            Email Address: <input type=text name="email" value="--><?php //if(!empty($contact)){ echo $contact->email;}?><!--" ><br>-->
<!--                            </span>-->
<!--                    </fieldset>-->
<!--                    			<input type="hidden" name ="id" class="btn btn-primary" value="--><?php //if(!empty($contact)){ echo $contact->id;}?><!--">-->
<!--                                <input type="submit" name ="submit" class="btn btn-primary" value="SAVE">       -->
<!--                   --><?php
//                echo form_close();
//               ?>
<!--                                -->
<!--                    -->
<!--                     -->
<!---->
<!--                    </div>-->
<!--                </div><!--/span-->-->
<!---->
<!--            </div><!--/row-->  -->
<!--    </div> -->
<!--    </div>-->
<!--<hr>-->
<!---->
<!---->
<!---->
<!---->
<!---->
