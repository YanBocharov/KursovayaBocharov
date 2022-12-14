<?php

require_once 'link/link.php';

$id = $_POST['id'];
$name = $_POST['type'];
$desc = $_POST['descr'];
$photo = $_POST['image'];
$year = $_POST['date'];

mysqli_query($link, "UPDATE `items` SET  `type` = '$name', `descr` = '$desc', `image` = '$photo', `date` = '$year' WHERE `items`.`id` = '$id'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Добавление данных в таблицу</title>
</head>

<body>
    <div class="container">
        <div class="main_create">
            <div class="signup_create">
                <form action="editTable/create.php" method="post">
                    <label for="chk" aria-hidden="true">Добавить данные в таблицу</label>
                    <input type="text" name="type" placeholder="Тип" required="">
                    <input type="text" name="descr" placeholder="Описание" required="">
                    <input type="text" name="image" placeholder="Картинка" required="">
                    <input type="date" name="date" placeholder="Год" required="">
                    <button type="submit">Добавить</button>
                    <a href="mytables.php">Назад</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>