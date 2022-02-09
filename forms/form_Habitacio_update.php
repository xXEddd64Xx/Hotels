<?php
    echo "EN CONSTRUCCION, NO FUNCIONA...";
    include("../templates/header.php");
    include("../bd/bd_TipusHabitacio_select.php");
    $id = "";
    if(isset($_GET['submit'])){
        $id = $_GET['id'];
        include("../bd/bd_Habitacio_select.php");
        $arrayFotos = explode(",", substr($h[0]["fotos"], 0, strlen($h[0]["fotos"]) - 1));
    }
?>

<section class="container grey-text">
    <h4 class="center" style="color: black;">Actualiza un tipo de habitación</h4>
    <form action="form_Habitacio_update.php" method="GET" class="white" style="border-radius: 30px;">
        <label for="id" class="black-text"><h5>ID:</h5></label>
        <input type="number" name="id">
        <div class="center">
            <input type="submit" name="submit" value="aceptar" class="waves-effect waves-light btn"></a>
        </div>
    </form>

    <form <?php if ($id == "") {
        echo "hidden";
    } ?> action="../bd/bd_Habitacio_insert.php" method="POST" class="white z-depth-5" style="border-radius: 30px; opacity:90%;" enctype="multipart/form-data">
        <div class="input-field col s6">
                <input id="numero" type="text" name="numero" value="<?php echo $h[0]["numero"]; ?>">
                <label for="numero" class="black-text" >Número</label>
                <div class="red-text"><?php if(!empty($errors)) { echo htmlspecialchars($errors['numero']); } ?></div>
            </div>

            <div class="input-field col s6">
                <input id="numerotxt" type="text" name="numerotxt" value="<?php echo $h[0]["numerovar"]; ?>">
                <label for="numerotxt" class="black-text">NúmeroTxt</label>
                <div class="red-text"><?php if(!empty($errors)) { echo htmlspecialchars($errors['numerotxt']); } ?></div>
            </div>
            
            
            <label>
                <span class="black-text" style="margin-right: 8%; font-size: 130%;">Disponibilidad de la habitación:</span>
                <input name="cerrada" type="checkbox" <?php if ($h[0]["cerrada"] == 1) { ?> checked <?php } ?>>
                <span class="black-text">Cerrada</span>
            </label>

            <div class="input-field col s6 m6">
                <select name="tipo" class="icons">
                    <option value="" disabled selected>Selecciona un tipo</option>
                    <?php
                        for ($i=0; $i < count($th); $i++) { ?>
                            <option value="<?php echo $th[$i]['id'] ?>" data-icon="<?php echo $th[$i]['foto'] ?>"><?php echo $th[$i]['nombre'] ?></option>
                        <?php } ?>
                </select>
                <div class="red-text"><?php if(!empty($errors)) { echo htmlspecialchars($errors['tipo']); } ?></div>
            </div>
            

            <div class="input-field col s6">
                <input id="descripcion" type="text" name="descripcion" class="validate">
                <label for="descripcion" class="black-text">Descripcion</label>
                <div class="red-text"><?php if(!empty($errors)) { echo htmlspecialchars($errors['descripcion']); } ?></div>
            </div>

            <div class="input-field col s6">
                <input id="observaciones" type="text" name="observaciones" class="validate">
                <label for="observaciones" class="black-text">Observaciones</label>
                <div class="red-text"><?php if(!empty($errors)) { echo htmlspecialchars($errors['observaciones']); } ?></div>
            </div>
            <label for="fotos" class="black-text"><h5>Fotos:</h5></label>
            <div class="file-field input-field">
                <div class="btn">
                    <span>File</span>
                    <input type="file" name="foto[]" id="foto" multiple>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload one or more images" value="">
                </div>
            </div>
            <!-- <div class="input-field col s6">
                <input id="foto" type="text" name="foto" class="validate">
                <label for="foto" class="black-text">Fotos</label>
                <div class="red-text"><?php if(!empty($errors)) { echo htmlspecialchars($errors['foto']); } ?></div>
            </div> -->
            <div class="center">
                <input type="submit" name="submit" value="enviar" class="waves-effect waves-light btn">
            </div>
    </form>
</section>

<?php
    include("../templates/footer.php");
?>