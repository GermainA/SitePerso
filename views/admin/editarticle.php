<?php require('views/templates/header.php');?> 
    <html>
        <body>

            <h1 class="admin_title">MODIFIER UN ARTICLE</h1>

            <div class="container">
                <section class="row">
                    <div class="col-12">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Titre</label>
                                <input name="title" value= "<?php echo $result['titre']; ?>" type="text" class="titre" id="title">
                            </div>
                            <div class="form-group">
                                <div>
                                    <p>La catégorie actuelle est :<strong><?php echo $result['categorie']; ?></strong></p>
                                    
                                </div>
                                <label for="instrument">Instrument</label>
                                <select name="topic" class="topic" id="topic">
                                    <option value='basse'>Basse</option>
                                    <option value='batterie'>Batterie</option>
                                    <option value='guitare'>Guitare</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Contenu</label>
                                <textarea name="content"class="form-control" id="content" rows="3"maxlength="3000"><?php echo $result['contenu']; ?></textarea>
                            </div>
                        
                                <div class="form-group">
                                <div>
                                    <p>Le document séléctionné est :<strong><?php echo $result['document']; ?></strong></p> 
                                </div>
                                    <label for="exampleFormControlFile1">Joindre un document</label>
                                    <input type="file" class="form-control-file" id="doc" name="doc"/>
                                </div>
                           
                            <div class="form_row_centered">
                                <input class="button" type="submit" value="Modifier" name="editcontent"id='editcontent'/>
                            </div>
                            <div> 
                                <?php echo $erreur ?>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </body>
    </html>
<?php require('views/templates/footer.php');?>