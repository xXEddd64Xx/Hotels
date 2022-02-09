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
    //header("Location: ./indexAdmin.php");
    
    if(isset($_GET['submit'])){
        $email = $_GET['email'];
        $pwd = $_GET['pwd'];
        include("./bd/bd_client_select.php");

        if ($email == "$r[0]['email']" && $pwd == "$r[0]['pwd']" && $r[0]['tipo_usuario'] == 1) {
            header("Location: ./indexAdmin.php");
        } else if ($email == "$r[0]['email']" && $pwd == "$r[0]['pwd']" && $r[0]['tipo_usuario'] == 2) {
            header("Location: ./indexUser.php");
        } else if ($select == "" && $pwd == "") {
            header("Location: ./indexAdmin.php");
        } 
    }

?>

<!DOCTYPE html>
<html lang="es">

<?php include('templates/header.php'); ?>

<section class="container grey-text">
    <h4 class="center"><span style="color: black;">Iniciar sessió</span></h4>
    <form action="./index.php" method="GET" class="white" style="border-radius: 30px;">
        <div class="input-field col s6">
            <input id="email" type="email" name="email" class="validate">
            <label for="email" class="black-text">Email</label>
        </div>
        <div class="input-field col s6">
            <input id="pwd" type="password" name="pwd" class="validate">
            <label for="pwd" class="black-text">Contraseña</label>
        </div>
        <div class="center">
            <input type="submit" name="submit" value="Entrar" class="waves-effect waves-light btn z-depth-2">
        </div>
    </form>
</section>

<?php include('templates/footer.php'); ?>

</html>