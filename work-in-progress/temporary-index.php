declare(strict_types=1);

require __DIR__.'/assets/data.php';
require __DIR__.'/assets/functions.php';


<body>


  <h1>FAKE NEWS</h1>
  <hr>

  <!-- <php usort($articles, 'sortByDate');?> -->

  <?php foreach ($articles as $article) : ?>
    <div class="article">
      <h3><?= $article['title'] ?></h3>
      <h6><?= getAuthor($authors, $article['author']) ?></h6>
      <p><?= $article['pblsh-date'] ?></p>
      <p><?= $article['likes'] ?></p>
      <p><?= substr($article['content'], 0, 200).'...'; ?></p>

    </div>

  <?php endforeach; ?>

</body>

addig stuff to see if git works
