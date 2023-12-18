<?php
    include 'classArticle.php';
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        $titre = $_POST['titre'];
        $contenu = $_POST['contenu'];
        $user = new Article($titre,$contenu);
        $user->setTitre($titre);
        $user->setContenu($contenu);
        $user->ajout();
        header("location:index.php");               
    }
?>