<!DOCTYPE html>
<html lang="es">

<?php include('../templates/header.php'); ?>

<section class="container grey-text">
    <h4 class="center"><span style="color: black;">Hacer Reserva</span></h4>
    <form action="./index.php" method="GET" class="white" style="border-radius: 30px;">
    <label class="black-text"><h5>Data</h5></label>
    <input type="text" class="datepicker">
    <div class="center">
        <input type="submit" name="submit" value="Entrar" class="waves-effect waves-light btn z-depth-2">
    </div>

    
    </form>
</section>

<?php include('../templates/footer.php'); ?>

</html>