<?php 
    session_start();
    if(isset($_SESSION['id'])) { 
        if($_SESSION['id'] == 0) { 
            header('Location: ../iniciSessio.php');
        }
    }
    include('../templates/header.php');
    include('../bd/bd_Pensio_select.php');
    include('../bd/bd_Habitacio_select.php');
    include('../bd/bd_TipusHabitacio_select.php');
    
    $errors = array('tipo' => '', 'numero' => '', 'numerotxt' => '', 'cerrada' => '', 'descripcion' => '', 'observaciones' => '', 'foto' => '');
    
    if(isset($_SESSION['errors'])) {
        $errors = $_SESSION['errors'];
        session_unset($_SESSION['errors']);
    }
    
    /* if(isset($_GET['errors'])) {
        $errors2 = stripslashes($_GET['errors']);
        $errors = unserialize($errors2);
    } */

?>
<section class="container grey-text">
    <h4 class="center" style="color: black;">Añadir una reserva</h4>
    <form action="../bd/bd_reserves_insert.php" method="post" class="white z-depth-5" style="border-radius: 30px; opacity:90%;">

            <div hidden class="input-field col s6">
                <input id="idcliente" type="text" name="idcliente" value="1">
                <!-- <label for="idcliente" class="black-text">ID Cliente</label> -->
                <!-- <div class="red-text"><?php if(!empty($errors)) { echo htmlspecialchars($errors['numero']); } ?></div> -->
            </div>

            <div class="input-field col s6">
                <input id="datein" name="datein" type="text" class="datepicker">
                <label for="datein" class="black-text">Data d'entrada</label>
            </div>

            <div class="input-field col s6">
                <input id="dateout" name="dateout" type="text" class="datepicker">
                <label for="dateout" class="black-text">Data de sortida</label>
            </div>

            <div hidden class="input-field col s6">
                <input id="idhabitacion" type="text" name="idhabitacion" value="23">
                <label for="idhabitacion" class="black-text">ID Habitacion</label>
                <!-- <div class="red-text"><?php if(!empty($errors)) { echo htmlspecialchars($errors['numero']); } ?></div> -->
            </div>

            <div class="input-field col s6 m6">
                <select name="id" class="icons">
                    <option value="" disabled selected>Selecciona un tipo</option>
                    <?php
                        for ($i=0; $i < count($th); $i++) { ?>
                            <option value="<?php echo $th[$i]['id'] ?>" data-icon="<?php echo $th[$i]['foto'] ?>" style="opacity: 100"><?php echo $th[$i]['nombre'] ?></option>
                        <?php } ?>
                </select>
                <div class="red-text"><?php if(!empty($errors)) { echo htmlspecialchars($errors['tipo']); } ?></div>
            </div>

            <div class="input-field col s6">
                <input id="cantidad_personas" type="number" name="cantidad_personas" class="validate">
                <label for="cantidad_personas" class="black-text">Cuantos seréis?</label>
            </div>

            <div hidden class="input-field col s6">
                <input id="idestado" type="text" name="idestado" value="1">
                <label for="idestado" class="black-text">ID Estado</label>
                <!-- <div class="red-text"><?php if(!empty($errors)) { echo htmlspecialchars($errors['numero']); } ?></div> -->
            </div>

            <div class="input-field col s6 m6">
                <select name="idpension">
                    <option value="" disabled selected>Selecciona una pension</option>
                    <?php
                        for ($i=0; $i < count($pen); $i++) { ?>
                            <option value="<?php echo $pen[$i]['id'] ?>"><?php echo $pen[$i]['codi']." - ".$pen[$i]['nom'] ?></option>
                        <?php } ?>
                </select>
            </div>
            
            <div class="center">
                <input type="submit" name="submit" value="Reservar" class="waves-effect waves-light btn">
            </div>
    </form>
</section>

<?php include('../templates/footer.php'); ?>

</html>