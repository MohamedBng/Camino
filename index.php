<?php
require_once('autoload.php');
?>
<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/styleIndex.css">

    <link rel="shortcut icon" href="img/camino_logo.jpg" type="image/x-icon">
    <title>Camino TV</title>
  </head>
  <body>
    <header>
      <img src="img/camino_logo.jpg">
      <nav id="menuBurger">
        <img id="burger" src="img/burger.png">
      </nav>
      <nav>

        <ul>
          <li>Nouveauté</li>
          <li>Homme</li>
          <li>Femmes</li>
          <li>Enfant</li>
          <li>Promotions</li>
          <li>Collections</li>
        </ul>

      </nav>
      <input type="search" name="search" placeholder="Rechercher">
    </header>
    

    <main>
      <?php
      $item = new Item;
      $item->afficherItem();

      ?>
      
    </main>
    <section class="texte">
      <h1>Eum galisum voluptatem et reprehenderit laborum cum voluptatem ratione! </h1>

      <p>Lorem ipsum dolor sit amet. Ad dignissimos molestiae At impedit possimus sit animi eaque aut ullam expedita ea velit repellat et saepe quia ex soluta ratione. Sed possimus doloremque sit aliquid dolorum At velit sapiente At dolorem blanditiis est rerum fuga nam nesciunt quia. Vel pariatur nulla et praesentium autem eum dolore asperiores. Sit laudantium voluptate aut debitis voluptatibus eum consequatur rerum id quos quia.Qui ullam corporis ut excepturi soluta ut consequatur vero sed dicta sunt? Ea sint eligendi a expedita quos in veniam tempore aut fuga nulla. Non omnis beatae est laborum atque non voluptatem enim est illum nisi.Qui ullam corporis ut excepturi soluta ut consequatur vero sed dicta sunt? Ea sint eligendi a expedita quos in veniam tempore aut fuga nulla. Non omnis beatae est laborum atque non voluptatem enim est illum nisi. Qui ullam corporis ut excepturi soluta ut consequatur vero sed dicta sunt? Ea sint eligendi a expedita quos in veniam tempore aut fuga nulla. Non omnis beatae est laborum atque non voluptatem enim est illum nisi.  </p>
      <img src="img/kindpng_118346.png">
      <h2>Ut quia excepturi nam  eveniet. </h2>

      <p>Ut consequatur deleniti cum placeat voluptas non asperiores molestias in maiores possimus rem aperiam ullam et provident delectus ut animi natus. Cum consequatur magni qui corporis nihil ad voluptas sint aut voluptate iste sed consequatur numquam ut voluptate voluptatibus a Quis repellat. Est explicabo quos sit galisum voluptatem non aspernatur sint et explicabo quibusdam non quas rerum.Qui ullam corporis ut excepturi soluta ut consequatur vero sed dicta sunt? Ea sint eligendi a expedita quos in veniam tempore aut fuga nulla. Non omnis beatae est laborum atque non voluptatem enim est illum nisi.  </p>



      <h2>Ut repellendus blanditiis et animi quisquam et tenetur rerum. </h2>
      <p>Qui ullam corporis ut excepturi soluta ut consequatur vero sed dicta sunt? Ea sint eligendi a expedita quos in veniam tempore aut fuga nulla. Non omnis beatae est laborum atque non voluptatem enim est illum nisi.Qui ullam corporis ut excepturi soluta ut consequatur vero sed dicta sunt? Ea sint eligendi a expedita quos in veniam tempore aut fuga nulla. Non omnis beatae est laborum atque non voluptatem enim est illum nisi.Qui ullam corporis ut excepturi soluta ut consequatur vero sed dicta sunt? Ea sint eligendi a expedita quos in veniam tempore aut fuga nulla. Non omnis beatae est laborum atque non voluptatem enim est illum nisi. </p>

      <blockquote cite="https://www.loremipzum.com">Et voluptatem voluptatem sed expedita placeat sit recusandae sunt sed voluptas voluptas ex enim dolorem et omnis animi! </blockquote>
      <h2>Qui dolorem maiores et fugit illo. </h2>
      <p>Vel deserunt ducimus qui dolores veniam qui voluptatem omnis non nisi ratione qui molestiae rerum  possimus quia sed omnis earum. A asperiores unde et voluptatem laudantium ut repellendus eligendi.Qui ullam corporis ut excepturi soluta ut consequatur vero sed dicta sunt? Ea sint eligendi a expedita quos in veniam tempore aut fuga nulla. Non omnis beatae est laborum atque non voluptatem enim est illum nisi. Qui ullam corporis ut excepturi soluta ut consequatur vero sed dicta sunt? Ea sint eligendi a expedita quos in veniam tempore aut fuga nulla. Non omnis beatae est laborum atque non voluptatem enim est illum nisi. Qui ullam corporis ut excepturi soluta ut consequatur vero sed dicta sunt? Ea sint eligendi a expedita quos in veniam tempore aut fuga nulla. Non omnis beatae est laborum atque non voluptatem enim est illum nisi. Qui ullam corporis ut excepturi soluta ut consequatur vero sed dicta sunt? Ea sint eligendi a expedita quos in veniam tempore aut fuga nulla. Non omnis beatae est laborum atque non voluptatem enim est illum nisi. Qui ullam corporis ut excepturi soluta ut consequatur vero sed dicta sunt? Ea sint eligendi a expedita quos in veniam tempore aut fuga nulla. Non omnis beatae est laborum atque non voluptatem enim est illum nisi.  </p>
    </section>
  </body>
  </html>