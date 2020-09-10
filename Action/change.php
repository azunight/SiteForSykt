<?php
session_start();
require_once('../connection.php');
header('Content-Type: text/html; charset=utf8');

    $username = $_SESSION['username'];

    if (isset($_POST['currentPassword'])) {
        $currentPassword = $_POST['currentPassword'];
        $currentPassword = md5($currentPassword."Nod4Zec5gy6");
    }
    if (isset($_POST['newPassword'])) {
        $newPassword = $_POST['newPassword'];
        $newPassword = md5($newPassword."Nod4Zec5gy6");
    }
    if (isset($_POST['newPasswordConfirm'])) {
        $newPasswordConfirm = $_POST['newPasswordConfirm'];
        $newPasswordConfirm = md5($newPasswordConfirm."Nod4Zec5gy6");
    }

    $stmt = $connection->prepare("SELECT `password` FROM `users` WHERE `username` = ?");
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $resultPass = $stmt->get_result();
    $stmt->close();
    $countPass = mysqli_fetch_array($resultPass);

        if (!($newPassword == NULL) && ($newPassword === $newPasswordConfirm) && ($currentPassword === $countPass['0'])) {
            $stmt = $connection->prepare("UPDATE `users` SET `password` = ? WHERE `username` = ?");
            $stmt->bind_param('ss', $newPassword, $username);
            $stmt->execute();
            if($stmt->affected_rows){
                $_SESSION['recordedSave'] = "Пароль успешно обновлен!";
                header('Location: ../settings.php');
            } else {
                $_SESSION['recordedError'] = "Ошибка!";
                header('Location: ../settings.php');
            }
            $stmt->close();
        } else {
            $_SESSION['recordedError'] = 'Пароли не совпадают!';
            header('Location: ../settings.php');
        }
