<?php
declare(strict_types=1);

$articles = [
  [
    'title' => 'Hogwarts and Beyond',
    'content' => file_get_contents(__DIR__.'/../content/001.txt'),
    'author' => 1,
    'pblsh_date' => '2018-10-24',
    'likes' => '162'
  ],
  [
    'title' => 'The Overcoat',
    'content' => file_get_contents(__DIR__.'/../content/002.txt'),
    'author' => 0,
    'pblsh_date' => '2017-08-10',
    'likes' => '111'
  ],
  [
    'title' => 'Viy',
    'content' => file_get_contents(__DIR__.'/../content/003.txt'),
    'author' => 0,
    'pblsh_date' => '2018-06-15',
    'likes' => '157'
  ],
  [
    'title' => 'Pride and Prejudice',
    'content' => file_get_contents(__DIR__.'/../content/004.txt'),
    'author' => 1,
    'pblsh_date' => '2017-04-23',
    'likes' => '145'
  ],
  [
    'title' => 'Alice in Wonderland',
    'content' => file_get_contents(__DIR__.'/../content/005.txt'),
    'author' => 4,
    'pblsh_date' => '2018-03-02',
    'likes' => '199'
  ],
  [
    'title' => 'Heart of a Dog',
    'content' => file_get_contents(__DIR__.'/../content/006.txt'),
    'author' => 2,
    'pblsh_date' => '2018-10-31',
    'likes' => '194'
  ],
  [
    'title' => 'Master and Margarita',
    'content' => file_get_contents(__DIR__.'/../content/007.txt'),
    'author' => 2,
    'pblsh_date' => '2018-02-11',
    'likes' => '666'
  ],
  [
    'title' => 'Sherlock Holmes',
    'content' => file_get_contents(__DIR__.'/../content/008.txt'),
    'author' => 3,
    'pblsh_date' => '2017-07-18',
    'likes' => '78'
  ],
  [
    'title' => 'The Great Gatsby',
    'content' => file_get_contents(__DIR__.'/../content/009.txt'),
    'author' => 3,
    'pblsh_date' => '2018-07-21',
    'likes' => '176'
  ],
  [
    'title' => 'Roll of Thunder Hear My Cry',
    'content' => file_get_contents(__DIR__.'/../content/010.txt'),
    'author' => 4,
    'pblsh_date' => '2018-05-23',
    'likes' => '184'
  ],
];


$authors = [
  [
    'name' => 'Nikolay Gogol',
    'id' => 0,
  ],
  [
    'name' => 'Joan English',
    'id' => 1,
  ],
  [
    'name' => 'Mikahil Bulgakov',
    'id' => 2,
  ],
  [
    'name' => 'John Rasnick',
    'id' => 3,
  ],
  [
    'name' => 'Nom DePlum',
    'id' => 4,
  ]
];
