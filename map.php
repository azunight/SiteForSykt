<?php
session_start();
$url = $_SERVER['REQUEST_URI'];
?>
<html lang="ru" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сыктывкар</title>
    <link rel="shortcut icon" href="/Img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="Style/reset.css">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="Style/fonts.css">
    <link rel="stylesheet" href="Style/header__nav.css">
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
                <nav role="navigation">
                  <ul>
                    <li><a href="about.php" <?php if ($url === '/about.php') echo 'style="color: #fff;"';?>>Подробнее о городе</a>
                      <ul class="dropdown" aria-label="submenu">
                        <li><a href="attractions.php" <?php if ($url === '/attractions.php') echo 'style="color: #fff;"';?>>Достопримечательности</a></li>
                        <li><a href="stars.php" <?php if ($url === '/stars.php') echo 'style="color: #fff;"';?>>Известные личности</a></li>
                        <li><a href="map.php" <?php if ($url === '/map.php') echo 'style="color: #fff;"';?>>Карта</a></li>
                        <li><a href="about.php" <?php if ($url === '/about.php') echo 'style="color: #fff;"';?>>О городе</a></li>
                      </ul>
                    </li>
                    <?php if ($_SESSION['username']) {
                        echo '<li><a href="profile.php">Профиль</a>
                                <ul class="dropdown" aria-label="submenu">
                                    <li><a href="settings.php">Настройки</a></li>
                                </ul>
                                </li>';
                        echo '<li><a href="logout.php">Выйти</a></li>';
                    } else {
                        echo '<li><a href="authorization.php">Войти</a></li>';
                    } ?>
                  </ul>
                </nav>
            </div>
        </header>

        <div class="content">
            <iframe class="yandex__map" src="https://yandex.ru/map-widget/v1/?um=constructor%3A77f3d4e05054876ceb806ecf7aac564d93cd90c11ce5823b9ba0f3ddebae966d&amp;source=constructor"></iframe>
        </div>

        <div class="footer">
            <div class="footer__copyright">
                © 2020, сайт-визитка города Сыктывкар
            </div>
        </div>
    </div>
</body>

</html>
