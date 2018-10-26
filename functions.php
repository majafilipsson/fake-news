<?php

declare(strict_types=1);

require __DIR__.'/data.php';

function getAuthor(array $authors, int $authorId): string
{
  return $authors[$authorId]['name'];
}


 ?>
