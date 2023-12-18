<?php $id = $_GET['id'] ; ?>

<form action="update.php?id=<?= $id ?>" method="POST" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" name="titre" required class="form-control" />
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <textarea class="form-control" name="contenu" id="contenu "></textarea>
  </div>
  <button type="submit" name="update" class="btn btn-primary">Submit</button>
</form>