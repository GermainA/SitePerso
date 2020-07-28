<?php
spl_autoload_register(function ($class) {
    include 'models/' . $class . '.php';
});
function indexAction() {
    $pageTitle = 'Administration';
    if(isset($_POST['adminconnect']) ){
        $mail=$_POST['txt_mail'];
        $mot_de_passe=$_POST['txt_pass'];
        $Bdd= new Bdd;
        $connexion= $Bdd->getConnection();
        $Admin= new Admin;
        $admin= $Admin->verifMail($connexion, $mail);
        
        $adminexist = $admin->fetch();

        if ($adminexist && password_verify($mot_de_passe, $adminexist['mot_de_passe'])) {
            session_start();
            $_SESSION['id'] = $adminexist['id'];
            $_SESSION['mail'] = $adminexist['adresse_mail'];
            header('Location:' . SITE_DIR . 'admin/ajout');
        } 
    }

    require('views/admin/login.php');
}

function ajoutAction(){
        if(isset($_POST['addcontent']) ){
            session_start();
            $Bdd= new Bdd;
            $connexion= $Bdd->getConnection();
            $date=date('Y/m/d');
            $title=htmlspecialchars($_POST['title']);
            $topic=htmlspecialchars($_POST['topic']);
            $content=htmlspecialchars($_POST['content']);
            $target_dir = "assets/docs/";
            $target_file = $target_dir . basename($_FILES['doc']["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            if (empty($_FILES['doc']["name"])){
                $target_file = "";
            }
            if ($imageFileType == "jpg" or $imageFileType == "pdf" or $imageFileType == "png" or empty($target_file) or $imageFileType == "jpeg" and $_FILES["photoplat"]["size"] > 1000000) {
            $Article= new Article;
            $Article->insertArticle($connexion, $title, $topic, $content, $target_file, $date);
            move_uploaded_file($_FILES["doc"]["tmp_name"], $target_file);
            
            header('Location:' . SITE_DIR . 'admin/success');

        }   else{
            $erreur= 'Le format du fichier selectionné ne peut être utilisé';
        }
    }
    require('views/admin/addcontent.php');
}

function successAction(){
    require('views/admin/addedcontent.php');
}

function listarticleAction(){
    $Bdd= new Bdd;
    $connexion= $Bdd->getConnection();
    $Article=new Article;
    $article= $Article->listeArticle($connexion);
    require('views/admin/mycontent.php');

}

function supprimearticleAction(){
    $requestUri    = str_replace(SITE_DIR, '', $_SERVER['REQUEST_URI']);
    $requestParams = explode('/', $requestUri);
    $articleId     = isset($requestParams[2]) ? $requestParams[2] : null;
    $Bdd= new Bdd;
    $connexion= $Bdd->getConnection();
    $Article=new Article;
    $article= $Article->editArticle($connexion, $articleId);
    $result=$article->fetch();
    unlink($result['document']);
    $Article-> supprimeArticle($connexion, $articleId);


    header('Location:' . SITE_DIR . 'admin/success');

}

function editarticleAction(){
    $requestUri    = str_replace(SITE_DIR, '', $_SERVER['REQUEST_URI']);
    $requestParams = explode('/', $requestUri);
    $articleId     = isset($requestParams[2]) ? $requestParams[2] : null;
    $Bdd= new Bdd;
    $connexion= $Bdd->getConnection();
    $Article= new Article;
    $article= $Article->editArticle($connexion, $articleId);
    $result=$article->fetch();

    if (isset($_POST['editcontent'])) {
        if (isset($_POST['title'])and isset($_POST['topic'])and isset($_POST['content'])){
            $target_dir = "assets/docs/";
            $target_file = $target_dir . basename($_FILES['doc']["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $title=$_POST ['title'];
            $topic=$_POST ['topic'];
            $content=$_POST ['content'];

            if ($imageFileType == "jpg" or $imageFileType == "pdf" or $imageFileType == "png" or empty($target_file) or $imageFileType == "jpeg" and $_FILES["photoplat"]["size"] > 1000000) {
                unlink($result['document']);
                $Article->updateArticle($connexion, $title, $topic, $content, $articleId, $target_file);
                move_uploaded_file($_FILES["doc"]["tmp_name"], $target_file);
                header('Location:' . SITE_DIR . 'admin/editarticle/' .$result['id']);
            } 
           else{
                $erreur= 'Le format du fichier selectionné ne peut être utilisé';

            }
            
        } 
        
    }
    require('views/admin/editarticle.php');


}

