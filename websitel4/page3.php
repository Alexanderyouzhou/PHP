<?php
session_start(); 
#改变存储的值
$_SESSION['name']="hello";
$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'name属性不存在';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'email属性不存在';


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <meta charset="utf-8">
 	<title></title>
 </head>
 <body>
 	<h2><?php echo $name; ?></h2>
 	<h2><?php echo $email; ?></h2>
 	<a href="page4.php">go to page4</a>	
 </body>
 </html>