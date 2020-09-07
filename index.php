<?php
session_start();
?>
<html lang="ru" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сыктывкар</title>
    <link rel="shortcut icon" href="/Img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="Style/reset.css">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="Style/fonts.css">
</head>

<body>
    <div class="container">
        <header class="header">
            <div class="header__section">
                <div class="header__item header__logo">
                    <a class="index" href="index.php">Сыктывкар</a>
                </div>
            </div>
            <div class="header__section">
                <div class="header__item header__button"><a href="attractions.php">Подробнее о городе</a></div>
                <?php if ($_SESSION['username']) {
                    echo '<div class="header__item header__button"><a href="profile.php">Профиль</a></div>';
                    echo '<div class="header__item header__button"><a href="logout.php">Выйти</a></div>';
                } else {
                    echo '<div class="header__item header__button"><a href="authorization.php">Войти</a></div>';
                } ?>
            </div>

        </header>
        <div class="content">

        </div>
        <div class="footer">
            <div class="footer__copyright">
                © 2020, сайт-визитка города Сыктывкар
            </div>
        </div>
    </div>
</body>

</html>
