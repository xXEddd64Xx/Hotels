<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="/student64/dwes/RRSS/hotel.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWES HOTELES</title>
    <!-- Compiled and minified CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    <script src="https://kit.fontawesome.com/6a52418247.js" crossorigin="anonymous"></script>
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
        /* footer{
            position: initial;
            bottom: 0%;
            width: 100%;
        } */
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }
        .prova {

        }
    </style>
    <script>
        $(document).ready(function(){
            $('.tabs').tabs();
        });
    </script>
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
                format: 'yyyy-mm-dd'
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $('.timepicker').timepicker();
        });
    </script>

</head>
<body background="https://fondosmil.comfondo/14768.jpg" style="background-repeat: no-repeat; background-size: cover;" class="teal accent-4 darken-0 lighten-0">
    <nav class="grey z-deph-0">
        <div class="container">
            <a href="/student64/dwes" class="brand-logo brand-text"><span style="color: white;">DWES Hoteles</span></a>
            <ul class="right hide-onsmall-down" id="nav-mobile">
                <li><a href="/student64/dwes" class="waves-effect waves-light btn">Inici</a></li>
            </ul>
        </div>
    </nav>