<?php

declare(strict_types=1);

require __DIR__.'/data.php';

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fakey Flakey News Flow</title>
  </head>
  <body>
    <h1>FAKE NEWS</h1>
    <hr>

    <!-- <php usort($articles, 'sortByDate');?> -->

    <?php foreach ($articles as $article) : ?>
    <div class="article">
      <h3><?= $article['title'] ?></h3>
      <h6><?= $article['author'] ?></h6>
      <p><?= substr($article['content'], 0, 200).'...'; ?></p>
    </div>

    <?php endforeach; ?>

  </body>
</html>
