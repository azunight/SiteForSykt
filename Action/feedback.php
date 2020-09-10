<?php
session_start();
require_once('../connection.php');
header('Content-Type: text/html; charset=utf8');

if (isset($_POST['feedback__topic']) && isset($_POST['feedback__text'])) {
    $username = $_SESSION['username'];
    $topic = filter_var(trim($_POST['feedback__topic']), FILTER_SANITIZE_STRING);
    $text = filter_var(trim($_POST['feedback__text']), FILTER_SANITIZE_STRING);
    $time = $_POST['time'];

    $stmt = $connection->prepare("SELECT `email` from `users` WHERE `username` = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $emailResult = $stmt->get_result();
    $stmt->close();
    $emailUser = mysqli_fetch_array($emailResult);

    $stmt= $connection->prepare("INSERT INTO `feedback` (`user`, `email`, `topic`, `text`, `time`) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $username, $emailUser['0'], $topic, $text, $time);
    $stmt->execute();
    if($stmt->affected_rows){
        $_SESSION['nice'] = "Сообщение отправлено!";
    } else {
        $_SESSION['error'] = "Ошибка! Повторите позже.";
    }
    $stmt->close();
    header('Location: ../feedback.php');
}
