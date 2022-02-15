<?php
    include('../templates/header.php');
    if(isset($_GET['submit'])){
        $id = $_GET['id'];
        
    }
    include('../config/db_connexio.php');

    $sql = 
    "DELETE 
     FROM 64_habitacio
     WHERE id = $id";

    //LLançar la consulta
    $resultat = mysqli_query($connexio, $sql);
    // Obtenir els resultats
    //$th = mysqli_fetch_all($resultat, MYSQLI_ASSOC);
    header("Location: ../forms/form_Habitacio_select.php");
?>