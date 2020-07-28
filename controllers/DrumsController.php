<?php
    spl_autoload_register(function ($class) {
        include 'models/' . $class . '.php';
    });
function indexAction() {
    $pageTitle = 'Batterie';
    $Bdd= new Bdd;
    $connexion= $Bdd->getConnection();
    $Article= new Article;
    $article= $Article->selecttypeArticle($connexion);
    require('views/drums/drums.php');
    
}