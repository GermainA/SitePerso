<?php
    spl_autoload_register(function ($class) {
        include 'models/' . $class . '.php';
    });
function indexAction() {
    $pageTitle = 'Guitare';
    $Bdd= new Bdd;
    $connexion= $Bdd->getConnection();
    $Article= new Article;
    $article= $Article->selecttypeArticle($connexion);
    require('views/guitar/guitar.php');
}