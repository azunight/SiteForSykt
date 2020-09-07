<?php
    session_start();
    require_once('../connection.php');
    if (isset($_POST['login'])){

    if (isset($_POST['username']) and isset($_POST['password'])){
        $username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
        $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

        $password = md5($password."Nod4Zec5gy6");

        $stmt = $connection->prepare("SELECT * FROM `users` WHERE `username` = ? AND `password` = ?");
        $stmt->bind_param('ss', $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $_SESSION['username'] = $username;
            $stmt = $connection->prepare("SELECT DISTINCT `role` FROM `users` WHERE `username` = ?");
            $stmt->bind_param('s', $username);
            $stmt->execute();
            $result_role = $stmt->get_result();
            $stmt->close();
            $count_role = mysqli_fetch_array($result_role);

                if ($count_role['0'] == 1) {
                    $_SESSION['role'] = 'admin';
                } else if ($count_role['0'] == 2) {
                    $_SESSION['role'] = 'moderator';
                } else if ($count_role['0'] >= 3) {
                    $_SESSION['role'] = 'user';
                } else {
                    $_SESSION['role'] = 'Ошибка!';
                }
            header("Location: ../profile.php");
            }
        else {
            $_SESSION['again'] = 'Попробуйте снова!';
            header('Location: ../authorization.php');
        }
    }
}
