<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/style.css" rel="stylesheet">
<link href="css/style_mq.css" rel="stylesheet">
<link href="css/style_mq2.css" rel="stylesheet">


</head>
<body>
  <div id="header" align="center">
    <h1 class="textHead"><b>РАКЕТКА <img class="logoEdit" src ="logo.png"></b></h1>
</div>

  <div class="menuBL" align="center">
  <div id="menu" class="textMar"><b>Главная</b></div>
  <div id="menu" class="textMLong"><b>Вопросы и ответы</b></div>
  <div id="menu" class="textMLong"><b>Доставка и оплата</b></div>
  <div id="menu" class="textMar"><b>Корзина</b></div>
  <div id="menu" class="textMar"><b>Контакты</b></div>
</div>

<div align="center">

     <div align="center" id="content">
       <?php
         $price = rand(500, 1500);
         $count = 30;
         while($count > 0): ?>

         <div class="bords" align="center"><img class="imgMod" src="images/<?php echo $count;?>.jpg">
          <h6>Ракетка <br>такая-то</h6>
          <b class="pric"><?php echo rand(500, 1500), "грн </br>"; ?></b>
        </div>
         <?php $count -= 1; ?>
       <?php endwhile; ?>
     </div>

     <div id="sidebar">
        <a><img class="banr" src="banr.png"></a>
     </div>


</div>


<div align="center" id="footer">
   <b>РАКЕТКА 2017 &copy</b>
</div>




  </body>
  <html>
