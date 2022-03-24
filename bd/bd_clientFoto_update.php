<?php
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
?>