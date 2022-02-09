<?php
    // Conexió amb la base de dades
    $connexio = mysqli_connect('localhost', 'edu', '1234', 'hotel');
    //$connexio = mysqli_connect('remotehost.es', 'dwes1234', 'test1234.', 'dwesdatabase');

    // Comprovar la connexió
    if (!$connexio) {
        echo "Error de connexió: " . mysqli_connect_error();
    } else {
        echo "";
    }
?>
