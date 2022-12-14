<?php
$server = "localhost";
$login = "root";
$password = "";
$name_db = "tables";

$link = mysqli_connect($server, $login, $password, $name_db);

$results = mysqli_query($link, "SELECT * FROM items");


if (!$link) {
    echo 'Соединение с БД невозможно. Код ошибки : ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
}
?>