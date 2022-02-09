<?php
    session_start();
    $errors = array('nombre' => '', 'precio' => '', 'descripcion' => '', 'capacidad' => '', 'codigo' => '', 'foto' => '');
    if(isset($_GET['submit'])){
        $nom = $_GET['nombre'];
        $preu = $_GET['precio'];
        $descripcion = $_GET['descripcion'];
        $capacidad = $_GET['capacidad'];
        $codigo = $_GET['codigo'];
        $foto = $_GET['foto'];
    }

    if (empty($_GET['nombre'])) {
        $errors['nombre'] = 'El nom és obligatori';
    } else {
        $nombre = $_GET['nombre'];
        if (!preg_match('/^[a-zA-Z\s]+$/',  $nombre)) {
            $errors['nombre'] = 'El nom ha d\'estar compost per lletres i espais únicament';
        }
    }

    if (empty($_GET['precio'])) {
        $errors['precio'] = 'El preu és obligatori';
    } else {
        $precio = $_GET['precio'];
        /* if (!preg_match('/^[0-9]+$/',  $precio)) {
            $errors['precio'] = 'El preu ha d\'estar compost per lletres i espais únicament';
        } */
    }

    if (empty($_GET['descripcion'])) {
        $errors['descripcion'] = 'La descripció és obligatoria';
    } else {
        $descripcion = $_GET['descripcion'];
        if (!preg_match('/^[[a-zA-Z\s]+$/',  $descripcion)) {
            $errors['descripcion'] = 'La descripcio ha d\'estar composta per lletres i espais únicament';
        }
    }

    if (empty($_GET['capacidad'])) {
        $errors['capacidad'] = 'La capacitat és obligatoria';
    } else {
        $capacidad = $_GET['capacidad'];
        /* if (!preg_match('/^(\+|\-)?\d+$/',  $capacidad)) {
            $errors['capacidad'] = 'El nombre ha de ser sencer';
        } */
    }

    if (empty($_GET['codigo'])) {
        $errors['codigo'] = 'El modi és obligatori';
    } else {
        $codigo = $_GET['codigo'];
        if (!preg_match('/^[a-zA-Z0-9\s]+$/',  $codigo)) {
            $errors['codigo'] = 'El nom ha d\'estar compost per lletres i espais únicament';
        }
    }

    if (empty($_GET['foto'])) {
        $errors['foto'] = 'La foto és obligatoria';
    } else {
        $foto = $_GET['foto'];
        /* if (!preg_match('/^[a-zA-Z\s]+$/',  $nombre)) {
            $errors['foto'] = 'El nom ha d\'estar compost per lletres i espais únicament';
        } */
    }

    if (array_filter($errors)) {
        //$errorsSerialitzat = serialize($errors);
        $_SESSION['errors'] = $errors;
        header("Location: ../forms/form_TipusHabitacio_insert.php");
    }

    include('../config/db_connexio.php');

    $sql = 
    "INSERT INTO 64_tipushabitacio (nombre, precio, descripcion, capacidad, capacidad_max, codigo, foto)
    VALUES ('$nom', $preu, '$descripcion', $capacidad, $capacidad+2, '$codigo', '$foto')";

    //LLançar la consulta
    $resultat = mysqli_query($connexio, $sql);
    
    //header("Location: ../forms/form_TipusHabitacio_insert.php");
    header("Location: ../forms/form_TipusHabitacio_insert.php");
?>