<div class="content-wrapper">
    <section class="content-header">
        <h1>
            lines
            <small><?php echo $this->session->userdata(NAME) ?></small>
            <a class="btn btn-link" href="<?php echo base_url() . 'administrator/line/lineForm'; ?>">add a
                line</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">lines</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table class="table table-bordered table-striped table-hover" id="lines">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>type</th>
                                <th>bank</th>
                                <th>url</th>
                                <th>phone</th>
                                <th>limit</th>
                                <th>balance</th>
                                <th>open</th>
                                <th>statement</th>
                                <th>charge</th>
                                <th>payment</th>
                                <th>max</th>
                                <th>status</th>
                                <th>note
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($lines as $line) {
                                ?>
                                <tr class="item">
                                    <td><?php echo $line->id; ?></td>
                                    <td><?php echo anchor('#', $line->type_id, array('id' => 'type', 'data-type' => 'text', 'data-pk' => $line->id)) ?></td>
                                    <td><?php echo anchor('#', $line->bank, array('id' => 'bank', 'data-type' => 'text', 'data-pk' => $line->id)) ?></td>
                                    <td><?php echo anchor('#', $line->url, array('id' => 'url', 'data-type' => 'text', 'data-pk' => $line->id)) ?></td>
                                    <td><?php echo anchor('#', $line->phone, array('id' => 'phone', 'data-type' => 'text', 'data-pk' => $line->id)) ?></td>
                                    <td><?php echo anchor('#', $line->lmt, array('id' => 'lmt', 'data-type' => 'text', 'data-pk' => $line->id)) ?></td>
                                    <td><?php echo anchor('#', $line->balance, array('id' => 'balance', 'data-type' => 'text', 'data-pk' => $line->id)) ?></td>
                                    <td><?php echo anchor('#', $line->open, array('id' => 'open', 'data-type' => 'text', 'data-pk' => $line->id)) ?></td>
                                    <td><?php echo anchor('#', $line->statement, array('id' => 'statement', 'data-type' => 'text', 'data-pk' => $line->id)) ?></td>
                                    <td><?php echo anchor('#', $line->charge, array('id' => 'charge', 'data-type' => 'text', 'data-pk' => $line->id)) ?></td>
                                    <td><?php echo anchor('#', $line->payment, array('id' => 'payment', 'data-type' => 'text', 'data-pk' => $line->id)) ?></td>
                                    <td><?php echo anchor('#', $line->max, array('id' => 'max', 'data-type' => 'text', 'data-pk' => $line->id)) ?></td>
                                    <td><?php echo anchor('#', $line->status, array('id' => 'status', 'data-type' => 'text', 'data-pk' => $line->id)) ?></td>
                                    <td><?php echo anchor('#', $line->note, array('id' => 'note', 'data-type' => 'text', 'data-pk' => $line->id)) ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    $('#lines').DataTable();
    $('#lines a').editable({
        url: '<?php echo base_url() . 'administrator/post'; ?>',
        params: function (params) {
            params.table = 'line';
            return params;
        },
        success: function (response, newValue) {
            if (response.status == 'error') return response.msg;
        }
    });
</script>