<?php
include_once __DIR__ . '/conf.php';

$guests = ReadBook($path);

foreach ($guests as $guest) {
    echo $guest . '<br>';
}

?>

<form action="update.php" method="POST">
    <input type="text" name="name">
    <button>Добавить</button>
</form>
