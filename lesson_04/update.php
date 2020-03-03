<?php
include_once __DIR__ . '/conf.php';

if($_POST) {
    $new_guest = $_POST['name'] . PHP_EOL;
}

$guests = ReadBook($path);
$guests[] = $new_guest;

file_put_contents($path, $guests);

header('Location: index.php');
