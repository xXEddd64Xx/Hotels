<?php
    $param = "";
    $id = "";
    if(isset($_GET['submit'])){
        /* $id = $_GET['id']; */
        $param = $_GET['param'];
    }
    
    include('../config/db_connexio.php');

    switch ($param) {
        case 1:
            $sql = "SELECT * FROM `64_reserves_view` ORDER BY `ID`";
            $param = "";
            break;
        case 2:
            $sql = "SELECT * FROM `64_reserves_view` ORDER BY `Entrada`";
            $param = "";
            break;
        case 3:
            $sql = "SELECT * FROM `64_reserves_view` ORDER BY `Salida`";
            $param = "";
            break;
        case 4:
            $sql = "SELECT * FROM `64_reserves_view` ORDER BY `Nombre Completo Usuario`";
            $param = "";
            break;
        case 5:
            $sql = "SELECT * FROM `64_reserves_view` ORDER BY `Email`";
            $param = "";
            break;
        case 6:
            $sql = "SELECT * FROM `64_reserves_view` ORDER BY `Estado Reserva`";
            $param = "";
            break;
        case 7:
            $sql = "SELECT * FROM `64_reserves_view` ORDER BY `Precio Reserva`";
            $param = "";
            break;
        default:
            $sql = "SELECT * FROM `64_reserves_view`";
            $param = "";
            break;
    }

    //LLançar la consulta
    $resultat = mysqli_query($connexio, $sql);

    // Obtenir els resultats
    $r = mysqli_fetch_all($resultat, MYSQLI_ASSOC);
?>