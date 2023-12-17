<?php
class Article{
    private $titre;
    private $contenu;

    public function __construct($titre, $contenu) 
    {
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
        include "./connect.php";
        $articleQuery = $conn->prepare( "INSERT INTO article (titre,contenu, date_de_creation,personne_id) VALUES ('$this->titre','$this->contenu', NOW() ,'1')");
        $articleQuery->execute();
    }
    public function affichage()
    {
        include "./connect.php"; 
        $affichageQuery = $conn->prepare("SELECT * FROM article");
        $affichageQuery->execute();
        $affichageQuery->fetchAll(PDO::FETCH_ASSOC);
    }
    public function update($articleId){
        include "./connect.php";
        $updateQuery = $conn->prepare("UPDATE article SET titre = '$this->titre', contenu = '$this->contenu' WHERE id = $articleId");
        $updateQuery->execute();
    }
    public function delet($articleId){
        include "./connect.php";
        $deleteQuery = $conn->prepare("DELETE FROM article WHERE id = $articleId");
        $deleteQuery->execute();
    }
    

}