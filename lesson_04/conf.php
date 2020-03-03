<?php
$path = __DIR__ . '/book.txt';

function ReadBook($path) {
    $guests = file($path);
    return $guests;
}
