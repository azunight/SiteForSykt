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
    <link rel="shortcut icon" href="/Img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="Style/reset.css">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="Style/fonts.css">
    <link rel="stylesheet" href="Style/header__nav.css">
</head>

<body onload="time();">
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
            <form action="Action/feedback.php" method="post" autocomplete="on" class="form__auth">
                <p class="authorization__text">Форма обратной связи</p>
                <?php
                if ($_SESSION['nice']) {
                    echo '<p class="all__message">' . $_SESSION['nice'] . '</p>';
                }
                if ($_SESSION['error']) {
                    echo '<p class="error__message">' . $_SESSION['error'] . '</p>';
                }
                unset($_SESSION['nice']);
                unset($_SESSION['error']);
                ?>
                <input type="text" class="username__input" placeholder="Тема обращения" required name="feedback__topic"/>
                <textarea class="username__input feedback__textarea" placeholder="Текст обращения" required name="feedback__text"></textarea>
                <input type="hidden" name="time" id="timeGet" value= "" />
                <button type="submit" class="username__input username__input__button" name="feedback__send">Отправить</button>
            </form>
        </div>

        <div class="footer">
            <div class="footer__copyright">
                © 2020, сайт-визитка города Сыктывкар
            </div>
        </div>
    </div>
    <script type="text/javascript">
    function time() {
        let startdate = new Date().toISOString().slice(0, 10);
        let starttime = new Date().toISOString().slice(11, 19);
        var start = startdate + ' ' + starttime;
        document.getElementById('timeGet').value = start;
    }
    </script>
</body>

</html>
