<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/style.css" rel="stylesheet">
<link href="css/style_mq.css" rel="stylesheet">
<link href="css/style_mq2.css" rel="stylesheet">

</head>
<body>
  <div class="header" align="center">
    <h1 class="textHead"><b>РАКЕТКА <img class="logoEdit" src ="logo.png"></b></h1>
  </div>
  <div class="menu"><h3 align="center" class="textMar">Главная</h3></div>
  <div class="menu"><h4 align="center" class="textMar">Вопросы и ответы</h4></div>
  <div class="menu"><h4 align="center" class="textMar">Доставка и оплата</h4></div>
   <div class="menu"><h3 align="center" class="textMar">Корзина</h3></div>
   <div class="menu"><h3 align="center" class="textMar">Контакты</h3></div>

   <div class="main">
       <?php
         $price = rand(500, 1500);
         $count = 30;
         while($count > 0): ?>

         <div class="bords"><img class="imgMod" src="images/<?php echo $count;?>.jpg">
          <h6 class="descr">Ракетка <br>такая-то</h6>
          <b class="pric"><?php echo rand(500, 1500), "грн </br>"; ?></b>
        </div>
         <?php $count -= 1; ?>
       <?php endwhile; ?>

       <div>
         <img class="banr" src="banr.png">
       </div>

   </div>

   <div class="footer" align="center">
     <h4 class="textFoot"><b>РАКЕТКА 2017 &copy</b></h4>
   </div>

  </body>
  <html>
