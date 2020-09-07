<?php
session_start();

if ($_SESSION['username']) {
    header('Location: profile.php');
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
                <div class="header__item header__button"><a href="authorization.php">Войти</a></div>
            </div>
        </header>

        <div class="content">
            <form action="Action/auth.php" method="post" autocomplete="on" class="form__auth">
                <p class="authorization__text">Авторизация</p>
                <input type="text" class="username__input" placeholder="Логин" required name="username"/>
                <input type="password" class="username__input" placeholder="Пароль" required name="password"/>
                <a href="reset.php" class="forgot__button">Забыли?</a>
                <button type="submit" class="username__input username__input__button" name="login">Войти</button>
                <input type="button" class="username__input username__input__button" onClick='location.href="registration.php"' value="Регистрация">
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
