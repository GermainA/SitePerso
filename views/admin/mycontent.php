<?php require('views/templates/header.php');?> 

    <html>
        <body>

            <h1 class="admin_title">MES ARTICLES</h1>

            <div class="container">
                <section class="row">
                    <div class="col-12">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="form_row_centered">
                            <h1><a href="<?php echo SITE_DIR;?>admin/ajout/"class="button button_o" type="button" id="btnReserv">NOUVEL AJOUT</a><h1>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Catégorie</th>
                                <th scope="col">Date de création</th>
                                <th scope="col">Contenu</th>
                                <th scope="col">Document</th>
                                <th scope="col">Modifier</th>
                                <th scope="col">Supprimer</th>
                                
                                </tr>
                            </thead>
                            <?php
                                while ($row = $article->fetch(PDO::FETCH_BOTH)) {
                            ?>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td><?php echo $row['titre'] ?></td>
                                <td><?php echo $row['categorie'] ?></td></td>
                                <td><?php echo $row['date'] ?></td></td>
                                <td><?php echo $row['contenu'] ?></td></td>
                                <td><?php echo $row['document'] ?></td></td>
                                <td><a href="<?php echo SITE_DIR .'admin/editarticle/' .$row['id']?>"><i class="far fa-edit"></i></a></td>
                                <td><a href="<?php echo SITE_DIR .'admin/supprimearticle/'.$row['id']?>"><i class="fas fa-trash-alt"></i></a></td>
                                </tr>
                            </tbody>
                                <?php }?>
                        </table>
                    </div>
                </section>
            </div>
        </body> 
        <script src="https://kit.fontawesome.com/be20f2a41d.js" crossorigin="anonymous"></script>
    </html>