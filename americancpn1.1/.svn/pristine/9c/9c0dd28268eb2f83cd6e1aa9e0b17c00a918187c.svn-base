<section id="register-page">
    <div class="top-legal">
        <div class="center">
            <h1><?php echo $title; ?></h1>
        </div>
    </div>
    <div class="container">

        <!-- <h2 style="text-align: center">Login</h2> -->

        <div class="col-lg-3"></div>
        <div class="col-lg-6">


            <?php $attributes = array('id' => 'login-form', 'class' => 'form-horizontal box1');
            echo form_open(base_url() . 'member/signin', $attributes);
            ?>
            <?php
            if ($this->session->flashdata('message')) {
                ?>
                <div class="message info">
                    <p><?php echo $this->session->flashdata('message') ?></p>
                </div>
            <?php } ?>

            <?php //	if(validation_errors())
            //{
            ?>
            <?php //echo validation_errors(); ?>
            <?php //} ?>



            <div class="form-group">

                <label for="username" class="col-sm-4 control-label">Username *</label>

                <div class="col-sm-8">
                    <?php $data = array('name' => 'username', 'id' => 'uname', 'placeholder' => 'Enter Your Username', 'value' => set_value('uname'), 'class' => 'form-control',);
                    echo form_input($data);
                    // echo form_error('afname');
                    ?>
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-4 control-label">Password *</label>

                <div class="col-sm-8">
                    <?php $data = array('name' => 'password', 'type' => 'password', 'placeholder' => 'Enter Password', 'id' => 'password', 'value' => set_value('password'), 'class' => 'form-control',);
                    echo form_input($data);
                    //echo form_error('alname');
                    ?>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <?php
                    $data = array('name' => 'submit', 'id' => 'submit', 'value' => 'Login', 'class' => 'btn btn-default',);
                    echo form_submit($data);
                    ?>
                </div>
            </div>

            <?php echo form_close(); ?>


        </div>
        <div class="col-lg-3"></div>

        <!--/.row-->
    </div>
    <!--/.container-->
</section><!--/#contact-page-->
