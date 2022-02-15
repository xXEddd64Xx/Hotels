<?php include('../templates/header.php'); ?>

<section class="container grey-text">
    <h4 class="center"><span style="color: white;">Crear una cuenta</span></h4>
    <form action="../bd/bd_client_insert.php" method="POST" class="white" style="border-radius: 30px;">
        <div class="input-field col s6">
            <input id="nombre" type="text" name="nombre" class="validate">
            <label for="nombre" class="black-text">Nombre</label>
        </div>

        <div class="input-field col s6">
            <input id="apellido" type="text" name="apellido" class="validate">
            <label for="apellido" class="black-text">Apellido</label>
        </div>

        <div class="input-field col s6">
            <input id="tlf" type="number" name="tlf" class="validate">
            <label for="tlf" class="black-text">Teléfono</label>
        </div>

        <div class="input-field col s6">
            <input id="dni" type="text" name="dni" class="validate">
            <label for="dni" class="black-text">DNI</label>
        </div>

        <div class="input-field col s6">
            <input id="email" type="email" name="email" class="validate">
            <label for="email" class="black-text">Email</label>
        </div>

        <div class="input-field col s6">
            <input id="direccion" type="text" name="direccion" class="validate">
            <label for="direccion" class="black-text">Dirección</label>
        </div>

        <div class="input-field col s6">
            <input id="pwd" type="password" name="pwd" class="validate">
            <label for="pwd" class="black-text">Contraseña</label>
        </div>

        <div class="input-field col s6">
            <input id="repwd" type="password" name="repwd" class="validate">
            <label for="repwd" class="black-text">Reescribe la Contraseña</label>
        </div>
        
        <div class="center">
            <input type="submit" name="submit" value="crear" class="waves-effect waves-light btn">
        </div>
    </form>
</section>

<?php include('../templates/footer.php'); ?>

</html>