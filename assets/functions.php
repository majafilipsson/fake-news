<?php

declare(strict_types=1);

function getAuthor(array $authors, int $authorId): string
{
  return $authors[$authorId]['name'];
}


function compare(array $a, array $b): int
{
  $timestampA = strtotime($a['pblsh-date']);
  $timestampB = strtotime($b['pblsh-date']);
  // if ($timestampA == $timestampB) {
  //       return 0;
  //   }
  //   return ($timestampA < $timestampB) ? 1 : -1;
  return $timestampB - $timestampA;
}

function getPblshDate(string $pblshDate): string
{
  return date('F j, Y', strtotime($pblshDate));
}


 ?>
