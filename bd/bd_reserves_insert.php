<?php
    include('../templates/header.php');
    if (isset($_POST['submit'])) {
        $idcliente = $_POST['idcliente'];
        $datein = $_POST['datein'];
        $dateout = $_POST['dateout'];
        $idhabitacion = $_POST['idhabitacion'];
        $tipo = $_POST['id'];
        include("../bd/bd_TipusHabitacio_select.php");
        $idestado = $_POST['idestado'];
        $pension = $_POST['idpension'];
        $cantidad_personas = $_POST['cantidad_personas'];
        $noches = (array)date_diff(date_create($datein), date_create($dateout));
        $precio = $th[$tipo]['precio']*$noches['days'];
    }
    echo "Precio: ".$precio." Data in: ".$datein." Data out: ".$dateout." Tipo: ".$tipo." Pension: ".$pension." Id cliente: ".$idcliente." Id habitacion: ".$idhabitacion." Id estado: ".$idestado."Personas: ".$cantidad_personas." Noches: ".$noches['days'];

    include('../config/db_connexio.php');
    $sql = 
    "INSERT INTO 64_reserves (cliente_id, entrada, salida, habitacion_id, estado_id, noches, precio, pension_id)
                        VALUES ($idcliente, '$datein', '$dateout', $idhabitacion, $idestado, $noches[days], $precio, $pension);";

    //LLançar la consulta
    
    if(mysqli_query($connexio, $sql)) {
        // La cosa ha anat be
        // Redirecionem cap a index
        header("Location: ../forms/form_reserves_insert.php");
   } else {
       // La cosa ha fallat
       echo 'Error a la query: ' . mysqli_error($connexio);
   }


?>