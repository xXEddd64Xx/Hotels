<?php
    session_start();
    include('../templates/header.php');
    $errors = array('nombre' => '', 'precio' => '', 'descripcion' => '', 'capacidad' => '', 'codigo' => '', 'foto' => '');
    
    if(isset($_SESSION['errors'])) { 
        $errors = $_SESSION['errors'];
        session_unset($_SESSION['errors']);
    }


?>

<section class="container grey-text">
    <h4 class="center" style="color: black;">Afegir un tipus d'habitación</h4>
    <form action="../bd/bd_TipusHabitacio_insert.php" method="GET" class="white z-depth-5" style="border-radius: 30px; opacity:90%;">
        <div class="input-field col s6">
            <input id="nombre" type="text" name="nombre" class="validate">
            <label for="nombre" class="black-text">Nom</label>
        </div>
        <div class="red-text"><?php if(!empty($errors)) { echo htmlspecialchars($errors['nombre']); } ?></div>

        <div class="input-field col s6">
            <input id="precio" type="number" name="precio" step=".01" class="validate">
            <label for="precio" class="black-text">Preu</label>
        </div>
        <div class="red-text"><?php if(!empty($errors)) { echo htmlspecialchars($errors['precio']); } ?></div>

        <div class="input-field col s6">
            <input id="descripcion" type="text" name="descripcion" class="validate">
            <label for="descripcion" class="black-text">Descripció</label>
        </div>
        <div class="red-text"><?php if(!empty($errors)) { echo htmlspecialchars($errors['descripcion']); } ?></div>

        <div class="input-field col s6">
            <input id="capacidad" type="number" name="capacidad" class="validate">
            <label for="capacidad" class="black-text">Capacitat</label>
        </div>
        <div class="red-text"><?php if(!empty($errors)) { echo htmlspecialchars($errors['capacidad']); } ?></div>

        <div class="input-field col s6">
            <input id="codigo" type="text" name="codigo" class="validate">
            <label for="codigo" class="black-text">Codi</label>
        </div>
        <div class="red-text"><?php if(!empty($errors)) { echo htmlspecialchars($errors['codigo']); } ?></div>

        <div class="input-field col s6">
            <input id="foto" type="url" name="foto" class="validate">
            <label for="foto" class="black-text">Foto</label>
        </div>
        <div class="red-text"><?php if(!empty($errors)) { echo htmlspecialchars($errors['foto']); } ?></div>
        <div class="center">
            <button type="submit" name="submit" class="waves-effect waves-light btn black-text">Enviar</button>
        </div>
    </form>
</section>

<?php include('../templates/footer.php'); ?>

</html>