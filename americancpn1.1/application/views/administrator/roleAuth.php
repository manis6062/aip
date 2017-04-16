<div class="content-wrapper">
    <section class="content-header">
        <h4>
            role auth
            <small>list</small>
        </h4>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url() . 'administrator'; ?>"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">role auth</li>
        </ol>
    </section>


    <section class="content">
        <div class="box">
            <div class="box-body">
                <table id="users" class="table table-bordered table-striped">
                    <thead>
                    <tr role="row">
                        <th>role</th>
                        <th>auth</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if ($roles != 0 && count($roles) > 0) {
                        foreach ($role_auths as $key => $val) {
                            ?>
                            <tr role="row">
                                <td class="sorting_1"><?php echo $val['role_label']; ?></td>
                                <td><a href="#" id="auth_id" data-type="checklist" table="role_auth"
                                       data-pk="<?php echo $val['role_id'] ?>"
                                       data-emptytext="select roles"
                                       data-value="<?php echo $val['auth_id'] ?>"
                                       data-source="<?php echo $auths ?>"></a>
                                </td>
                                <td>
                                    <submit type="text"
                                            onclick="deleteUser(<?php echo $val['role_id'] ?>)">
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

    <script>
        $('#users a').editable({
            url: '<?php echo base_url() . 'administrator/post'; ?>',
            placement: 'right',
            params: function (params) {
                var table = $(this).attr("table");
                params.table = table;
                return params;
            },
            success: function (response, newValue) {
                if (response.status == 'error') return response.msg;
            }
        });
        function deleteUser(id) {
            var location = '<?php echo base_url(ADMIN_PATH.'user/deleteUser');?>' + '/' + id;
            window.location.href = location;
        }
        function updateUser(id) {
            var location = '<?php echo base_url(ADMIN_PATH.'user/user/');?>' + '/' + id;
            window.location.href = location;
        }
    </script>

</div>






