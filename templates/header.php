<?php echo "Estat: ".session_status(). " ID: ".$_SESSION["id"] ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="/student64/dwes/RRSS/hotel.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>DWES HOTELES</title>
    <!-- Compiled and minified CSS -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    <script src="https://kit.fontawesome.com/4047b7b55b.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- <script src="/student64/dwes/js/jquery-3.2.1.min.js"></script> -->
    <script src="/student64/dwes/js/materialize.js"></script>
    <link rel="stylesheet" href="/student64/dwes/css/materialize.css">
    

    <style type="text/css">
        .brand{
            background: #cbb09c !important;
        }
        .brand-text{
            color: #cbb09c !important;
        }
        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }
    </style>
    <!-- JQUERYS -->
    <script>
        (function($){
            $(function(){
                // Plugin initialization
                $('select').not('.disabled').formSelect();
            }); 
        })(jQuery); // end of jQuery name space
    </script>
    <script>
        $(document).ready(function(){
            $('.tabs').tabs();
        });
    </script>
    <script>
        $(document).ready(function(){
            $('select').formSelect();
        });
    </script>
    <script>
        $(document).ready(function(){
            /* $('.carousel').carousel(); */
            $('.carousel.carousel-slider').carousel({
                fullWidth: true
            });
        });
        /* $('.carousel.carousel-slider').carousel({
            fullWidth: true
        }); */
    </script>
    <script>
        $(document).ready(function(){
            $('.datepicker').datepicker({
                firstDay: 1,
                format: 'yyyy-mm-dd'
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $('.timepicker').timepicker();
        });
    </script>
    <script>
        $(document).ready(function(){
            $(".dropdown-trigger").dropdown();
        });
    </script>

</head>
<body style="background-repeat: no-repeat; background-size: cover;" class="teal accent-4 darken-0 lighten-0">
<ul id="dropdown1" class="dropdown-content">
    <li><a href="/student64/dwes/forms/form_client_select.php">Perfil</a></li>
    <li class="divider"></li>
    <li><a href="/student64/dwes/iniciSessio.php?submit=submit">Sortir</a></li>
</ul>
<nav class="grey z-deph-0">
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">DWES Hoteles</a>
    <ul class="right">
        <li><a href="/student64/dwes/index.php" class="">Inici</a></li>
    
        <?php if(isset($_SESSION['id'])) { if($_SESSION['id'] == 1) { ?>
            <li><a href="/student64/dwes/indexAdmin.php" class="">Admin</a></li>
        <?php } } ?>
    
        <?php if(isset($_SESSION['id'])) { if($_SESSION['id'] == 0) { ?>
            <li><a href="/student64/dwes/iniciSessio.php" class="">Iniciar sessio</a></li>
        <?php } else {?>
            <li><a class="dropdown-trigger" data-target="dropdown1">Compte<i class="material-icons right">arrow_drop_down</i></a></li>
        <?php } }?>
    </ul>
  </div>
</nav>
    