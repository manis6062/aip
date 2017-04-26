<div class="container-fluid">
    <div id="infoMessage"><?php // echo $message; ?></div>
    <hr>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> 
                    <h5>Information</h5>

                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered data-table " id="students">
                        <thead>
                            <tr class="gradeC">
                                <td>S.N.</td>
                                <td>Salutation</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>DOB</td>
                                <td>Country</td>
                                <td>Education</td>
                                <td>Phone</td>
                                <td>Mobile</td>
                                <td>P.Address</td>
                                <td>C.Address</td>
                                <td>Reason</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            foreach ($getAllStudents as $key => $student):
                                ?>

                                <tr class="gradeU">
                                    <td><?php echo $count++; ?></td>
                                    <td><?php echo $student->salutation; ?></td>
                                    <td><?php echo $student->first_name . ' ' . $student->last_name ; ?></td>
                                     <td><?php echo $student->email ; ?></td>
                                    <td><?php echo $student->dob ; ?></td>
                                    <td><?php echo $student->country ; ?></td>
                                    <td><?php echo $student->education_id ; ?></td>
                                     <td><?php echo $student->phone ; ?></td>
                                     <td><?php echo $student->mobile ; ?></td>
                                   <td><?php echo $student->permanent_address ; ?></td>
                                    <td><?php echo $student->current_address ; ?></td>
                                    <td><?php echo $student->reason ; ?></td>
                      <td><a href="#" id="status" data-source="[{value: 0, text: 'Inactive'}, {value: 1, text: 'Active'}]" data-value="<?php echo $student->status; ?>" class = "branch_status" data-pk="<?php echo $student->id ; ?>"><?php echo ($student->status == 1) ? 'Active' : 'Inactive' ; ?></a></td>

                                </tr>

                            <?php  endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
</div>

<script>
$(document).ready(function() {
    $('#students').DataTable( {
        "scrollX": true
    } );
} );
</script>



<?php // if($this->user_permission->has_permission('edit_user' , 'access') != FALSE || $this->ion_auth->is_admin()) : ?>
<script type= text/javascript>

    function deactivate_user(id, name) {
        $.confirm({
            columnClass: 'col-md-4 col-md-offset-8 col-xs-4 col-xs-offset-8',
            theme: '<?php echo jquery_confirm_theme; ?>',
            title: 'Deactivate User',
            content: 'Are you sure you want to deactivate the user ' + name + ' ?',
            buttons: {
                Confirm: function () {
                    deactivate(id);
                },
                Cancel: function () {
                },
            }
        });
    }


    function deactivate(id) {
        $.post("<?php echo base_url('Users/auth/deactivate_user'); ?>", {id: id},
                function (data) {
                    console.log(data);
                }, 'json');
        location.reload();
    }


  function activate_user(id, name) {
        $.confirm({
            columnClass: 'col-md-4 col-md-offset-8 col-xs-4 col-xs-offset-8',
            theme: '<?php echo jquery_confirm_theme; ?>',
            title: 'Activate User',
            content: 'Are you sure you want to activate the user ' + name + ' ?',
            buttons: {
                Confirm: function () {
                    activate(id);
                },
                Cancel: function () {
                },
            }
        });
    }


    function activate(id) {
        $.post("<?php echo base_url('Users/auth/activate_user'); ?>", {id: id},
                function (data) {
                    console.log(data);
                }, 'json');
        location.reload();
    }

    jQuery(document).ready(function ($) {
        // setting defaults for the editable
        $.fn.editable.defaults.mode = 'popup';
        $.fn.editable.defaults.showbuttons = true;
        $.fn.editable.defaults.url = '<?php echo base_url() . 'Dashboard/post' ?>';
        $.fn.editable.defaults.type = 'text';


        $('.first_name').editable({
            type: 'text',
            title: 'Enter First Name',
            params: {table: 'users'}
        });

        $('.last_name').editable({
            type: 'text',
            title: 'Enter Last Name',
            params: {table: 'users'}
        });

        $('.email').editable({
            type: 'text',
            title: 'Enter Email Address',
            params: {table: 'users'}
        });

        $('.username').editable({
            type: 'text',
            title: 'Enter Username',
            params: {table: 'users'}
        });



    });</script>

<?php // endif; ?>