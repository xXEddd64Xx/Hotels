<?php
session_start();
if(isset($_POST['submit'])) {
    if(isset($_FILES['foto'])) {
        // Array per emmagatzemar els posibles errors.
        $errors = array();

        // Control de extensions.
        $extensions = array("jpeg", "jpg", "png", "gif");
        $blnExtensio = false;
        
        // Nom del fitxer.
        $nom_fitxer = $_SESSION['cliente']['dni'];

        // La mida en bytes del fitxer carregat.
        $tamany_fitxer = $_FILES['foto']['size'];

        // Fitxer carregat temporalment en el servidor.
        $fitxer_temp = $_FILES['foto']['tmp_name'];

        // El tipus MIME del fitxer carregat.
        $tipus_fitxer = $_FILES['foto']['type'];

        // El codi d'error associat a aquesta pujada.
        $error_fitxer = $_FILES['foto']['error'];

        /* echo "Nom real del fitxer carregat: " . $nom_fitxer . "<br>" . "<br>";
        echo "Mida en bytes del fitxer carregat: " . $tamany_fitxer . "<br>" . "<br>";
        echo "Nom del fitxer carregat al directori temporal del servidor web: " . $fitxer_temp . "<br>" . "<br>";
        echo "Tipus MIME del fitxer carregat: " . $tipus_fitxer . "<br>" . "<br>";
        echo "Codi d'error associat a aquesta pujada: " . $error_fitxer . "<br>" . "<br>"; */

        // Comprovem el tamany del fitxer.
        if($tamany_fitxer > 2097152) {
            $errors[] = 'El tamany del fitxer no és correcte.';
        }

        // Comprovar l'extensió del fitxer.
        foreach ($extensions as $extensio) {
            if((strpos($tipus_fitxer, $extensio))) {
                $blnExtensio = true;
                $nom_fitxer = $nom_fitxer.".".$extensio;
            }
        }

        if(!$blnExtensio) {
            $errors[] = 'l\'extensio no és correcte';
        }

        // Comprovar els possibles errors.
        if(empty($errorsF)) {
            $ultimaFoto = $_SESSION['cliente']['foto'];
            If(unlink('/student64/dwes/images/perfils/'.$ultimaFoto)) {
                // S'ha esborrat la foto
            } else {
                // No s'ha esborrat la foto
            }
            // Si tot està ok 
            move_uploaded_file($fitxer_temp, '../images/perfils/' . $nom_fitxer);
            include('../config/db_connexio.php');
            $cliDNI = $_SESSION['cliente']['dni'];
            $sql = "UPDATE 64_clients
                    SET foto = '$nom_fitxer'
                    WHERE dni = '$cliDNI'";

            //LLançar la consulta
            mysqli_query($connexio, $sql);
                // La cosa ha anat be
                // Redirecionem cap a index
            header("Location: ../forms/form_client_select.php");
                        
        } else {
            print_r($errors);
        }

    }
}
?>