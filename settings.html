<?php
header('Content-Type: text/html; charset=utf8');
session_start();
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
else {
    session_destroy();
    header("Location: authorization.php");
}
require_once('connection.php');
?>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сыктывкар</title>
    <link rel="shortcut icon" href="/Img/favicon.png" type="image/x-icon" sizes="any">
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
                    <li><a href="about.php">Подробнее о городе</a>
                      <ul class="dropdown" aria-label="submenu">
                        <li><a href="attractions.php">Достопримечательности</a></li>
                        <li><a href="stars.php">Известные личности</a></li>
                        <li><a href="map.php">Карта</a></li>
                        <li><a href="about.php">О городе</a></li>
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
            <form action="Action/change.php" method="post" autocomplete="on" class="form__auth">
                <p class="authorization__text">Смена пароля</p>
                <?php
                if ($_SESSION['recordedSave'])
                {
                    echo '<p class="all__message">' . $_SESSION['recordedSave'] . '</p>';
                }
                if ($_SESSION['recordedError'])
                {
                    echo '<p class="error__message">' . $_SESSION['recordedError'] . '</p>';
                }
                unset($_SESSION['recordedSave']);
                unset($_SESSION['recordedError']);
                ?>
                <input type="password" class="username__input" placeholder="Текущий пароль" required name="currentPassword"/>
                <input type="password" class="username__input" placeholder="Новый пароль" required name="newPassword"/>
                <input type="password" class="username__input" placeholder="Повторите новый пароль" required name="newPasswordConfirm"/>
                <button type="submit" class="username__input username__input__button" name="reset">Сменить</button>
            </form>
        </div>

        <div class="footer">
            <div class="footer__copyright">
                © 2020, сайт-визитка города Сыктывкар
            </div>
        </div>
    </div>
</body>

</html>
