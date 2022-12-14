<?php 
    require 'link/link.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Описание</title>
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="libs/bootstrap-5.2.3/dist/css/bootstrap.min.css">
</head>
    <body>
        <header class="header">
            <div class="container">
                <div class="header__blocks">
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
                </div>
            </div>
        </header>

        <section class="descr">
            <div class="container">
                <div class="descr__block">
                    <div class="descr__text">
                        Под информационно-справочной системой (ИСС) понимается компьютерное программное средство, предназначенное для хранения и предъявления пользователю разнообразной информации справочного содержания. Для ИСС характерны иерархическая организация материала и быстрый поиск информации по различным параметрам
                    </div>
                    <img src="assets/descrSection/ISS.jpeg" alt="ISS" class="descr__img">
                </div>
                <div class="descr__block descr__block_2">
                    <img src="assets/descrSection/2img.png" alt="ISS" class="descr__img">
                    <div class="descr__text">
                        <ul class="descr__list">
                            Обычно информационно-справочные системы подразделяются по видам хранимой информации:
                            <li>- клиническая</li>
                            <li>- научная</li>
                            <li>- нормативно-правовая</li>
                        </ul>
                        <ul class="descr__list">
                            Кроме того, различают информационно-справочные системы:
                            <li>- документальные</li>
                            <li>- документографические</li>
                            <li>- фактографические</li>
                            <li>- полнотекстовые</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <link rel="stylesheet" href="css/style.min.css">
    </body>
</html>