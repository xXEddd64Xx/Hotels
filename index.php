<?php session_start(); if(!isset($_SESSION['id'])) { $_SESSION['id'] = 0; } include("./templates/header.php"); ?>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center white-text">DWES Hoteles</h1>
      <div class="row center">
        <h5 class="header col s12 light"><b>Una pàgina moderna i responsive on alquilar les millors habitacions d'hotel del món</b></h5>
      </div>
      <div class="row center">
        <a href="./forms/form_client_insert.php" id="download-button" class="btn-large waves-effect waves-light orange">Crear compte</a>
      </div>
      <br><br>
    </div>
  </div>


  <div class="container" background="https://www.fotohotels.com/img/home/home-slide-05.jpg" >
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
              <h5 class="center">Tipus Habitacions</h5>
                <!-- <span class="">Card Title</span> -->
                <p>Aqui podràs gaudir de la gran diversitat d'habitacions que tenim per reservar.</p>
              </div>
              <div class="card-action">
                <a href="./forms/form_TipusHabitacio_select.php">Visualitzar</a>
                <a href="./forms/form_reserves_insert.php">Reservar ara</a>
              </div>
            </div>
            <p class="center light"></p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center black-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center black-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>
  <?php include("./templates/footer.php"); ?>
  </body>
</html>
