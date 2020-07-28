<?php require('views/templates/header.php');?>
  <html>
    <body>


      <div class="description">
        <div>
          <p><h2>LA FOUDRE AU BOUT DES DOIGTS. FISSUREZ LE BÉTON ET FAITES VOLER LE VERRE EN ECLATS.</h2></p>
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

      <?php
        while ($row = $article->fetch(PDO::FETCH_BOTH)) {
          if(
            $row['categorie']=='Basse'


        ){ list($dossier1, $dossier2, $row['nom']) = explode("/", $row['document']);
      ?>

        <div class=section>
          <div class="container article">
            <div class="row">
              <div class="col-12 titre-article">
                <?php
                echo $row['titre'];
                ?>
              </div>
              <div class="col-12 contenu-article">
                <?php
                echo $row['contenu'];
                ?>
              </div>
              <div class="col-6 offset-3 telechargement">
              <a href="<?php echo SITE_DIR . $row['document']?>" 
                download="<?php echo $row['nom'] ?>" >Télécharger le document</a>
              </div>
            </div>
          </div>
        </div>

      <?php
      }}
      ?>



      
    </body>
  </html>
      
<?php require('views/templates/footer.php');?>