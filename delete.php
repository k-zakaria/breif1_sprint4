<?php
    include 'classArticle.php';
    if (isset($_GET["id"])) {
        $articleId = $_GET["id"];
        $article = new Article('','');
        $delete = $article->delete($articleId);
        if ($articleId) {
            header("Location: index.php"); 
            exit();
        } else {
            echo "Delete failed";
        }
    }
?>

