<?php
header('Content-Type: text/html; charset=utf8');
session_start();
if($_SESSION['role'] == 'admin') {
    $username = $_SESSION['username'];
}
else {
header("Location: profile.php");
}
require_once('connection.php');
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
                    <li><a href="about.php">Подробнее о городе</a>
                      <ul class="dropdown" aria-label="submenu">
                        <li><a href="attractions.php">Достопримечательности</a></li>
                        <li><a href="stars.php">Известные личности</a></li>
                        <li><a href="map.php">Карта</a></li>
                        <li><a href="about.php">О городе</a></li>
                      </ul>
                    </li>
                    <?php if ($_SESSION['role'] == 'admin') {
                        echo '<li><a href="profile.php">Профиль</a>
                                <ul class="dropdown" aria-label="submenu">
                                    <li><a href="admin.php">admin</a></li>
                                    <li><a href="settings.php">Настройки</a></li>
                                    <li><a href="feedback.php">Написать</a></li>
                                    <li><a href="pay.php">Поддержка проекта</a></li>
                                </ul>
                                </li>';
                        echo '<li><a href="logout.php">Выйти</a></li>';
                    } elseif ($_SESSION['username']) {
                        echo '<li><a href="profile.php">Профиль</a>
                                <ul class="dropdown" aria-label="submenu">
                                    <li><a href="settings.php">Настройки</a></li>
                                    <li><a href="feedback.php">Написать</a></li>
                                    <li><a href="pay.php">Поддержка проекта</a></li>
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
            <form action="Action/topics.php" method="post">
                <?php
                    $stmt = $connection->prepare("SELECT `text`, `topic`, `user`, `email` FROM `feedback` ORDER BY `time`");
                    $stmt->execute();
                    $emailResult = $stmt->get_result();
                    $stmt->close();

                    $h = 0;
                    while ($emailUser = mysqli_fetch_array($emailResult)) {
                        echo '<div id="emailUser' . $h . '" name="emailUser' . $h . '">
                        <p class="topics__admin">' . $emailUser['1'] . ' от ' . $emailUser['3'] . ' (' . $emailUser['2'] . '): ' . $emailUser['0'] . '</p><button type="submit" name="' . $h . '" id="' . $h . '">Ответить</button></div>';
                        ++$h;
                    }
                ?>
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
