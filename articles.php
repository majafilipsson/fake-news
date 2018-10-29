<?php
declare(strict_types=1);

?>


<div class="article-container">
    <?php usort($articles, "compare"); ?>
    <?php foreach ($articles as $article) : ?>
        <div class="shadow p-3 rounded article">
            <div class="bg-transparent clearfix">
                <h4 class="float-left mb-0"><?= $article['title'] ?></h4>
                <p class="float-right mb-0"><?= getAuthor($authors, $article['author']) ?></p>
            </div>
            <hr>
            <p class="font-italic"><?= 'Published on ' . getPblshDate($article['pblsh_date']) ?></p>
            <p><?= $article['content']; ?></p>
            <img class="inline-block" src="img/like.png"><small class="inline-block"><?= $article['likes'] . ' likes' ?></small>
        </div>
    <?php endforeach; ?>
</div>
