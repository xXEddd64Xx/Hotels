<?php
    $id = "";
    if(isset($_GET['submit'])){
        $id = $_GET['id'];
        $id = $_GET['email'];
    }
    
    if(basename(getcwd()) == "dwes") { include("../config/db_connexio.php"); }
    else { include("./config/db_connexio.php"); }

    if ($id != "") {
        $sql = "SELECT * FROM `64_client` WHERE email = $email";
    } else if ($email != ""){
        $sql = "SELECT * FROM `64_client` WHERE ID = $id";
    } else {
        $sql = "SELECT * FROM `64_client`";
    }

    //LLançar la consulta
    $resultat = mysqli_query($connexio, $sql);

    // Obtenir els resultats
    $r = mysqli_fetch_all($resultat, MYSQLI_ASSOC);
?>