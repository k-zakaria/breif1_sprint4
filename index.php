<?php
class Article{
    private $titre;
    private $contenu;
    private $date_de_cret;

    public function __construct($titre, $contenu, $date_de_cret) {
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->date_de_cret = $date_de_cret;
    }

    public function getTitre (){
        return $this->titre;
    }
    public function setTitre ($titre){
        $this->titre = $titre;
    }

    public function getContenu (){
        return $this->contenu;
    }
    public function setContenu ($contenu){
        $this->contenu = $contenu;
    }
    
    public function getDate_de_cret (){
        return $this->date_de_cret;
    }
    public function setDate_de_cret ($Date_de_cret){
        $this->Date_de_cret = $Date_de_cret;
    }

    public function __toString (){
        return  
    }
}