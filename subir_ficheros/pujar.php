<?php 
    //php.ini
    //file_uploads -> ON

    if(isset($_POST['submit'])) {
        if(isset($_FILES['elMeuFitxer'])) {
            

            // Control de extensions.
            $extensions = array("jpeg", "jpg", "png", "gif");
            
            $intFitxers = count($_FILES['elMeuFitxer']['name']);

            for ($i = 0; $i < $intFitxers; $i++) { 
                // Array per emmagatzemar els posibles errors.
                $errors = array();
                // Boleà extensions
                $blnExtensio = false;

                // Nom del fitxer.
                $nom_fitxer = $_FILES['elMeuFitxer']['name'][$i];

                // La mida en bytes del fitxer carregat.
                $tamany_fitxer = $_FILES['elMeuFitxer']['size'][$i];

                // Fitxer carregat temporalment en el servidor.
                $fitxer_temp = $_FILES['elMeuFitxer']['tmp_name'][$i];

                // El tipus MIME del fitxer carregat.
                $tipus_fitxer = $_FILES['elMeuFitxer']['type'][$i];

                // El codi d'error associat a aquesta pujada.
                $error_fitxer = $_FILES['elMeuFitxer']['error'][$i];

                echo "Nom real del fitxer carregat: " . $nom_fitxer . "<br>" . "<br>";
                echo "Mida en bytes del fitxer carregat: " . $tamany_fitxer . "<br>" . "<br>";
                echo "Nom del fitxer carregat al directori temporal del servidor web: " . $fitxer_temp . "<br>" . "<br>";
                echo "Tipus MIME del fitxer carregat: " . $tipus_fitxer . "<br>" . "<br>";
                echo "Codi d'error associat a aquesta pujada: " . $error_fitxer . "<br>" . "<br>";

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
                if(empty($errors)) {
                    // Si tot està ok 
                    move_uploaded_file($fitxer_temp, 'images/' . $nom_fitxer);
                    echo "<b>Fitxer enviat correctament</b>" . "<br><br>";
                } else {
                    print_r($errors);
                }
            }
        }
    }
?>