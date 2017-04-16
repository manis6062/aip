<div class="content-wrapper">
    <section class="content-header">
        <h1>
            users
            <small>list</small>
            <a class="btn btn-link" href="<?php echo base_url() . 'administrator/user/addUser'; ?>">add user</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">users</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table class="table table-bordered table-striped table-hover" id="users">
                            <thead>
                            <tr>
                                <th>user id</th>
                                <th>name</th>
                                <th>email</th>
                                <th>roles</th>
                                <th>action</th>
                                <th>status</th>
                                <th>last login</th>
                                <th>created date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if ($users != 0 && count($users) > 0) {
                                foreach ($users as $key => $user) {
                                    ?>
                                    <tr>
                                        <td><?php echo $user->id; ?></td>
                                        <td>
                                            <button type="button" class="btn-link"
                                                    onclick="updateUser(<?php echo $user->id ?>)">
                                                <?php echo $user->first_name . ' ' . $user->middle_initial . ' ' . $user->last_name ?>
                                            </button>
                                        <td><?php echo $user->email; ?></td>
                                        <td><a href="#" id="role_id" data-type="checklist" table="user_role"
                                               data-pk="<?php echo $user->id ?>"
                                               data-emptytext="select roles"
                                               data-value="<?php echo $user_roles[$user->id]; ?>"
                                               data-source="<?php echo $roles ?>"></a>
                                        </td>
                                        <td>
                                            <submit type="text"
                                                    onclick="deleteUser(<?php echo $user->id ?>)">
                                                <i class="btn btn-danger fa fa-trash"></i>
                                            </submit>
                                        </td>
                                        <td><a href="" data-type="select" id="status" table="user"
                                               data-pk="<?php echo $user->id ?>"
                                               data-value="<?php echo $user->status ?>"
                                               data-source="[ {value: 0, text: 'inactive'}, {value: 1, text: 'active'}]"
                                               data-pk=<?php echo $user->status; ?>></a>
                                        </td>
                                        <td><?php echo date('Y-m-d', strtotime($user->last_login_date)); ?></td>
                                        <td><?php echo date('Y-m-d', strtotime($user->created_date)); ?></td>
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
    $('#users').DataTable();
    $('#users a').editable({
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
    function deleteUser(id) {
        var location = '<?php echo base_url(ADMIN_PATH.'user/deleteUser');?>' + '/' + id;
        window.location.href = location;
    }
    function updateUser(id) {
        var location = '<?php echo base_url(ADMIN_PATH.'user/updateuser/');?>' + '/' + id;
        window.location.href = location;
    }
</script>







