<?php
    
    $id = "";
    $email = "";
    
    if(isset($_POST['submit'])){
       if(isset($_POST['id'])) { $id = $_POST['id']; }
       if(isset($_POST['email'])) { $email = $_POST['email']; }
    }
    
    if(basename(getcwd()) == "dwes") { include("./config/db_connexio.php");}
    else { include("../config/db_connexio.php"); }

    if ($email != "") {
        $sql = "SELECT * FROM `64_clients` WHERE email = '$email'";;
    } /* else if ($id != "") {
        $sql = "SELECT * FROM `64_clients` WHERE ID = $id";
    } */ else {
        $sql = "SELECT * FROM `64_clients`";
    }

    //LLançar la consulta
    $resultat = mysqli_query($connexio, $sql);

    // Obtenir els resultats
    $c = mysqli_fetch_all($resultat, MYSQLI_ASSOC);
?>