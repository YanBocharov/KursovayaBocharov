<?php
require 'link/link.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица</title>
    <link rel="stylesheet" href="libs/bootstrap-5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <header class="header">
        <div class="container">
            <nav class="header__blocks">
                <div class="header__block">
                    <a href="index.php" class="header__logo">
                        <img src="assets/headerSection/vision.png" alt="brainLogo">
                    </a>
                </div>
                <div class="header__block">
                    <a href="description.php" class="header__link">Описание</a>
                    <a href="mytables.php" class="header__link">Таблицы</a>
                    <a href="sort.php" class="header__link">Сортировка</a>
                </div>
            </nav>
        </div>
    </header>

    <section class="myTable">
        <div class="container">
        <div class="table1">
                <table>
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Тип</th>
                            <th> Описание </th>
                            <th> Картинка </th>
                            <th> Год </th>
                        </tr>
                    </thead>
                    <?php
                    $results = mysqli_query($link, "SELECT * FROM items");
                    $results = mysqli_fetch_all($results);
                    foreach ($results as $result) {
                    ?>
                            <tr>
                                <td> <?= $result[0] ?> </td>
                                <td> <?= $result[1] ?> </td>
                                <td> <?= $result[2] ?> </td>
                                <td> <img style="width: 100px;" src="assets/img/<?= $result[3] ?>"> </td>
                                <td> <?= $result[4] ?> </td>
                                <td><a style="color:cyan; display: block; text-decoration: none" href="update.php?id=<?= $result[0] ?>">Изменить</a></td>
                                <td><a style="color:red; display: block; text-decoration: none" href="editTable/delete.php?id=<?= $result[0] ?>">Удалить</a></td>
                            </tr>

                        <?php
                        }
                            ?>

                            </tr>
                        <?php
                        ?>

                </table>
            </div>
            <a href="create.php" class="btn createBtn">Добавить новую запись</a>
        </div>
    </section>
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</body>

</html>