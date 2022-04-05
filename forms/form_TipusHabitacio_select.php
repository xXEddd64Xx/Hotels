<?php
    session_start();
    include('../templates/header.php');
    include("../bd/bd_TipusHabitacio_select.php");
?>

    <section class="container black-text">
        <?php
            for ($i = 0; $i < count($th); $i++) { 
                ?>
                <div class="row">
                    <div class="col s12 m7">
                        <div class="card" style="padding: 0px;">
                            <div class="card-image">
                                <img src="<?php echo $th[$i]["foto"]; ?>">
                                <span class="card-title"></span>
                                <a href="../bd/bd_TipusHabitacio_delete.php?id=<?php echo $th[$i]["id"]?>&submit=submit" class="btn-floating halfway-fab waves-effect waves-light red"><i class="fa-solid fa-delete-left"></i></a>
                                <a href="form_TipusHabitacio_update.php?id=<?php echo $th[$i]["id"] ?>&submit=submit" style="margin-right: 50px;" class="btn-floating halfway-fab waves-effect waves-light grey"><i class="fa-solid fa-wrench"></i></a>
                            </div>
                            <div class="card-content z-depth-5">
                                <p>
                                    <h5><?php echo $th[$i]["nombre"]; ?></br></h5>
                                    <?php echo $th[$i]["descripcion"]; ?></br>
                                    <?php echo "Capacidad: ".$th[$i]["capacidad"]; ?>
                                    <span style="float: right;"><?php echo "Código: ".$th[$i]["codigo"]; ?></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
               <?php
            }
        ?>

    </section>
<?php include("../templates/footer.php"); ?>

