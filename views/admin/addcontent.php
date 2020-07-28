<?php require('views/templates/header.php');?> 
    <html>
        <body>

            <h1 class="admin_title">Bienvenue Administrateur</h1>

            <div class="container">
                <section class="row">
                    <div class="col-12">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Titre</label>
                                <input name="title" type="text" class="titre" id="title">
                            </div>
                            <div class="form-group">
                                <label for="instrument">Instrument</label>
                                <select name="topic" class="topic" id="topic">
                                    <option value='Basse'>Basse</option>
                                    <option value='Batterie'>Batterie</option>
                                    <option value='Guitare'>Guitare</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Contenu</label>
                                <textarea name="content"class="form-control" id="content" rows="3"maxlength="3000"></textarea>
                            </div>
                        
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Joindre un document</label>
                                <input type="file" class="form-control-file" id="doc" name="doc">
                            </div>
                           
                            <div class="form_row_centered">
                                <input class="button" type="submit" value="Ajouter" name="addcontent"id='addcontent'/>
                            </div>
                            <div> 
                                <?php echo $erreur ?>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
  
 
 

<?php require('views/templates/footer.php');?>