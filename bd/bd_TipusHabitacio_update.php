<?php
    include('../templates/header.php');
    if(isset($_GET['submit'])){
        $id = $_GET['id'];
        $nom = $_GET['nombre'];
        $preu = $_GET['precio'];
        $descripcion = $_GET['descripcion'];
        $capacidad = $_GET['capacidad'];
        $codigo = $_GET['codigo'];
        $foto = $_GET['foto'];
    }
    
    include('../config/db_connexio.php');

    $sql = 
    "UPDATE 64_tipushabitacio
     SET nombre = '$nom', precio = $preu, descripcion = '$descripcion', capacidad = $capacidad, codigo = '$codigo', foto = '$foto'
     WHERE id = $id";

    //LLançar la consulta
    //$resultat = mysqli_query($connexio, $sql);
    $resultat = mysqli_query($connexio, $sql);

    // Obtenir els resultats
    //$th = mysqli_fetch_all($resultat, MYSQLI_ASSOC);
    header("Location: ../forms/form_TipusHabitacio_select.php");
?>