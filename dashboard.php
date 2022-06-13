<?php
require_once('autoload.php');
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
    <nav id="menu">
      <img class="logo" src="img/camino_logo.jpg" alt="logo">
      <ul>
        <li>
          Site
        </li>
      </ul>


    </nav>
    <main>
      <section class="corp">
        <div class="corpHeader">
          <p class="title">Panneau de controle</p>
        </div>

        <form method="post" >
          <div class="allItems">
            <?php
            $item = new Item;
            $item->afficher();

          ?></div>
          <button id="submit" type="submit" name="save">Save</button>
        </form>
      </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
  </html>