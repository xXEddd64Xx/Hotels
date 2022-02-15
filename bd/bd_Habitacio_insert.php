<?php
    include('../templates/header.php');

    $errors = array('tipo' => '', 'numero' => '', 'numerotxt' => '', 'cerrada' => '', 'descripcion' => '', 'observaciones' => '', 'foto' => '');
    if(isset($_POST['submit'])){
        $tipo = $_POST['tipo'];
        $numero = $_POST['numero'];
        $numerotxt = $_POST['numerotxt'];
        $cerrada = $_POST['cerrada'];
        $descripcion = $_POST['descripcion'];
        $observaciones = $_POST['observaciones'];
        $foto = "";

        if(isset($_FILES['foto'])) {
            // Control de extensions.
            $extensions = array("jpeg", "jpg", "png", "gif");
            
            $intFitxers = count($_FILES['foto']['name']);

            for ($i = 0; $i < $intFitxers; $i++) { 
                // Array per emmagatzemar els posibles errors.
                $errorsF = array();
                // Boleà extensions
                $blnExtensio = false;

                // Nom del fitxer.
                $nom_fitxer = $_FILES['foto']['name'][$i];

                // La mida en bytes del fitxer carregat.
                $tamany_fitxer = $_FILES['foto']['size'][$i];

                // Fitxer carregat temporalment en el servidor.
                $fitxer_temp = $_FILES['foto']['tmp_name'][$i];

                // El tipus MIME del fitxer carregat.
                $tipus_fitxer = $_FILES['foto']['type'][$i];

                // El codi d'error associat a aquesta pujada.
                $error_fitxer = $_FILES['foto']['error'][$i];

                /* echo "Nom real del fitxer carregat: " . $nom_fitxer . "<br>" . "<br>";
                echo "Mida en bytes del fitxer carregat: " . $tamany_fitxer . "<br>" . "<br>";
                echo "Nom del fitxer carregat al directori temporal del servidor web: " . $fitxer_temp . "<br>" . "<br>";
                echo "Tipus MIME del fitxer carregat: " . $tipus_fitxer . "<br>" . "<br>";
                echo "Codi d'error associat a aquesta pujada: " . $error_fitxer . "<br>" . "<br>"; */

                // Comprovem el tamany del fitxer.
                if($tamany_fitxer > 2097152) {
                    $errorsF[] = 'El tamany del fitxer no és correcte.';
                }

                // Comprovar l'extensió del fitxer.
                foreach ($extensions as $extensio) {
                    if((strpos($tipus_fitxer, $extensio))) {
                        $blnExtensio = true;
                    }
                }

                if(!$blnExtensio) {
                    $errorsF[] = 'l\'extensio no és correcte';
                }

                // Comprovar els possibles errors.
                if(empty($errorsF)) {
                    // Si tot està ok 
                    move_uploaded_file($fitxer_temp, '../images/habitacio/' . $nom_fitxer);
                    $foto .= $nom_fitxer . ",";
                    
                    /* $foto.str_replace() */
                    echo "<b>Fitxer enviat correctament</b>" . "<br><br>";
                } else {
                    print_r($errors);
                }
            }
        }
    }

    if (empty($_POST['numerotxt'])) {
        $errors['numerotxt'] = 'El numerotxt es obligatorio';
    } else {
        $nombre = $_POST['numerotxt'];
        if (!preg_match('/^[a-zA-Z0-9\-\s]+$/',  $numerotxt)) {
            $errors['numerotxt'] = 'El numerotxt tiene que estar compuesto por letras i numero únicamente';
        }
    }

    if (empty($_POST['numero'])) {
        $errors['numero'] = 'El numero es obligatorio';
    } else {
        $numero = $_POST['numero'];
        if (!preg_match('/^[0-9]+$/',  $numero)) {
            $errors['numero'] = 'El numero tiene que estar compuesto por numeros únicament';
        } 
    }

    if (empty($_POST['tipo'])) {
        $errors['tipo'] = 'Es obligatorio escoger un tipo de habitación';
    } else {
        $precio = $_POST['tipo'];
    }

    if (empty($_POST['descripcion'])) {
        $errors['descripcion'] = 'La descripción es obligatoria';
        echo $_POST['descripcion'];
    } else {
        $descripcion = $_POST['descripcion'];
        if (!preg_match('/^[[a-zA-Z\s]+$/',  $descripcion)) {
            $errors['descripcion'] = 'La descripción tiene que estar compuesta por letras y espacios únicamente';
        }
    }

    if (empty($_POST['observaciones'])) {
        $codigo = $_POST['observaciones'];
    } else {
        $codigo = $_POST['observaciones'];
        if (!preg_match('/^[a-zA-Z0-9\s]+$/',  $observaciones)) {
            $errors['observaciones'] = 'las observaciones tienen que estar compuestas por letras y numeros únicament';
        }
    }

    if (empty($_POST['foto'])) {
        $errors['foto'] = 'La foto es obligatoria';
    } else {
    
    }

    if (array_filter($errors)) {
        //$errorsSerialitzat = serialize($errors);
        $_SESSION['errors'] = $errors;
        //header("Location: ../forms/form_Habitacio_insert.php");
    }

    include('../config/db_connexio.php');
    if($cerrada) { $bol = 1; } else { $bol = 0; }
    $sql = 
    "INSERT INTO 64_habitacio (tipo_habitacion, numero, numerovar, cerrada, descripcion, observacions, fotos)
    VALUES ($tipo, $numero, '$numerotxt', $bol, '$descripcion', '$observaciones', '$foto')";

    //LLançar la consulta
    $resultat = mysqli_query($connexio, $sql);

    //header("Location: ../forms/form_Habitacio_insert.php");
?>