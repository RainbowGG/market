<?php 
<<<<<<< HEAD
if(setcookie("Test","товар 1", time()+36000))
	echo "gg ez";
=======
>>>>>>> origin/master
session_start();
?>
<html>
<head>
<title>
</title>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="smalcart">
    <strong>Товаров в корзине:</strong><?=$smal_cart['cart_count']?> шт.
     <br/><strong>На сумму:</strong><?=$smal_cart['cart_price']?> грн.    
    <br/><a href=''>Оформить заказ</a>
</div>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#"><?php echo $_COOKIE['Test']; ?> Contact</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<div id="main">
