<?php

require_once 'link/link.php';
$result_id = $_GET['id'];
$result = mysqli_query($link, "SELECT * FROM `items` WHERE `id` = '$result_id'");
$result = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Изменение таблицы</title>
</head>

<body>
    <div class="container">
        <div class="main_create">
            <div class="signup_create">
                <form action="editTable/update.php" method="post">
                    <input type="hidden" name="id" value="<?= $result['id'] ?>">
                    <label for="chk" aria-hidden="true">Изменение данных в таблице</label>
                    <input type="text" name="type" placeholder="Тип" required="" value="<?= $result['type'] ?>">
                    <input type="text" name="descr" placeholder="Описание" required="" value="<?= $result['descr'] ?>">
                    <input type="text" name="image" placeholder="Картинка" required="" value="<?= $result['image'] ?>">
                    <input type="date" name="date" placeholder="Год" required="" value="<?= $result['date'] ?>">
                    <button type="submit">Изменить</button>
                    <a href="mytables.php">Назад</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>