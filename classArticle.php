<?php
include "./connect.php";
class Article extends Database{
    private $titre;
    private $contenu;

    public function __construct($titre, $contenu) {
        $this->titre = $titre;
        $this->contenu = $contenu;
    }

    public function getTitre ()
    {
        return $this->titre;
    }
    public function setTitre ($titre)
    {
        $this->titre = $titre;
    }

    public function getContenu ()
    {
        return $this->contenu;
    }
    public function setContenu ($contenu)
    {
        $this->contenu = $contenu;
    }
    
    public function ajout()
    {
        $conn = $this->connect();
        $articleQuery = $conn->prepare( "INSERT INTO article (titre,contenu, date_de_creation,personne_id) VALUES ('$this->titre','$this->contenu', NOW() ,'1')");
        $articleQuery->execute();
    }
    public  function affichage()
    {
        $conn = $this->connect();
        $affichageQuery = $conn->prepare("SELECT * FROM article");
        $affichageQuery->execute();
        return $affichageQuery->fetchAll(PDO::FETCH_ASSOC);
    }
    public function update($articleId)
    {
        $conn = $this->connect();
        $updateQuery = $conn->prepare("UPDATE article SET titre = '$this->titre', contenu = '$this->contenu' WHERE id = $articleId");
        $updateQuery->execute();
    }
    public function delete($articleId)
    {
        $conn = $this->connect();
        $deleteQuery = $conn->prepare("DELETE FROM article WHERE id = $articleId");
        $deleteQuery->execute();
    }
    

}