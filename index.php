<?php 
  include_once 'classArticle.php';
  include_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOPS - Insert Data into database in php mysql using oops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>  
    <div class="container">
    <nav class="navbar navbar-expand-lg bg-white mb-5 ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Article</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

</div>
    <main class="flex-shrink-0">
        <div class="container">
            <table class="table">
                <thead class="table table-bordered">
                    <tr class="bg-primary text-center">
                        <th>Titre</th>
                        <th>Contenu</th>
                        <th>Date de création</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php 
                    // $affichageQuery = $conn->prepare("SELECT * FROM article");
                    // $affichageQuery->execute();
                    // $result = $affichageQuery->fetchAll(PDO::FETCH_ASSOC);
                    $articles = new Article('','');
                    $result = $articles->affichage();
                        foreach($result as $article) { ?>     
                            <tr class="text-center">
                                <td><?= $article['titre'] ?></td>
                                <td><?= $article['contenu'] ?></td>
                                <td><?= $article["date_de_creation"] ?></td>
                                <td><a href="updateForm.php?id=<?= $article['id'] ?>"  class="btn btn-primary">Edit</a>
                                <a href="delete.php?id=<?=$article['id']?>" class="btn btn-danger">Delet</a></td>
                            </tr>
                        <?php }
                    
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <div class="modal-footer">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Ajouter Article</button>
</div>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="./crud.php">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="titre" required class="form-control" />
                </div>
                <div class="modal-body">
                    <textarea class="form-control" name="contenu" id="contenu "></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
