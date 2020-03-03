<form action="" method="get">
    <input type="number" name="value1">
    <input type="number" name="value2">
    <button name="plus" value="1"> + </button>
    <button name="minus" value="1"> - </button>
    <button name="multiply" value="1"> * </button>
    <button name="divide" value="1"> / </button>
</form>

<?php

if ($_GET) {
    $value1 = $_GET['value1'];
    $value2 = $_GET['value2'];
    if ($_GET['plus']) {
        $res = $value1 + $value2;
    }
    if ($_GET['minus']) {
        $res = $value1 - $value2;
    }
    if ($_GET['multiply']) {
        $res = $value1 * $value2;
    }
    if ($_GET['divide']) {
        $res = $value1 / $value2;
    }
    echo $res;
}