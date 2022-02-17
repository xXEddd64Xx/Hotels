<?php
    session_start();
    include('../templates/header.php');
    include("../bd/bd_Habitacio_select.php");
    /* $arrayFotos = explode(",", $h[0]["fotos"]); */
    /* $arrayFotos = explode(",", substr($h[0]["fotos"], 0, strlen($h[0]["fotos"]) - 1)); */
?>

    <section class="container black-text">
        <?php
            for ($i = 0; $i < count($h); $i++) { 
                $arrayFotos = explode(",", substr($h[$i]["fotos"], 0, strlen($h[$i]["fotos"]) - 1));
                ?>
                <div class="row">
                    <div class="col s12 m7">
                        <div class="card" style="padding: 0px;">
                            <div class="card-image">
                            <div class="carousel carousel-slider">
                                <?php for ($x = 0; $x < count($arrayFotos); $x++) { ?>
                                    <a class="carousel-item"><img src="../images/habitacio/<?php echo $arrayFotos[$x];?>"></a>
                                <?php } ?>
                            </div>
                            <!-- <img src="../images/habitacio/<?php echo $arrayFotos[0]; ?>"> -->
                            <span class="card-title"></span>
                            <a href="../bd/bd_Habitacio_delete.php?id=<?php echo $h[$i]["id"]?>&submit=submit" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">cancel</i></a>
                            <a href="form_Habitacio_update.php?id=<?php echo $h[$i]["id"] ?>&submit=submit" style="margin-right: 50px;" class="btn-floating halfway-fab waves-effect waves-light grey"><i class="material-icons">build</i></a>
                            </div>
                            <div class="card-content z-depth-5">
                                <p>
                                    <h5><?php echo $h[$i]["numero"]; ?></br></h5>
                                    <?php echo $h[$i]["numerovar"]; ?></br>
                                    <?php echo $h[$i]["cerrada"]; ?></br>
                                    <?php echo $h[$i]["descripcion"]; ?></br>
                                    <?php echo $h[$i]["observacions"]; ?></br>
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