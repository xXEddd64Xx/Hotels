<?php
    session_start();
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
            header("Location: ../form/form_client_update.php");
        }
        $id = $_SESSION['cliente_id'];
    }
    echo "nombre: ".$nombre." apellido: ".$apellido." tlf: ".$tlf." dni: ".$dni." email: ".$email." direccion: ".$direccion." pwd: ".$pwd;

    include('../config/db_connexio.php');
    $sql = "UPDATE 64_clients
            SET nombre = '$nombre', apellido = '$apellido', tlf = $tlf, dni = '$dni', email = '$email', direccion = '$direccion', pwd = '$pwd'
            WHERE cliente_id = $id";

    //LLançar la consulta
    if(mysqli_query($connexio, $sql)) {
        // La cosa ha anat be
        // Redirecionem cap a index
        header("Location: ../forms/form_client_select.php");
   } else {
       // La cosa ha fallat
       echo 'Error a la query: ' . mysqli_error($connexio);
   }


?>