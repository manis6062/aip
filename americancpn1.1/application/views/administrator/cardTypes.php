<div class="content-wrapper">
    <section class="content-header">
        <h1>
            card types
            <small>all</small>
            <a class="btn btn-link" href="<?php echo base_url() . 'administrator/cardType/cardTypeForm'; ?>">add a card
                type</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">card types</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-6">
                <div class="box">
                    <div class="box-body">
                        <table class="table table-bordered table-striped table-hover" id="cardTypes">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>type</th>
                                <th>name</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if ($data != 0 && count($data) > 0) {
                                foreach ($data as $key => $card) {
                                    ?>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1"><?php echo $card->id; ?></td>
                                        <td><a href="" data-type="text" id="type"
                                               data-emptytext="enter card type"
                                               data-pk=<?php echo $card->id; ?>> <?php echo $card->type; ?> </a>
                                        </td>
                                        <td><a href="" data-type="text" id="name"
                                               data-emptytext="enter card name"
                                               data-pk=<?php echo $card->id; ?>> <?php echo $card->name; ?> </a>
                                        </td>
                                        <td>
                                            <button type="button"
                                                    onclick="deleteCard(<?php echo $card->id ?>)">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                <?php }
                            } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    $('#cardTypes').DataTable();
    $.fn.editable.defaults.mode = 'inline';
    $('#cardTypes a').editable({
        url: '<?php echo base_url() . 'administrator/post'; ?>',
        params: function (params) {
            params.table = 'line_type';
            return params;
        },
        success: function (response, newValue) {
            if (response.status == 'error') return response.msg;
        }
    });
    function deleteCard(id) {
        var location = '<?php echo base_url(ADMIN_PATH.'cardType/deleteCard');?>' + '/' + id;
        window.location.href = location;
    }

</script>








