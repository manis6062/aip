<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Users
            <small>list</small>
            <a class="btn btn-link" href="<?php echo base_url() . 'administrator/user/userForm'; ?>">Add User</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url() . 'administrator'; ?>"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">users</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <strong>Users</strong>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped" id="users">
                    <thead>
                    <tr role="row">
                        <th>User Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Action</th>
                        <th>Status</th>
                        <th>Last Login</th>
                        <th>Created Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if ($users != 0 && count($users) > 0) {
                        foreach ($users as $key => $user) {
                            ?>
                            <tr role="row" class="odd">


                                <td><?php echo anchor(base_url(ADMIN_PATH . 'user/user/' . $user->id), $user->id, array('id' => 'userId')) ?></td>
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
    </section>
</div>
<script>
    $('#users').DataTable();
    $('#users a:not(#userId)').editable({
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
        var location = '<?php echo base_url(ADMIN_PATH.'user/user/');?>' + '/' + id;
        window.location.href = location;
    }
</script>








