<?php
session_start();
if(isset($_SESSION['username'])) { 
    
}
else { 
// session_destroy();
header("Location: /login.php");
}
require('connect.php');


?>
<!DOCTYPE html>
<html>
 <head>

  
  <meta name="viewport"
        content="width=device=width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">


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
   position:absolute;
	width:92%;
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
	<a href="logout.php">Выйти</a>&nbsp;&nbsp;&nbsp;
	

   </div>
 
  <div class="container">
      <a href="#top" title="Назад" class="topbutton">^Наверх</a>
      <strong><center><h1 class="display-3 text-center text-white mt-4" id="Text-Shapka"> <img src="45.JPG" width="100%" height="30%"></h1></strong>
    </div>
  </div>
   <div id="content">
    <h2></h2>
    <ul style="color: #fe2020; font-size: 30px"> 
	
     <h1 style="color: #7b42ff; font-size: 40px; font-weight: bold; line-height: 140%; text-shadow: #171717 2px 2px 1px;" align='center'> <center>Роман Аркадьевич Абрамович</center><center><br><img src="11.jpg" alt="Сыктывкар" width="650"> </h1>
	 <h1 style="color: #292929; font-size: 20px; font-weight: bold; line-height: 140%; "><center> Российский предприниматель, жил в городе с 1967 по 1971 год.</center><center><br></h1>
	 <h1 style="color: #7b42ff; font-size: 40px; font-weight: bold; line-height: 140%; text-shadow: #171717 2px 2px 1px;" align='center'> <center><p><center>Валентина Александровна Витязева </center><center><br><img src="13.JPG" alt="Сыктывкар"width="650"></h1>
	<h1 style="color: #292929; font-size: 20px; font-weight: bold; line-height: 140%; "><center>(1919—2010) — первый ректор Сыктывкарского государственного университета, первая женщина-ректор университета в СССР.</center><center><br> </h1>
	 <h1 style="color: #7b42ff; font-size: 40px; font-weight: bold; line-height: 140%; text-shadow: #171717 2px 2px 1px;" align='center'> <center><p><center>Раиса Петровна Сметанина</center><center><br><img src="14.jpg" alt="Сыктывкар"width="650"></h1>
	 <h1 style="color: #292929; font-size: 20px; font-weight: bold; line-height: 140%; "><center> (родилась в 1952 году) — четырёхкратная олимпийская чемпионка в соревнованиях по лыжным гонкам, призёр и победитель всевозможных ЧМ и ЧЕ по лыжным гонкам.</center><center><br></h1>
	 <h1 style="color: #7b42ff; font-size: 40px; font-weight: bold; line-height: 140%; text-shadow: #171717 2px 2px 1px;" align='center'> <center><p><center>Габов Николай Николаевич</center><center><br><img src="15.jpg" alt="Сыктывкар"width="650"></h1>
	 <h1 style="color: #292929; font-size: 20px; font-weight: bold; line-height: 140%; "><center>(1919—1982), Герой Советского Союза.</center><center><br></h1>
    </ul> 
	</div>
   <div id="footer">&copy; Roman Sheglov Inc.  2017-2019 </div>
  </div> 
 </body>
</html>