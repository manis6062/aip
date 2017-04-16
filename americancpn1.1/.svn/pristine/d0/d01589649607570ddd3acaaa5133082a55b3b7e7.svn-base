<style>

    .editable-container.editable-inline .control-group.form-group .editable-input textarea,

    .editable-container.editable-inline .control-group.form-group .editable-input input:not([type=radio]):not([type=checkbox]):not([type=submit])
    {
        width: 700px;
    }
</style>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <?php echo $title;?>
            <small><?php echo $action;?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url() . 'administrator'; ?>"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="<?php echo base_url() . 'administrator/'.$title; ?>"><?php echo $title;?>s</a></li>
            <li class="active"><?php echo $action;?></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">update question no.: <?php echo $content->content_id;?></h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <?php echo form_label('question', 'Question'); ?>
                                <a href="#" id="content_title" data-type="text" data-emptytext="enter question "><?php echo $content->content_title; ?></a>
                            </div>
                            <div class="form-group col-md-12">
                                <?php echo form_label('answer', 'Answer'); ?>
                                <a href="#" id="content_description" data-type="textarea" data-emptytext="enter answer "><?php echo $content->content_description; ?></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

<!--<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js" type="text/javascript"></script>-->
<script>
    //CKEDITOR.inline( 'content_description' );
    $.fn.editable.defaults.mode = 'inline';
    $('#content_title, #content_description').editable({
        pk: '<?php echo $content->content_id;?>',
        url: '<?php echo base_url() . 'administrator/post'; ?>',
        params: function (params) {
            params.table = 'content';
            return params;
        },
        success: function (response, newValue) {
            if (response.status == 'error') return response.msg;
        }
    });


</script>

