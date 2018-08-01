<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $page_title; ?></title>

    <link rel="stylesheet" href="<?php base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php base_url()?>assets/dist/css/AdminLTE.min.css">
    
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php base_url()?>assets/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">

    <!-- WRAPPER START -->
    <div class="wrapper">

        <!-- HEADER -->
        <?php include "includes/header.php" ?> 

        <!-- SIDEBAR -->
        <?php include "includes/sidebar.php" ?> 


        <!-- CONTENT WRAPPER START -->
        <div class="content-wrapper">
            <?php $this->load->view($page_content); ?>   
        </div>
        <!-- CONTENT WRAPPER END -->

        <?php include "includes/footer.php" ?>
        <?php include "includes/control_sidebar.php" ?>
        
    </div>
    <!-- WRAPPER END -->

    

    <!-- jQuery 3 -->
    <script src="<?php base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?php base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php base_url()?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php base_url()?>assets/dist/js/demo.js"></script>
    <script>
    $(document).ready(function () {
        $('.sidebar-menu').tree()
    })
    </script>    
</body>
</html>



