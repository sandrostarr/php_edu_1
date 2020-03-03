<?php

require_once __DIR__ . '/classes/GuestBook.php';

$path = __DIR__ . '/book.txt';

$book = new GuestBook($path);

$text = 'Sasha';
$book->append($text);
var_dump($book->getData());
$book->save();