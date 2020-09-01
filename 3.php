<?php
session_start();
require('connect.php');
?>
<!DOCTYPE html>
<html>
 <head>

  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device=width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
  <title>Город Сыктывкар</title>
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
    text-align: center;
    font-size: 56px; /* Размер шрифта */
    margin-top: 0px; /* Убираем отступы */
    color: #000; /* Цвет текста */
   }
   h2 {
   position:absolute;
   top:13px;
   font:12pt Tahoma;
    margin: 0px 10% 0px 8%;
	
   }
     h3 {
	 font: 1pt Tahoma;
	 font-size: 26px;
    margin: 0px 10% 0px 8%; 
   }
   /*h4 {*/
   /*position:absolute;*/
   /*top:13px;*/
   /*font:12pt Tahoma;*/
   /* margin: 0px 10% 0px 8%;*/
   /*}*/
   
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
   background: #343a40; /* Цвет фона */
	padding: 50px; /* Поля вокруг текста */
    color: #fff; /* Цвет текста */
    clear: left; /* Отменяем действие float */
	
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
</style>
  
 </head>
 <body>
  <div id="header"><h2  style="color: #fff; font-size: 20px;  line-height: 100%;" align='left' >Сыктывкар</h2>
<p align='right'>
<a href="3.php">Главная</a>&nbsp;&nbsp;&nbsp;                                        
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
	<!--<a href="login.php">Войти</a>&nbsp;&nbsp;&nbsp;-->
	<!--<a href="#top">Наверх</a>&nbsp;&nbsp;&nbsp;&nbsp;-->

   </div>
 
  <div class="container">
      <a href="#top" title="Назад" class="topbutton">^Наверх</a>
      <strong><center><h1 class="display-3 text-center text-white mt-4" id="Text-Shapka"> <img src="45.JPG" width="100%" height="30%"></h1></strong>
    </div>
  </div>
<div id="content">
  <p align='left'><h3 class="mt-4 text-center" ><center><strong>Основные сведения:</h3></strong>
  
    <ul  style="color: #00; font-size: 30px; font-weight: normal; line-height: 150%; text-shadow: #171717 ; margin-left:210px; margin-right:210px;" >
     <li><big  style="color: #cc3131; font-weight: 600;">Сыктывкар</big> — город республиканского значения в России. Столица и административный центр Республики Коми. Образует городской округ «Сыктывкар».</li>
	 
     <li><big  style="color: #cc3131; font-weight: 600;">Площадь: </big> 152 квадратных км.</li>
     <li><big  style="color: #cc3131; font-weight: 600;">Основан </big> в 1780 году.</li>
     <li><big  style="color: #cc3131; font-weight: 600;">Население: </big>245 000 человек.</li>
     <li><big  style="color: #cc3131; font-weight: 600;">Плотность: </big>1609,51 чел./кв.км.</li>
     <li><big  style="color: #cc3131; font-weight: 600;">Часовой пояс UTC+3.</big></li>
     <li><big  style="color: #cc3131; font-weight: 600;">Национальный состав: </big>	
русские — 66,0%,
коми — 25,9%,
украинцы — 2,8%</li>
     <li><big  style="color: #cc3131; font-weight: 600;">День города: </big>	 
12 июня.</li> 
<h1 style="color: #7b42ff; font-size: 40px; font-weight: bold; line-height: 140%; text-shadow: #171717 2px 2px 1px; text-align: center;" align='center'><center>Сыктывкар</center><center><br><img src="200.jpg" alt="Сыктывкар" width="105%">
<p><center>Герб Сыктывкара</center><center><br><img src="100.png" alt="Сыктывкар" width="300"></h1>
     
    </ul>

  </div>

 <center> <div id="footer">&copy; Roman Sheglov Inc.  2017-2019 </div>
  
 </body>
</html>
