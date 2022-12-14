<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сортировка</title>
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
    <table id="table-id" class="table">
        <caption>Рейтинг языков программирования</caption>
        <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th>Зарплата</th>
                <th>Количество часов</th>
            </tr>
        </thead>
        <tr>
            <td>1</td>
            <td>JavaScript</td>
            <td>3000</td>
            <td>2400</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Java</td>
            <td>5600</td>
            <td>3200</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Python</td>
            <td>3400</td>
            <td>2400</td>
        </tr>
        <tr>
            <td>4</td>
            <td>PHP</td>
            <td>2900</td>
            <td>1600</td>
        </tr>
        <tr>
            <td>5</td>
            <td>C</td>
            <td>7900</td>
            <td>3200</td>
        </tr>
        <tr>
            <td>6</td>
            <td>C++</td>
            <td>1500</td>
            <td>4000</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Ruby</td>
            <td>8000</td>
            <td>4800</td>
        </tr>
    </table>
    <link rel="stylesheet" href="css/style.min.css">
    <script src="libs/bootstrap-5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='libs/tablesort-master/dist/tablesort.min.js'></script>
    <script src="js/script.js"></script>
</body>

</html>