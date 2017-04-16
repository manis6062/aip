<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2015 <a href="<?php echo POWERED_URL ?>"><?php echo POWERED ?></a>.</strong> All rights reserved.
</footer>


</div>


<script src="<?php echo base_url();?>backend/js/jQuery-2.1.4.min.js"></script>
<script src="<?php echo base_url();?>backend/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>backend/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>backend/js/app.min.js"></script>
<script src="<?php echo base_url();?>backend/js/dataTables.bootstrap.min.js"></script>

<script src="<?php echo base_url() . ADMIN_JS; ?>bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() . ADMIN_JS; ?>bootstrap3-editable/js/bootstrap-editable.js"></script>
<script src="<?php echo base_url() . ADMIN_JS; ?>moments.js"></script>
<script type="text/javascript">
    $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
        });
    });
</script>
</body>
</html>