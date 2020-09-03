<?php
require('connect.php');

if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO `id9327971_a`.`users` (username, email, password) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($connection,$query) or die("Ошибка: ".mysqli_error($connection));
    echo "$result";

    if($result){
        $smsq = "Регистрация прошла успешно!";
    }else {
        $fsmsq = "Ошибка!";
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
    <title>Регистрация</title>
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
            <h2>Регистрация<br><br></h2>
            <?php if(isset($smsq)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsq; ?> </div> <?php } ?>
            <?php if(isset($fsmsq)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fsmsq; ?> </div> <?php } ?>
            <input type="text" name="username" class="form-control" placeholder="Имя пользователя" required><br>
            <input type="email" name="email" class="form-control" placeholder="Email" required><br>
            <input type="password" name="password" class="form-control" placeholder="Пароль" required><br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрироваться</button>
            <a href="login.php" class="btn btn-lg btn-primary btn-block">Вход</a>
        </form>
    </div>
</body>
</html>
