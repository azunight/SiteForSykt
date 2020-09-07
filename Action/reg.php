<?php
    session_start();
    require_once('../connection.php');
    $username = filter_var(trim($_POST['username__reg']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password__reg']), FILTER_SANITIZE_STRING);
    $password1 = filter_var(trim($_POST['password__reg__confirm']), FILTER_SANITIZE_STRING);
    $datatime = date('Y-m-d H:i:s');
    $role = 3;

    $password = md5($password."Nod4Zec5gy6");
    $password1 = md5($password1."Nod4Zec5gy6");

    $stmt = $connection->prepare("SELECT `username` FROM `users` WHERE `username` = ?");
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        $_SESSION['message'] = 'Логин занят!';
        header("Location: ../registration.php");
        }
    else {
        if ($password === $password1) {
            $stmt = $connection->prepare("INSERT INTO `users` (`username`, `email`, `password`, `role`, `datatime`) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param('sssss', $username, $email, $password, $role, $datatime);
            $stmt->execute();
            if($stmt->affected_rows){
                $_SESSION['nice'] = "Регистрация прошла успешно!";
            } else {
                $_SESSION['message'] = "Проверьте данные!";
            }
            $stmt->close();
            header('Location: ../authorization.php');
        } else {
            $_SESSION['message'] = 'Пароли не совпадают!';
            header('Location: ../registration.php');
        }
    }

    $message = 'Регистрация прошла успешно!';
    $to = 'onemore999@yandex.ru';
    $from = 'pt.prt@yandex.ru';
    $subject = "=?utf-8?B?".base64_encode("Регистрация на EWT")."?=";
    $headers = "From: $from \r\nReply-to: $from\r\nContent-type: text/html; charset=utf-8\r\n";

    mail ($to, $subject, $message, $headers);
    $mysql->close();
