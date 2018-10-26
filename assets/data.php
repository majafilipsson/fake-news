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
    'pblsh-date' => 's',
    'likes' => 'def'
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
