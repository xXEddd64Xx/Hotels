<?php
    session_start();
    include("../templates/header.php");
    include("../bd/bd_reserves_select.php");
?>
<br>
<div style="width: 75%; margin: auto;">
<table class="striped">
    <thead>
        <tr>
            <th>ID<a href="./reserves_report.php?param=1&submit=submit"> <i class="fas black-text fa-sort-amount-down-alt"></i> </a></th>
            <th>Entrada<a href="./reserves_report.php?param=2&submit=submit"> <i class="fas black-text fa-sort-amount-down-alt"></i> </a></th>
            <th>Salida<a href="./reserves_report.php?param=3&submit=submit"> <i class="fas black-text fa-sort-amount-down-alt"></i> </a></th>
            <th>Nombre Completo Usuario<a href="./reserves_report.php?param=4&submit=submit"> <i class="fas black-text fa-sort-amount-down-alt"></i> </a></th>
            <th>Email<a href="./reserves_report.php?param=5&submit=submit"> <i class="fas black-text fa-sort-amount-down-alt"></i> </a></th>
            <th>Estado Reserva<a href="./reserves_report.php?param=6&submit=submit"> <i class="fas black-text fa-sort-amount-down-alt"></i> </a></th>
            <th>Precio reserva<a href="./reserves_report.php?param=7&submit=submit"> <i class="fas black-text fa-sort-amount-down-alt"></i> </a></th>
        </tr>
    </thead>

    <tbody>
        <?php for ($i = 0; $i < count($r); $i++) { ?>
            <tr>
                <td><?php echo $r[$i]['ID'] ?></td>
                <td><?php echo $r[$i]['Entrada'] ?></td>
                <td><?php echo $r[$i]['Salida'] ?></td>
                <td><?php echo $r[$i]['Nombre Completo Usuario'] ?></td>
                <td><?php echo $r[$i]['Email'] ?></td>
                <td><?php echo $r[$i]['Estado Reserva'] ?></td>
                <td><?php echo $r[$i]['Precio reserva'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</div>
<?php include("../templates/footer.php"); ?>
