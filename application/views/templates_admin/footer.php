
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('') ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('') ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('') ?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('') ?>assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('') ?>assets/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url('') ?>assets/js/demo/chart-pie-demo.js"></script>

    <!-- JS Datepicker -->
    <script src="<?php echo base_url('') ?>assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });

    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
        endDate: '0d',
    });
    </script>
</body>

</html>