<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>CodeIgniter Ratchet Websocket using jQuery</title>
    <script type="text/javascript">
        var BASE_URL = "<?php echo base_url(); ?>";
        var Broadcast = {
            POST : "<?php echo POST; ?>",
            BROADCAST_URL : "<?php echo BROADCAST_URL; ?>",
            BROADCAST_PORT : "<?php echo BROADCAST_PORT; ?>"
        };
    </script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-2.1.1.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/app/Connection2.js"); ?>" ></script>


    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href=<?php echo base_url("bootstrap/css/bootstrap.min.css");?>>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href=<?php echo base_url("dist/css/AdminLTE.min.css"); ?>>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href=<?php echo base_url("dist/css/skins/_all-skins.min.css"); ?>>
    <!-- iCheck -->
    <link rel="stylesheet" href=<?php echo base_url("plugins/iCheck/flat/blue.css"); ?>>
    <!-- Morris chart -->
    <link rel="stylesheet" href=<?php echo base_url("plugins/morris/morris.css"); ?>>
    <!-- jvectormap -->
    <link rel="stylesheet" href=<?php echo base_url("plugins/jvectormap/jquery-jvectormap-1.2.2.css"); ?>>
    <!-- Date Picker -->
    <link rel="stylesheet" href=<?php echo base_url("plugins/datepicker/datepicker3.css"); ?>>
    <!-- Daterange picker -->
    <link rel="stylesheet" href=<?php echo base_url("plugins/daterangepicker/daterangepicker.css"); ?>>
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href=<?php echo base_url("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"); ?>>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

