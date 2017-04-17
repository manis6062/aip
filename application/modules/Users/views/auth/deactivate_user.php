<div class="container-fluid">
    <div id="infoMessage" style="color:red;">
        <?php if (!empty($message)) {
            echo '<hr>' . $message;
        };
        ?>
    </div>
</div>


<div class="container-fluid"><hr>
    <div class="row-fluid">
        <div class="span10">
            <h1><?php echo lang('deactivate_heading'); ?></h1>
            <p><?php echo sprintf(lang('deactivate_subheading'), $user->username); ?></p>

                <?php echo form_open("Users/auth/deactivate/" . $user->id); ?>

            <p>
                <?php echo lang('deactivate_confirm_y_label', 'confirm'); ?>
                <input type="radio" name="confirm" value="yes" checked="checked" />
<?php echo lang('deactivate_confirm_n_label', 'confirm'); ?>
                <input type="radio" name="confirm" value="no" />
            </p>
            
            
            
            

<?php echo form_hidden($csrf); ?>
<?php echo form_hidden(array('id' => $user->id)); ?>

            
            
           <input type="submit" value="Submit" class="btn btn-success">

<?php echo form_close(); ?>
        </div>
    </div>
</div>

