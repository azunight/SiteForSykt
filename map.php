<?php
session_start();
?>
<!DOCTYPE html>
  <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
  
  <title>Сыктывкар</title>
  <style>
   body {
    position:absolute;
	font: 12pt Tahoma, Helvetica, sans-serif; /* Рубленый шрифт текста */
    margin: 0; /* Отступы на странице */
   }
   a:link{
   text-decoration: none;
    color: #ffffff;
   } 
   a:hover{
    text-decoration: none;
    color: #ffffff; /* цвет рамки */
    font-weight: bold; 
    }
    a:visited{
     text-decoration: none; 
      color: #ffffff; /* цвет рамки */
    }
   h1 {
    font: 1pt Tahoma;
    font-size: 56px; /* Размер шрифта */
	margin-left: 50px;
    margin-top: 70px; /* Убираем отступы */
    color: #000; /* Цвет текста */
   }
   h2 {
   position:absolute;
   top:13px;
   font:12pt Tahoma;
    margin: 0px 10% 0px 8%;
	
   }
     .topbutton {
width:100px;
border:2px solid #ccc;
background:#343a40;
text-align:center;
padding:10px;
position:fixed;
bottom:50px;
right:50px;
cursor:pointer;
font-family:verdana;
font-size:12px;
border-radius: 5px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
-khtml-border-radius: 5px;
}
   
   #header { /* Верхний блок */
    position:fixed;
	width:100%;
    background: #343a40; /* Цвет фона */
    padding: 0; /* Поля вокруг текста */
	margin: 0 0% 0 0%;
   }
   
   #content { /* Центральная колонка */
   
    margin: 0px 8% 0px 11%; /* Значения отступов */
    padding: 5px; /* Поля вокруг текста */
    
   }
   
   #footer { /* Нижний блок */
   margin: 0 auto;
   min-width: 1200px;
   position:absolute;
	width:102%;
   background: #343a40; /* Цвет фона */
	padding: 50px; /* Поля вокруг текста */
    color: #fff; /* Цвет текста */
    clear: left; /* Отменяем действие float */
	
   }
   
  </style>
 </head>
 <body>
 <div id="header"><h2  style="color: #fff; font-size: 20px;  line-height: 100%;" align='left' >Сыктывкар</h2>
<p align='right'><a href="3.php">Главная</a>&nbsp;&nbsp;&nbsp;
<a href="interview.php">Карта города</a>&nbsp;&nbsp;&nbsp;
    <a href="ask.php">Достопримечательности</a>&nbsp;&nbsp;&nbsp;
    <a href=star.php>Эксклюзив</a>&nbsp;&nbsp;&nbsp;
    <?php
    if(isset($_SESSION['username'])) {
        // echo "<a href=star.php>Эксклюзив</a>&nbsp;&nbsp;&nbsp;";
        echo "<a href=logout.php>Выйти</a>&nbsp;&nbsp;&nbsp;";
    }
    else {
        echo "<a href=login.php>Войти</a>&nbsp;&nbsp;&nbsp;";
    }
        ?>
	

   </div>
   </p>
  <div id="container">
 <a href="#top" title="Назад" class="topbutton">^Наверх</a>
   
   <h1 class="my-4">Карта города:</h1>

        <!-- Новостная лента -->
        <div id="content" style = "margin-left:50px;">
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A77f3d4e05054876ceb806ecf7aac564d93cd90c11ce5823b9ba0f3ddebae966d&amp;source=constructor"  width="1150px" height="1000px" frameborder="1"></iframe>
   </div>
   
   </div>
   <center><div id="footer">&copy; Roman Sheglov Inc.  2017-2019 </div>
  
 </body>
</html>