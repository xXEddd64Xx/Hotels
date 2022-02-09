<?php
    include("../templates/header.php");
    $id = "";
    if(isset($_GET['submit'])){
        $id = $_GET['id'];
        include("../bd/bd_TipusHabitacio_select.php");
    }
?>

<section class="container grey-text">
    <h4 class="center" style="color: black;">Actualiza un tipo de habitación</h4>
    <form action="form_TipusHabitacio_update.php" method="GET" class="white" style="border-radius: 30px;">
        <label for="id" class="black-text"><h5>ID:</h5></label>
        <input type="number" name="id">
        <div class="center">
            <input type="submit" name="submit" value="aceptar" class="waves-effect waves-light btn"></a>
        </div>
    </form>

    <form <?php if ($id == "") {
        echo "hidden";
    } ?> action="../bd/bd_TipusHabitacio_update.php" method="GET" class="white" style="border-radius: 30px; opacity:90%">
        <input hidden type="number" name="id" value="<?php echo $th[0]["id"] ?>">
        <label for="nombre" class="black-text"><h5>Nombre:</h5></label>
        <input type="text" name="nombre" value="<?php echo $th[0]["nombre"]; ?>">
        <label for="precio" class="black-text"><h5>Precio:</h5></label>
        <input type="number" name="precio" value="<?php echo $th[0]["precio"]; ?>">
        <label for="descripcion" class="black-text"><h5>Descripción:</h5></label>
        <input type="text" name="descripcion" value="<?php echo $th[0]["descripcion"]; ?>">
        <label for="capacidad" class="black-text"><h5>Capacidad:</h5></label>
        <input type="number" name="capacidad" value="<?php echo $th[0]["capacidad"]; ?>">
        <label for="codigo" class="black-text"><h5>Código:</h5></label>
        <input type="text" name="codigo" value="<?php echo $th[0]["codigo"]; ?>">
        <label for="foto" class="black-text"><h5>Foto:</h5></label>
        <input type="text" name="foto" value="<?php echo $th[0]["foto"]; ?>">
        <div class="center">
            <input type="submit" name="submit" value="actualizar" class="waves-effect waves-light btn">
        </div>
    </form>
</section>

<?php
    include("../templates/footer.php");
?>