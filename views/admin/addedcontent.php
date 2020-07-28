<?php require('views/templates/header.php');?> 

    <html>
        <body>

            <h1 class="admin_title">CONTENU AJOUTE</h1>

            <div class="container">
                <section class="row">
                    <div class="col-12">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="form_row_centered">
                            <h1><a href="<?php echo SITE_DIR;?>admin/ajout/"class="button button_o" type="button" id="btnReserv">NOUVEL AJOUT</a><h1>
                            </div>
                            <div class="form_row_centered">
                            <h1><a href="<?php echo SITE_DIR;?>admin/listarticle/"class="button button_o" type="button" id="btnReserv">MES ARTICLES</a><h1>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </body> 
    </html>
 
 

<?php require('views/templates/footer.php');?>