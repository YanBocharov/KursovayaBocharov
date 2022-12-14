<?php

require_once '../link/link.php';

$name = $_POST['type'];
$desc = $_POST['descr'];
$photo = $_POST['iamge'];
$year = $_POST['date'];

mysqli_query($link, "INSERT INTO `items` (`id`, `type`, `descr`, `image`, `date`) VALUES (NULL, '$name', '$desc', '$photo', '$year')");

header('Location: ../mytables.php ');


