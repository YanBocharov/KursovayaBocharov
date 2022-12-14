<?php

require_once '../link/link.php';
$id = $_GET['id'];

mysqli_query($link, "DELETE FROM `items` WHERE `items`.`id` = '$id'");

header('Location: ../mytables.php ');
?>