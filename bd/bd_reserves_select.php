<?php
    $id = "";
    if(isset($_GET['submit'])){
        $id = $_GET['id'];
    }
    
    include('../config/db_connexio.php');

    if ($id != "") {
        $sql = "SELECT * FROM `64_reserves_view` WHERE ID = $id";    
    } else {
        $sql = "SELECT * FROM `64_reserves_view`";
    }

    //LLançar la consulta
    $resultat = mysqli_query($connexio, $sql);

    // Obtenir els resultats
    $r = mysqli_fetch_all($resultat, MYSQLI_ASSOC);
?>