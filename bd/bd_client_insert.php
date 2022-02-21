<?php
    if (isset($_POST['submit'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $tlf = $_POST['tlf'];
        $dni = $_POST['dni'];
        $email = $_POST['email'];
        $direccion = $_POST['direccion'];
        if($_POST['pwd'] == $_POST['repwd']) {
            $pwd = $_POST['pwd'];
        } else {
            header("Location: ../form/form_client_insert.php");
        }
    }
    echo "nombre: ".$nombre." apellido: ".$apellido." tlf: ".$tlf." dni: ".$dni." email: ".$email." direccion: ".$direccion." pwd: ".$pwd." repwd: ".$repwd;

    include('../config/db_connexio.php');
    $sql = "INSERT INTO 64_clients (nombre, apellido, tlf, dni, email, direccion, pwd)
            VALUES ('$nombre', '$apellido', $tlf, '$dni', '$email', '$direccion', '$pwd');";

    //LLançar la consulta
    if(mysqli_query($connexio, $sql)) {
        // La cosa ha anat be
        // Redirecionem cap a index
        header("Location: ../forms/form_client_insert.php");
   } else {
       // La cosa ha fallat
       echo 'Error a la query: ' . mysqli_error($connexio);
   }


?>