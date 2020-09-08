<?php
session_start();

if ($_SESSION['username']) {
    header('Location: user.php');
}
?>

<html>

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
            <form action="Action/reg.php" method="post" autocomplete="on" class="form__auth">
                <p class="authorization__text">Регистрация</p>
                <?php
                if ($_SESSION['message'])
                {
                    echo '<p class="error__message">' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message']);
                ?>
                <input type="text" class="username__input" placeholder="Логин" required name="username__reg"/>
                <input type="email" class="username__input" placeholder="Email" required name="email"/>
                <input type="password" class="username__input" placeholder="Пароль" required name="password__reg"/>
                <input type="password" class="username__input" placeholder="Подтвердите пароль" required name="password__reg__confirm"/>
                <button type="submit" class="username__input username__input__button" name="signin">Зарегистрироваться</button>
                <input type="button" class="username__input username__input__button" onClick='location.href="authorization.php"' value="Войти">
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
