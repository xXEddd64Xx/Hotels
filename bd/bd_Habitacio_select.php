<?php
    
    $id = "";
    if(isset($_GET['submit'])){
        $id = $_GET['id'];
    }
    
    include('../config/db_connexio.php');

    if ($id != "") {
        $sql = "SELECT * FROM 64_habitacio WHERE id = $id";    
    } else {
        $sql = "SELECT * FROM 64_habitacio";
    }

    //LLançar la consulta
    $resultat = mysqli_query($connexio, $sql);

    // Obtenir els resultats
    $h = mysqli_fetch_all($resultat, MYSQLI_ASSOC);
?>