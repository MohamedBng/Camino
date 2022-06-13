<?php
require_once('autoload.php');
$id = $_GET['id'];
?>
<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Hello, world!</title>
  </head>
  <body>
   <div>
    <img class="logoUpdate" src="img/camino_logo.jpg" alt="logo">
    


    <form enctype="multipart/form-data" action="../Camino/php/Item.php" method="post" class="formUpdate">
      <p>Nouveau Titre</p>
      <input type="text" name="titre" placeholder="Nouveaux Titre">
      <input type="hidden" name="id" value= <?php echo $id  ?> >
      <button type="submit" name="update" value="update">Save</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </div>
</body>
</html>