<?php 
	header('content-type:text/html;charset=utf-8'); 
	$loggedIn = true;
	$value = ["huney","bucky","emily"];
	if ($loggedIn) {
		# code...
		echo "U r Logged In";
	}else{
		echo "U r NOT Logged In";
	}
	echo"<hr>";
	# 三目运算符
	echo($loggedIn) ? "U r Logged In" : "U r NOT Logged In";
	echo"<hr>";
	# 简写得到 true 或者 false
	$isRegistered = ($loggedIn==true) ? true : false;
	echo $isRegistered;
	echo"<hr>";
	$age = 18;
	$score = 80;
	echo "You score is".($score>70 ? ($age<20 ? "优秀":"一般"):($age>20 ? "一般" : "差等"));
	echo"<hr>";
 ?>

 	<!-- html + php 嵌套语法糖-->
 	<div>
 		<?php if ($loggedIn) :?>
 		 <p>Welcome to beijing!</p>
 		 <?php  else : ?>
 		 <p>Welcome to zhengzhou!</p>
 		 <?php endif; ?>
 	</div>
 	<!-- 遍历数组 foreach-->
 	<div>
 		<?php foreach($value as $val): ?>
 			<p><?php echo $val; ?></p>
 		<?php endforeach; ?>
 	</div>
 	<!-- 遍历数组 for -->