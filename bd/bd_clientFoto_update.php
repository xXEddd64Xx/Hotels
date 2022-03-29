<?php
session_start();
if(isset($_POST['submit'])) {
    if(isset($_FILES['foto'])) {
        // Array per emmagatzemar els posibles errors.
        $errors = array();

        // Control de extensions.
        $extensions = array("jpeg", "jpg", "png");
        $blnExtensio = false;
        
        // Nom del fitxer.
        $nom_fitxer = $_FILES['foto']['name'];

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
            }
        }

        if(!$blnExtensio) {
            $errors[] = 'l\'extensio no és correcte';
        }

        // Comprovar els possibles errors.
        if(empty($errorsF)) {
            // Si tot està ok 
            move_uploaded_file($fitxer_temp, '../images/perfils/' . $nom_fitxer);
            /* $foto .= $nom_fitxer . ","; */
            include('../config/db_connexio.php');
            $cliID = $_SESSION['cliente_id'];
            $sql = "UPDATE 64_clients
                    SET foto = '$nom_fitxer'
                    WHERE cliente_id = $cliID";

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