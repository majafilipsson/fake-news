<?php

declare(strict_types=1);

function getAuthor(array $authors, int $authorId): string
{
  return $authors[$authorId]['name'];
}


 ?>
