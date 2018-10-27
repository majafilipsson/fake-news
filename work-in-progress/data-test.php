<?php

declare(strict_types=1);

$articles = [
  [
    'title' => 'The Heart of a Dog',
    'content' => file_get_contents(__DIR__.'/../txts\001.txt'),
    'author' => 2,
    'pblsh-date' => '2018-10-24',
    'likes' => '5'
  ],
  [
    'title' => 'Second article',
    'content' => file_get_contents(__DIR__.'/../txts/002.txt'),
    'author' => 0,
    'pblsh-date' => '2018-06-15',
    'likes' => '3'
  ],
  [
    'title' => 'Third article',
    'content' => file_get_contents(__DIR__.'/../txts/003.txt'),
    'author' => 0,
    'pblsh-date' => '2018-04-23',
    'likes' => '16'
  ],
  [
    'title' => 'Fourth article',
    'content' => file_get_contents(__DIR__.'/../txts/004.txt'),
    'author' => 3,
    'pblsh-date' => '2018-05-01',
    'likes' => '1'
  ],
];


$authors = [
  [
    'name' => 'Nikolay Gogol',
    'id' => '0',
  ],
  [
    'name' => 'Lev Tolstoy',
    'id' => '1',
  ],
  [
    'name' => 'Mikahil Bulgakov',
    'id' => '2',
  ],
  [
    'name' => 'Boris Pasternak',
    'id' => '3',
  ],
  [
    'name' => 'Anna Akhmatova',
    'id' => '4',
  ]
];

// foreach ($articles as $article){
//   $timestamp = strtotime($article['pblsh-date']);
//   echo $timestamp;
//   echo '<br>';
// }
//
// sort()

// print_r($articles)


function compare($a, $b) {
  $timestampA = strtotime($a['pblsh-date']);
  $timestampB = strtotime($b['pblsh-date']);
  if ($timestampA == $timestampB) {
    return 0;
  }
  return ($timestampA < $timestampB) ? 1 : -1;
}

usort($articles, "compare");

print_r($articles);
