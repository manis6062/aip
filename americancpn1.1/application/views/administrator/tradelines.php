<div class="content-wrapper">
    <section class="content-header">
        <h1>
            tradelines
            <small><?php echo $this->session->userdata(NAME) ?></small>
            <a class="btn btn-link" href="<?php echo base_url() . 'administrator/tradeline/tradelineForm'; ?>">add a
                tradeline</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">tradelines</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table class="table table-bordered table-striped table-hover" id="tradelines">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>type</th>
                                <th>name</th>
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
                            foreach ($tradelines as $tradeline) {
                                ?>
                                <tr class="item">
                                    <td><?php echo $tradeline->id; ?></td>
                                    <td><?php echo anchor('#', $tradeline->card_type, array('id' => 'type', 'data-type' => 'text', 'data-pk' => $tradeline->id)) ?></td>
                                    <td><?php echo anchor('#', $tradeline->name, array('id' => 'name', 'data-type' => 'text', 'data-pk' => $tradeline->id)) ?></td>
                                    <td><?php echo anchor('#', $tradeline->bank, array('id' => 'bank', 'data-type' => 'text', 'data-pk' => $tradeline->id)) ?></td>
                                    <td><?php echo anchor('#', $tradeline->url, array('id' => 'url', 'data-type' => 'text', 'data-pk' => $tradeline->id)) ?></td>
                                    <td><?php echo anchor('#', $tradeline->phone, array('id' => 'phone', 'data-type' => 'text', 'data-pk' => $tradeline->id)) ?></td>
                                    <td><?php echo anchor('#', $tradeline->lmt, array('id' => 'lmt', 'data-type' => 'text', 'data-pk' => $tradeline->id)) ?></td>
                                    <td><?php echo anchor('#', $tradeline->balance, array('id' => 'balance', 'data-type' => 'text', 'data-pk' => $tradeline->id)) ?></td>
                                    <td><?php echo anchor('#', $tradeline->open, array('id' => 'open', 'data-type' => 'text', 'data-pk' => $tradeline->id)) ?></td>
                                    <td><?php echo anchor('#', $tradeline->statement, array('id' => 'statement', 'data-type' => 'text', 'data-pk' => $tradeline->id)) ?></td>
                                    <td><?php echo anchor('#', $tradeline->charge, array('id' => 'charge', 'data-type' => 'text', 'data-pk' => $tradeline->id)) ?></td>
                                    <td><?php echo anchor('#', $tradeline->payment, array('id' => 'payment', 'data-type' => 'text', 'data-pk' => $tradeline->id)) ?></td>
                                    <td><?php echo anchor('#', $tradeline->max, array('id' => 'max', 'data-type' => 'text', 'data-pk' => $tradeline->id)) ?></td>
                                    <td><?php echo anchor('#', $tradeline->status, array('id' => 'status', 'data-type' => 'text', 'data-pk' => $tradeline->id)) ?></td>
                                    <td><?php echo anchor('#', $tradeline->note, array('id' => 'note', 'data-type' => 'text', 'data-pk' => $tradeline->id)) ?></td>
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
    $('#tradelines').DataTable();
    $('#tradelines a').editable({
        url: '<?php echo base_url() . 'administrator/post'; ?>',
        params: function (params) {
            params.table = 'tradeline';
            return params;
        },
        success: function (response, newValue) {
            if (response.status == 'error') return response.msg;
        }
    });
</script>