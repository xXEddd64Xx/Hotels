<?php
    session_start();
    $_SESSION['id'] = 0;
    if(isset($_SESSION['id'])) {
        if ($_SESSION['id'] == 1) { header("Location: ./indexAdmin.php"); }
        else if ($_SESSION['id'] == 2) { header("Location: ./indexUser.php"); }
    }
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        include("./bd/bd_client_select.php");
        if ($email == $r[0]['email'] && $pwd == $r[0]['pwd'] && $r[0]['tipo_usuario'] == 1) {
            $_SESSION['id'] = 1;
            header("Location: ./puente.php");
        } else if ($email == $r[0]['email'] && $pwd == $r[0]['pwd'] && $r[0]['tipo_usuario'] == 2) {
            $_SESSION['id'] = 2;
            header("Location: ./indexUser.php");
        } else if ($email == "" && $pwd == "") {
            $_SESSION['id'] = 0;
            header("Location: ./indexAdmin.php");
        } 
        
    }

?>

<!DOCTYPE html>
<html lang="es">

<?php include('templates/header.php'); ?>

<section class="container grey-text">
    <h4 class="center"><span style="color: black;">Iniciar sessió</span></h4>
    <form action="./index.php" method="POST" class="white" style="border-radius: 30px;">
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