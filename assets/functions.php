<?php
declare(strict_types=1);

/**
 * getAuthor description: Will fetch an author name from the $authors array with the help of an author-id from the $articles array
 * @param  array  $authors  The entire array/list of authors, including names and ids
 * @param  int    $authorId The authorId, fetched from the articles array
 * @return string           The name of an author with a particular id
 */
function getAuthor(array $authors, int $authorId): string
{
  return $authors[$authorId]['name'];
}

/**
 * compare description: Will compare publishing dates from the $articles array (or other specified array) and will, when used with usort function, return the array sorted by date. Alone, the compare function returns an integer that the usort function can then use.
 * @param  array $a The first item to be compared
 * @param  array $b The second item to be compared
 * @return int      An integer that the usort function will use to order the array items (articles) chronologically
 */
function compare(array $a, array $b): int
{
  $timestampA = strtotime($a['pblsh_date']);
  $timestampB = strtotime($b['pblsh_date']);
  // if ($timestampA == $timestampB) {
  //       return 0;
  //   }
  //   return ($timestampA < $timestampB) ? 1 : -1;
  //   The above commented-out code will do the same as the following line of code:
  return $timestampB - $timestampA;
}

/**
 * getPblshDate description: Converts a date in YYYY-MM-DD format to a format more common to newspapers (ex: October 24, 2018)
 * @param  string $pblshDate The publishing date in YYYY-MM-DD format, fetched from the $articles array.
 * @return string            The date, returned in more human readable form.
 */
function getPblshDate(string $pblshDate): string
{
  return date('F j, Y', strtotime($pblshDate));
}
