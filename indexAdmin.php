<?php

    /* // Connexió a la base de dades
    $connexio = mysqli_connect('localhost', 'edu', '1234', 'dwes_pizza');

    // Comprovació de la connexió
    if(!$connexio) {
        echo 'Error de la connexió: ' . mysqli_connect_error();
    } else {
        echo 'Connexío realitzada correctament';
    }

    // Escriure la consulta
    $sql = 'SELECT nom, ingredients, id FROM pizzes';

    //LLançar la consulta
    $resultat = mysqli_query($connexio, $sql);

    // Obtenir els resultats
    $pizzes = mysqli_fetch_all($resultat, MYSQLI_ASSOC);

    // Alliberar memòria
    mysqli_free_result($resultat);

    // Cal tancar la connexió
    mysqli_close($connexio);

    print_r($pizzes); */

?>

<!DOCTYPE html>
<html lang="es">

<?php include('templates/header.php'); ?>

<section class="container grey-text">

    <h3 class="center"><span style="color: black;">Index</span></h3>
    <form class="z-depth-5" style="border-radius: 30px; opacity:90%;">
        <label class="center"><h4><span style="color: black;">Tipus Habitació</span></h4></label>
        </br>
        <div>
            <div class="center" style="opacity: 100%;">
                <a href="./forms/form_TipusHabitacio_select.php" class="waves-effect waves-light btn" style="width: 40%;"><i class="material-icons right">open_in_new</i>visualizar</a>
            </div>
            </br>
            <div class="center">
                <a href="./forms/form_TipusHabitacio_insert.php" class="waves-effect waves-light btn" style="width: 40%;"><i class="material-icons right">add_circle</i>añadir</a>
            </div>
        </div>
        </br>
        <!-- <div>
            <div class="center">
                <a href="./forms/form_TipusHabitacio_update.php" class="waves-effect waves-light btn" style="width: 40%;"><i class="material-icons right">build</i>actualizar</a>
            </div>
            </br>
            <div class="center">
                <a href="./forms/form_TipusHabitacio_delete.php" class="waves-effect waves-light btn" style="width: 40%;"><i class="material-icons right">cancel</i>eliminar</a>
            </div>
        </div> -->
    </form>
    <form class="z-depth-5" style="border-radius: 30px; opacity:90%;">
        <label class="center"><h4><span style="color: black;">Habitació</span></h4></label>
        </br>
        <div>
            <div class="center" style="opacity: 100%;">
                <a href="./forms/form_Habitacio_select.php" class="waves-effect waves-light btn" style="width: 40%;"><i class="material-icons right">open_in_new</i>visualizar</a>
            </div>
            </br>
            <div class="center">
                <a href="./forms/form_Habitacio_insert.php" class="waves-effect waves-light btn" style="width: 40%;"><i class="material-icons right">add_circle</i>añadir</a>
            </div>
        </div>
        </br>
        <div>
            <!-- <div class="center">
                <a href="./forms/form_Habitacio_update.php" class="waves-effect waves-light btn" style="width: 40%;"><i class="material-icons right">build</i>actualizar</a>
            </div>
            </br>
            <div class="center">
                <a href="./forms/form_Habitacio_delete.php" class="waves-effect waves-light btn" style="width: 40%;"><i class="material-icons right">cancel</i>eliminar</a>
            </div> -->
        </div>
    </form>
    <form class="z-depth-5" style="border-radius: 30px; opacity:90%;">
        <label class="center"><h4><span style="color: black;">Reserves</span></h4></label>
        </br>
        <div>
            <div class="center" style="opacity: 100%;">
                <a href="./forms/form_reserves_select.php" class="waves-effect waves-light btn" style="width: 40%;"><i class="material-icons right">open_in_new</i>visualizar</a>
            </div>
            </br>
            <div class="center">
                <a href="./forms/form_reserves_insert.php" class="waves-effect waves-light btn" style="width: 40%;"><i class="material-icons right">add_circle</i>añadir</a>
            </div>
        </div>
        </br>
        <!-- <div>
            <div class="center">
                <a href="./forms/form_reserves_update.php" class="waves-effect waves-light btn" style="width: 40%;"><i class="material-icons right">build</i>actualizar</a>
            </div>
            </br>
            <div class="center">
                <a href="./forms/form_reserves_delete.php" class="waves-effect waves-light btn" style="width: 40%;"><i class="material-icons right">cancel</i>eliminar</a>
            </div>
        </div> -->
    </form>
    <form class="z-depth-5" style="border-radius: 30px; opacity:90%;">
        <label class="center"><h4><span style="color: black;">Client</span></h4></label>
        </br>
        <div>
            <div class="center" style="opacity: 100%;">
                <a href="./forms/form_client_select.php" class="waves-effect waves-light btn" style="width: 40%;"><i class="material-icons right">open_in_new</i>visualizar</a>
            </div>
            </br>
            <div class="center">
                <a href="./forms/form_client_insert.php" class="waves-effect waves-light btn" style="width: 40%;"><i class="material-icons right">add_circle</i>añadir</a>
            </div>
        </div>
        </br>
        <!-- <div>
            <div class="center">
                <a href="./forms/form_Habitacio_update.php" class="waves-effect waves-light btn" style="width: 40%;"><i class="material-icons right">build</i>actualizar</a>
            </div>
            </br>
            <div class="center">
                <a href="./forms/form_Habitacio_delete.php" class="waves-effect waves-light btn" style="width: 40%;"><i class="material-icons right">cancel</i>eliminar</a>
            </div>
        </div> -->
    </form>
</section>

<?php include('templates/footer.php'); ?>

</html>