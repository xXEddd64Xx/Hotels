<?php
    session_start();
    include('./templates/header.php');
    $destino = '';
    
    
    if(isset($_SESSION['id'])) {
        if ($_SESSION['id'] == 1) { header("Location: ./indexAdmin.php"); }
        else if ($_SESSION['id'] == 2) { header("Location: ./indexUser.php"); }
    }
    if(isset($_GET['submit'])){
        $_SESSION['id'] = 0;
    }

    if(isset($_POST['submit'])){
        $_SESSION['id'] = 0;
        include("./bd/bd_client_select.php");
        if ($_POST['email'] == $r[0]['email'] && $_POST['pwd'] == $r[0]['pwd'] && $r[0]['tipo_usuario'] == 1) {
            $_SESSION['id'] = 1;
            $destino = "Location: ./indexAdmin.php";
        } else if ($_POST['email'] == $r[0]['email'] && $_POST['pwd'] == $r[0]['pwd'] && $r[0]['tipo_usuario'] == 2) {
            $_SESSION['id'] = 2;
            $destino = "Location: ./indexUser.php";
        }

        header($destino);
    }
?>



<section class="container grey-text">
    <h4 class="center"><span style="color: black;">Iniciar sessió</span></h4>
    <form action="./iniciSessio.php" method="POST" class="white" style="border-radius: 30px;">
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