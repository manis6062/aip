<div class="content-wrapper">
    <section class="content-header">
        <h1>
            User
            <small>Update</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url() . 'administrator'; ?>"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="<?php echo base_url() . 'administrator/user/users'; ?>">Users</a></li>
            <li class="active">Edit</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-5">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Profile</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <div class="form-group"> <?php echo form_label('Roles', 'roles'); ?><br/>
                                <a href="#" id="role_id" data-type="checklist"
                                   data-emptytext="select roles"
                                   data-value="<?php echo $user_roles[$user->id] ?>"
                                   data-source="<?php echo $roles ?>"></a>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Email', 'email'); ?>
                            <a href="#" id="email" data-type="text"
                               data-emptytext="enter email "><?php echo $user->email; ?></a>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Change Password', 'password'); ?>
                            <a href="#" id="password" data-type="password" type="password"
                               data-emptytext="enter password"
                               class="mask"><?php echo ($user->password) == '' ? $user->password : "[hidden]" ?></a>
                        </div>
                        <div class="form-group"> <?php echo form_label('CPN', 'cpn'); ?>
                            <a href="#" id="cpn" data-type="text"
                               data-emptytext="enter cpn "><?php echo $user->cpn ?></a>
                        </div>
                        <div class="form-group"> <?php echo form_label('First Name', 'first_name'); ?>
                            <a href="#" id="first_name"><?php echo $user->first_name ?></a>
                        </div>
                        <div class="form-group"> <?php echo form_label('M.I', 'middle_initial'); ?>
                            <a href="#" id="middle_initial" data-emptytext="enter middle initial"
                               data-type="text"><?php echo $user->middle_initial ?></a>
                        </div>
                        <div class="form-group"> <?php echo form_label('Last Name', 'last_name'); ?>
                            <a href="#" id="last_name" data-type="text"
                               data-emptytext="enter last name "><?php echo $user->last_name ?></a>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Gender', 'gender'); ?>
                            <a href="#" id="gender" data-type="select"
                               data-value="<?php echo $user->gender ?>"
                               data-source="[{value:'M',text:'Male'},{value:'F',text:'Female'}]"
                               data-emptytext="enter gender "><?php echo $user->gender ?></a>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('DOB', 'dob'); ?>
                            <a href="#" id="dob" data-type="combodate"
                               data-emptytext="select date"><?php echo $user->dob ?></a>
                        </div>
                        <div
                            class="form-group"> <?php echo form_label('Phone', 'primary_phone_number'); ?>
                            <a href="#" id="primary_phone_number" data-type="text"
                               data-emptytext="enter primary phone "><?php echo $user->primary_phone_number ?></a>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Fax', 'secondary_phone_number'); ?>
                            <a href="#" id="secondary_phone_number" data-type="text"
                               data-emptytext="enter secondary phone"><?php echo $user->secondary_phone_number ?></a>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Street', 'street'); ?>
                            <a href="#" id="street" data-type="text"
                               data-emptytext="enter street"><?php echo $user->street; ?></a>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('City', 'city'); ?>
                            <a href="#" id="city" data-type="text"
                               data-emptytext="enter city"><?php echo $user->city; ?></a>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('State', 'state'); ?>
                            <a href="#" id="state" data-type="text"
                               data-emptytext="enter state"><?php echo $user->state; ?></a>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Postal Code', 'postal_code'); ?>
                            <a href="#" id="postal_code" data-type="text"
                               data-emptytext="enter zip code"><?php echo $user->postal_code; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 boxer super_admin admin super_broker broker">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Business</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <?php echo form_label('Site', 'site'); ?>
                            <a href="#" id="site" data-type="text"
                               data-emptytext="enter your site url"><?php echo $user->site ?></a>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Name', 'name'); ?>
                            <a href="#" id="name" data-type="text"
                               data-emptytext="enter your business name"><?php echo $user->name ?></a>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('D.B.A', 'dba'); ?>
                            <a href="#" id="dba" data-type="text"
                               data-emptytext="enter doing business as"><?php echo $user->dba ?></a>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Phone', 'phone'); ?>
                            <a href="#" id="phone" data-type="text"
                               data-emptytext="enter business phone number"><?php echo $user->phone ?></a>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Comment', 'comment'); ?>
                            <a href="#" id="comment" data-type="text"
                               data-emptytext="enter a comment"><?php echo $user->comment ?></a>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Fax', 'fax'); ?>
                            <a href="#" id="fax" data-type="text"
                               data-emptytext="enter business fax"><?php echo $user->fax ?></a>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Email', 'email'); ?>
                            <a href="#" id="b_email" data-type="text"
                               data-emptytext="enter business email"><?php echo $user->b_email; ?></a>
                        </div>
                        <!--address-->
                        <div class="form-group">
                            <?php echo form_label('Street', 'street'); ?>
                            <a href="#" id="street" data-type="text"
                               data-emptytext="enter business street"><?php echo $user->street; ?></a>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('City', 'city'); ?>
                            <a href="#" id="city" data-type="text"
                               data-emptytext="enter city"><?php echo $user->city; ?></a>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('State', 'state'); ?>
                            <a href="#" id="state" data-type="text"
                               data-emptytext="enter state"><?php echo $user->state; ?></a>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Postal Code', 'postal_code'); ?>
                            <a href="#" id="postal_code" data-type="text"
                               data-emptytext="enter zip code"><?php echo $user->postal_code; ?></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>


<script>
    $.fn.editable.defaults.mode = 'inline';
    $('#first_name,#middle_initial,#last_name,#primary_phone_number,#secondary_phone_number,#comment,#cpn,#gender').editable({
        pk: '<?php echo $user->id;?>',
        url: '<?php echo base_url() . 'administrator/post'; ?>',
        params: function (params) {
            params.table = 'profile';
            return params;
        },
        success: function (response, newValue) {
            if (response.status == 'error') return response.msg;
        }
    });
    $('#email,#status').editable({
        pk: '<?php echo $user->id;?>',
        url: '<?php echo base_url() . 'administrator/post'; ?>',
        params: function (params) {
            params.table = 'user';
            return params;
        },
        success: function (response, newValue) {
            if (response.status == 'error') return response.msg;
        }
    });
    $('#password').editable({
        pk: '<?php echo $user->id;?>',
        url: '<?php echo base_url() . 'administrator/post'; ?>',
        params: function (params) {
            params.table = 'user';
            if (params.value)
                params.value = CryptoJS.MD5(params.value).toString();
            return params;
        },
        success: function (response, newValue) {
            if (response.status == 'error') return response.msg;
        }
    });

    $('#site,#name,#dba,#phone,#fax').editable({
        pk: '<?php echo $user->id;?>',
        url: '<?php echo base_url() . 'administrator/post'; ?>',
        params: function (params) {
            params.table = 'business';
            return params;
        },
        success: function (response, newValue) {
            if (response.status == 'error') return response.msg;
        }
    });

    $('#b_email').editable({
        pk: '<?php echo $user->id;?>',
        url: '<?php echo base_url() . 'administrator/post'; ?>',
        params: function (params) {
            params.table = 'business';
            params.name = 'email';
            return params;
        },
        success: function (response, newValue) {
            if (response.status == 'error') return response.msg;
        }
    });
    $('#street,#city,#state,#postal_code').editable({
        pk: '<?php echo $user->id;?>',
        url: '<?php echo base_url() . 'administrator/post'; ?>',
        params: function (params) {
            params.table = 'address';
            return params;
        },
        success: function (response, newValue) {
            if (response.status == 'error') return response.msg;
        }
    });


    $('#dob').editable({
        pk: '<?php echo $user->id;?>',
        url: '<?php echo base_url() . 'administrator/post'; ?>',
        params: function (params) {
            params.table = 'profile';
            return params;
        },
        format: 'MM-DD-YYYY',
        viewformat: 'MM/DD/YYYY',
        template: 'MMMM / D / YYYY',
        combodate: {
            minYear: 1900,
            maxYear: 2015,
            minuteStep: 1
        },
        success: function (response, newValue) {
            if (response.status == 'error') return response.msg;
        }
    });

    $('#role_id').editable({
        pk: '<?php echo $user->id;?>',
        url: '<?php echo base_url() . 'administrator/post'; ?>',
        params: function (params) {
            params.table = 'user_role';
            return params;
        },
        success: function (response, newValue) {
            if (response.status == 'error') return response.msg;
        }
    });

</script>
