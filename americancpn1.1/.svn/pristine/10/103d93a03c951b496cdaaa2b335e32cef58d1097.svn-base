<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <?php echo ucfirst($title);?>s
            <small>list</small>
            <a class="btn btn-link" href="<?php echo base_url() . 'administrator/faq/faqForm'; ?>">Add <?php echo ucfirst($title);?></a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url() . 'administrator'; ?>"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active"><?php echo $title?>s</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <strong>Users</strong>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped" id="faq">
                    <thead>
                    <tr role="row">
                        <th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            style="width: 180px;" aria-label="Rendering engine: activate to sort column ascending"
                            aria-sort="descending">Id
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            style="width: 229px;" aria-label="Browser: activate to sort column ascending">Question
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            style="width: 194px;" aria-label="Platform(s): activate to sort column ascending">Answer
                        </th>

                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            style="width: 154px;" aria-label="Engine version: activate to sort column ascending">Action
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if ($faqs != 0 && count($faqs) > 0) {
                        foreach ($faqs as $key => $faq) {
                            ?>
                            <tr role="row" class="odd">
                                <td><?php echo anchor(base_url(ADMIN_PATH . 'faq/faq/'.$faq->faq_id), $faq->faq_id, array('id' => 'faq_id')) ?></td>
                                <td>
                                    <button type="button" class="btn-link"
                                            onclick="updateFaq(<?php echo $faq->faq_id ?>)">
                                        <?php echo $faq->faq_question; ?>
                                    </button>
                                <td><?php echo $faq->faq_answer; ?></td>

                                <td>
                                    <submit type="text"
                                            onclick="deleteFaq(<?php echo $faq->faq_id ?>)">
                                        <i class="btn btn-danger fa fa-trash"></i>
                                    </submit>
                                </td>
                            </tr>
                        <?php }
                    } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </section>
</div>
<script>
    $('#faq').DataTable();
    $('#faq a:not(#faq_id)').editable({
        url: '<?php echo base_url() . 'administrator/post'; ?>',
        params: function (params) {
            var table = $(this).attr("table");
            params.table = table;
            return params;
        },
        success: function (response, newValue) {
            if (response.status == 'error') return response.msg;
        }
    });
    function deleteFaq(id) {
        var location = '<?php echo base_url(ADMIN_PATH.'faq/deleteFaq');?>' + '/' + id;
        window.location.href = location;
    }
    function updateFaq(id) {
        var location = '<?php echo base_url(ADMIN_PATH.'faq/faq/');?>' + '/' + id;
        window.location.href = location;
    }
</script>







