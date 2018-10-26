<?php

declare(strict_types=1);

require __DIR__.'/assets/data.php';
require __DIR__.'/assets/functions.php';

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <title>Fake News</title>
  </head>
  <body>

        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-secondary text-light border-bottom shadow-sm">
          <h3 class="my-0 mr-md-auto font-weight-normal">Fake News</h3>
          <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-light" href="#">Features</a>
            <a class="p-2 text-light" href="#">Enterprise</a>
            <a class="p-2 text-light" href="#">Support</a>
            <a class="p-2 text-light" href="#">Pricing</a>
          </nav>
        </div>

  <?php foreach ($articles as $article) : ?>

        <div class="shadow p-3 mb-4 mx-4 mt-4 rounded article">
          <div class="bg-transparent clearfix">
            <h4 class="float-left mb-0"><?= $article['title'] ?></h4>
            <p class="float-right mb-0"><?= getAuthor($authors, $article['author']) ?></p>
          </div>
          <hr>
          <p class="font-italic"><?= 'Published on ' . $article['pblsh-date'] ?></p>
          <p><?= substr($article['content'], 0, 200).'...'; ?></p>
          <img class="inline-block" src="img/like.png"><small class="inline-block">15 likes</small>
        </div>

  <?php endforeach; ?>



  </body>
</html>
