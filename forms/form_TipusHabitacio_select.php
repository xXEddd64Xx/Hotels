<?php
    session_start();
    include('../templates/header.php');
    include("../bd/bd_TipusHabitacio_select.php");
?>

    <section class="container black-text">
        <?php
            for ($i = 0; $i < count($th); $i++) { 
                /* echo "</br>Nombre: ".$th[$i]["nombre"]."</br>";
                echo "Precio: ".$th[$i]["precio"]."</br>";
                echo "Descripcion: ".$th[$i]["descripcion"]."</br>";
                echo "Capacidad: ".$th[$i]["capacidad"]."</br>";
                echo "Código: ".$th[$i]["codigo"]."</br>";
                echo "Foto: <img src=\"".$th[$i]["foto"]."\" width=\"250\" heigth=\"250\"/></br></br>"; */
                ?>
                <div class="row">
                    <div class="col s12 m7">
                        <div class="card" style="padding: 0px;">
                            <div class="card-image">
                            <img src="<?php echo $th[$i]["foto"]; ?>">
                            <span class="card-title"></span>
                            <a href="../bd/bd_TipusHabitacio_delete.php?id=<?php echo $th[$i]["id"]?>&submit=submit" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">cancel</i></a>
                            <a href="form_TipusHabitacio_update.php?id=<?php echo $th[$i]["id"] ?>&submit=submit" style="margin-right: 50px;" class="btn-floating halfway-fab waves-effect waves-light grey"><i class="material-icons">build</i></a>
                            </div>
                            <div class="card-content z-depth-5">
                            <p>
                                <h5><?php echo $th[$i]["nombre"]; ?></br></h5>
                                <?php echo $th[$i]["descripcion"]; ?></br>
                                <?php echo "Capacidad: ".$th[$i]["capacidad"]; ?>
                                <span style="float: right;"><?php echo "Código: ".$th[$i]["codigo"]; ?></span>
                            </p>
                            </div>
                            <!-- <div class="card-action">
                                <div class="center">
                                    <a href="../bd/bd_TipusHabitacio_delete.php?id= <?php echo $th[$i]["id"] ?> &submit=submit" class="waves-effect waves-light btn"><i class="material-icons right">cancel</i>eliminar</a>
                                
                                    <span style="padding-left: 30px; padding-right: 30px;"></span>

                                    <a href="form_TipusHabitacio_update.php?id= <?php echo $th[$i]["id"] ?> &submit=submit" class="waves-effect waves-light btn"><i class="material-icons right">build</i>actualizar</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
               <?php
            }
        ?>

    </section>
<?php include("../templates/footer.php"); ?>

