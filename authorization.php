<?php

session_start();
// header("Location: /3.php");
// require('connect.php');
    
if (isset($_POST['login'])){

if (isset($_POST['username']) and isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $connection = mysqli_connect('localhost', 'id9327971_admin',"admin" , 'id9327971_a');
    $query = "SELECT * FROM `id9327971_a`.`users` WHERE username='$username' and password='$password'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);
    
    if ($count == 1) {
        $_SESSION['username'] = $username; 
        header("Location: /star.php");
        }
    else {
        echo "Error!";
    }

}

if (isset($_SESSION['username'])) {

    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    
    echo "Здравствуйте " . $username . "";
    echo ", Вы вошли!";
    echo "
        <form class=\"form-signin\" method=\"POST\">
        <a href=\"star.php\" class=\"btn btn-lg btn-primary btn-block\">Эксклюзив</a>
        <a href=\"logout.php\" class=\"btn btn-lg btn-primary btn-block\">Выйти</a></form>";
    
    }
}
?>
<!doctype html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device=width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="style.css">-->
    <title>Вход</title>
    <style>
  body { 
      background: url(s1.jpg) no-repeat;
      background-size: 100%;
      }
      .form-signin {
    max-width: 400px;
    padding: 15px;
    margin: 0 auto;
    text-align: center;
}
</style>
</head>
<body>





<div class="container">
    <form class="form-signin" method="POST">
        <h2>Введите логин и пароль<br><br></h2>
        <input type="text" name="username" class="form-control" placeholder="Имя пользователя" required><br>
        <input type="password" name="password" class="form-control" placeholder="Пароль" required><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name='login'>Войти</button>
        <a href="index.php" class="btn btn-lg btn-primary btn-block">Регистрация</a>
    </form>
</div>

</body>
</html>