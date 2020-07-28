<?php
class Article{
    public function insertArticle($connection, $title, $topic, $content, $target_file, $date) {
        $req = $connection->prepare("INSERT INTO article(titre, contenu, document, categorie, id_admin, date) VALUES(:titre, :contenu, :document, :categorie, :id_admin, :date)");
        $req->execute(array(
            'titre' => $title,
            'categorie' => $topic,
            'contenu' => $content,
            'document' => $target_file,
            'date'=>$date,
            'id_admin'=>$_SESSION['id']
            
        ));

    }
    public function listeArticle($connection){
        $reqarticle = $connection->prepare("SELECT * FROM article");
        $reqarticle->execute();

        return $reqarticle;
    }
    public function supprimeArticle($connexion, $articleId){
        $req = $connexion->prepare("DELETE FROM article  WHERE id= $articleId ");
        $req->execute();
    }
    public function editArticle($connexion, $articleId){
        $req = $connexion->prepare("SELECT* FROM article  WHERE id= $articleId ");
        $req->execute();

        return $req;
    }
    public function updateArticle($connexion, $title, $topic, $content, $articleId, $document){
        $req = $connexion->prepare("UPDATE article SET document = :document, titre = :titre, categorie= :categorie, contenu = :contenu   WHERE id= $articleId ");
        $req->execute(array(
            'titre' => $title,
            'categorie' => $topic,
            'contenu' => $content,
            'document' => $document
        ));
    }
    public function selecttypeArticle($connexion){
        $req = $connexion->prepare("SELECT* FROM article ");
        $req->execute();

        return $req;
    }
}