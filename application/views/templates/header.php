
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <script language='JavaScript'>
        var txt="Selamat Datang | Areby Collection | ";
        var speed=300;
        var refresh=null;
        function action() { document.title=txt;
            txt=txt.substring(1,txt.length)+txt.charAt(0);
            refresh=setTimeout("action()",speed);}action();
    </script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <link href="<?php echo base_url() ?>assets/img/logo_areby.png" rel="shortcut icon">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('') ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('') ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>