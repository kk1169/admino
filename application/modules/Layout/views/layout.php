<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layout</title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php base_url()?>custom/plugins/bootstrap/css/bootstrap.min.css">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="<?php base_url()?>custom/plugins/font-awesome/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php base_url()?>custom/plugins/Ionicons/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php base_url()?>custom/plugins/metismenu/dist/metisMenu.min.css">
    <link rel="stylesheet" href="<?php base_url()?>custom/css/custom.css">
</head>
<body>
    

    <div class="wrapper">
        
        <div class="wrapper-left">
            <?php include "includes/sidebar.php";?>
        </div>
        <div class="wrapper-right">
            <?php //include "includes/header.php";?>
            <div class="content-wrapper">

            </div>

            <?php include "includes/footer.php";?>
        </div>


    </div>

    <!-- jQuery 3 -->
    <script src="<?php base_url()?>custom/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php base_url()?>custom/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php base_url()?>custom/plugins/metismenu/dist/metisMenu.min.js"></script>
    <script src="<?php base_url()?>custom/js/main.js"></script>
    <script>
        $("#menu").metisMenu();
    </script>
</body>
</html>