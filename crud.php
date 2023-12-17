<?php
    include 'classArticle.php';
    include 'connect.php';
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        $titre = $_POST['titre'];
        $contenu = $_POST['contenu'];
        $user = new Article($titre,$contenu);
        $user->setTitre($titre);
        $user->setContenu($contenu);
        $user->ajout();
        header("location:index.php");               
    }


        
    if (isset($_GET['id'])) {
        $articleId = $_GET['id'];
    
        if($_SERVER['REQUEST_METHOD']== 'POST'){
            $newtitre = $_POST['new_titre'];
            $newcontenu = $_POST['new_contenu'];
            $articles = new Article($titre,$contenu);
            $articles->setTitre($titre);
            $articles->setContenu($contenu);
            $articles->update($articleId);
            header("location:index.php");               
        }
       
        $affichageQuery = $conn->prepare("SELECT * FROM article WHERE id = $articleId");
        $affichageQuery->execute();
        $result = $affichageQuery->fetch(PDO::FETCH_ASSOC);
    }

    ?>
<form method="post" action="">
    <input type="text" name="new_titre" value="<?= $result['titre'] ?>" required class="form-control" />
    <textarea class="form-control" name="new_contenu" id="new_contenu"><?= $result['contenu'] ?></textarea>
    <button type="submit" name="update" class="btn btn-primary">Update</button>
</form>
