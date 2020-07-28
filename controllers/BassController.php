<?php
    spl_autoload_register(function ($class) {
        include 'models/' . $class . '.php';
    });

function indexAction() {
    $Bdd= new Bdd;
    $connexion= $Bdd->getConnection();
    $pageTitle = 'Basse';
    $Article= new Article;
    $article= $Article->selecttypeArticle($connexion);

    require('views/bass/bass.php');
    


}
