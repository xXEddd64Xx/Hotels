<?php
    include("../templates/header.php");
    include("../bd/bd_reserves_select.php");
?>

    <section class="container black-text">
    <?php
        $cont = 0;
        for ($i = 0; $i < count($r); $i++) { 
    ?>
        <div class="row">
            <div class="col s12 m7">
                <div class="card">
                    <div class="card-content">
                        <div id="<?php echo $cont; ?>">
                            Tipo de habitacion:<pre class="white" style='display:inline; border:none; opacity:0%;'>&#09;&#09;</pre><?php echo $r[$i]['Tipus d\'habitacio'] ?><br>
                            Precio de la reserva:<pre class="white" style='display:inline; border:none; opacity:0%;'>&#09;</pre><?php echo $r[$i]['Precio reserva'] ?> €<br>
                            Número de habitación:<pre class="white" style='display:inline; border:none; opacity:0%;'>&#09;</pre><?php echo $r[$i]['Número Habitación'] ?><br>
                        </div>
                        <div id="<?php echo $cont+1; ?>">
                            Client:<pre class="white" style='display:inline; border:none; opacity:0%;'>&#09;</pre><?php echo $r[$i]['Nombre Completo Usuario'] ?><br>
                            TLF:<pre class="white" style='display:inline; border:none; opacity:0%;'>&#09;</pre><?php echo $r[$i]['Telefono'] ?><br>
                            Email:<pre class="white" style='display:inline; border:none; opacity:0%;'>&#09;</pre><?php echo $r[$i]['Email'] ?><br>
                        </div>
                        <div id="<?php echo $cont+2; ?>">
                            Fecha de entrada:<pre class="white" style='display:inline; border:none; opacity:0%;'>&#09;</pre><?php echo $r[$i]['Entrada'] ?><br>
                            Fecha de salida:<pre class="white" style='display:inline; border:none; opacity:0%;'>&#09;</pre><?php echo $r[$i]['Salida'] ?><br>
                            Estat:<pre class="white" style='display:inline; border:none; opacity:0%;'>&#09;&#09;</pre><?php echo $r[$i]['Estado Reserva'] ?><br>
                        </div>

                    </div>
                    <div class="card-tabs">
                        <ul class="tabs tabs-fixed-width">
                            <li class="tab"><a class="active" href="#<?php echo $cont; ?>">Info General</a></li>
                            <li class="tab"><a href="#<?php echo $cont+1; ?>">Client</a></li>
                            <li class="tab"><a href="#<?php echo $cont+2; ?>">Estat</a></li>
                        </ul>
                    </div>
                    <div class="card-content grey lighten-4">
                    <h6><p>Reserva feta per <?php echo $r[$i]['Nombre Completo Usuario'] ?>.</p></h6>
                    </div>
                </div>
            </div>
        </div>
    <?php $cont = $cont+3; } ?>
    </section>
<?php include("../templates/footer.php"); ?>