<?php session_start(); include("./templates/header.php"); ?>
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
            <h2 class="center black-text"><i class="material-icons">flash_on</i></h2>
            <a href="./forms/form_reserves_insert.php"><h5 class="center">Habitacions</h5></a>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
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
