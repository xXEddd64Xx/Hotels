<?php
    session_start();
    include('../templates/header.php');
    /*if(isset($_GET['submit'])){
        $id = $_GET['id'];
        include("../bd/bd_TipusHabitacio_delete.php");
    } */ 
?>
<section class="container grey-text">
    <h4 class="center black-text">Eliminar un tipo de habitación</h4>
    <form action="../bd/bd_TipusHabitacio_delete.php" method="GET" class="white" style="border-radius: 30px; opacity:90%;">
        <label for="id">ID:</label>
        <input type="text" name="id">
        <div class="center">
            <button type="submit" name="submit" class="waves-effect waves-light btn black-text">Borrar</button>
        </div>
    </form>
</section>
<?php
    include("../templates/footer.php");
?>