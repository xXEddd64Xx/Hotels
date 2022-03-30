<?php
    session_start();
    if(isset($_GET['submit'])) { session_unset(); }
    include('./templates/header.php');
    $destino = '';
    
    
    /* if(isset($_SESSION['id'])) {
        if ($_SESSION['id'] == 1) { header("Location: ./indexAdmin.php"); }
        else if ($_SESSION['id'] == 2) { header("Location: ./indexUser.php"); }
    } */

    if(isset($_POST['submit'])){
        session_unset();
        include("./bd/bd_client_select.php");
        
        if ($_POST['email'] == $c[0]['email'] && $_POST['pwd'] == $c[0]['pwd']) {
            $_SESSION['id'] = $c[0]['tipo_usuario'];
            $_SESSION['cliente_id'] = $c[0]['cliente_id'];
            $_SESSION['cliente'] = $c[0];
            $destino = "Location: ./index.php";
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