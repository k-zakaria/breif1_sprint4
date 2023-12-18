<!-- <?php
    // include 'classArticle.php';
    // if (isset($_GET["id"])) {
    //     $titre = $_POST['titre'];
    //     $contenu = $_POST['contenu'];
    //     $articleId = $_GET["id"];
    //     $article = new Article('','');
    //     $article->setTitre($);
    //     $update = $article->update($articleId);
    //     if ($articleId) {
    //         header("Location: index.php"); 
    //         exit();
    //     } else {
    //         echo "Delete failed";
    //     }
    // }
?> -->

<?php
    include 'classArticle.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $articleId = $_GET["id"];
        $titre = $_POST['titre'];
        $contenu = $_POST['contenu'];
        $user = new Article($titre,$contenu);
        $user->setTitre($titre);
        $user->setContenu($contenu);
        $user->update($articleId);
        header("location:index.php");               
    }
?>