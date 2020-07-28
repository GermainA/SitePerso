<?php require('views/templates/header.php');?> 
    <html>
        <body>

            <h1 class="admin_title">BIENVENUE ADMINISTRATEUR</h1>

            <div class="container">
                <section class="row">
                    <div class="centered">
                        <form method="post">
                            <div class="form_row">
                                <label for="txt_mail">Adresse Email :</label>
                                <input type="mail" name="txt_mail" id="txt_mail" placeholder="adresse.mail@gmail.com" required />
                            </div>
                            <div class="form_row">
                                <label for="txt_pass">Mot de passe :</label>
                                <input class="admin_field" type="password" name="txt_pass" id="txt_pass" value="123" placeholder="VotreMotDePasse" required />
                                
                            </div>
                            <div class="form_row_centered">
                                <input class="button" type="submit" value="Se Connecter" name="adminconnect"id='adminconnect'/>
                            </div>
                            
                        </form>
                    </div>
                </section>
            </div>
        </body>
    </html>

<?php require('views/templates/footer.php');?>