<?php require('views/templates/header.php');?>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="assets/img/drums.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/bass2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/guitar3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="description">
    <div>
      <p><h1>ASTUCES, CONSEILS, EXERCICES POUR MUSICIENS DE TOUS NIVEAUX, BIENVENUE!</h1><p>
    </div>
  </div>
  <div class="container instruments">
    <div class="row">
      <div class="bass col-lg-3">
        <h1><a href="<?php echo SITE_DIR;?>bass/"class="button button_o" type="button" id="btnReserv">BASSE</a><h1>
      </div>
      <div class="col-lg-3 offset-lg-1">
        <h1><a href="<?php echo SITE_DIR;?>drums/"class="button button_o" type="button" id="btnReserv">BATTERIE</a><h1>
      </div>
      <div class="col-lg-3 offset-lg-1">
        <h1><a href="<?php echo SITE_DIR;?>guitar/"class="button button_o" type="button" id="btnReserv">GUITARE</a><h1>
      </div>
    </div>
  </div>

    
<?php require('views/templates/footer.php');?>