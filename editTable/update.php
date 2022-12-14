<?php 
require "../link/link.php";

$id = $_POST['id'];
$name = $_POST['type'];
$desc = $_POST['descr'];
$photo = $_POST['image'];
$year = $_POST['date'];

mysqli_query($link, "UPDATE `items` SET `type` = '$name',
 `descr` = '$desc', `image` = '$photo' , `date` = '$year' WHERE `items`.`id` = '$id'");

header('Location: ../mytables.php ');