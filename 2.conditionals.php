
<?php 
	header('content-type:text/html;charset=utf-8'); 
	# if &switch  俩分支
	$num=2;
	if ($num<=4) {
		echo "num的值一定是小于或等于4";//没有花括号就只执行一条语句
	}
	if ($num>=4) {
		echo "true";
	}else{
		echo "false"."<br>";
	}

	# nesting if (if嵌套)
	$num=4;
	if ($num>=4) {
		if ($num<=10) {
			echo "num在4和10之间";
		}
	}else{
		echo "num一定小于4";
	}
 ?>
 <?php 
 #逻辑运算符
 /*与 && AND
   或 ||	 OR
   非 !
   异或 XOR*/
   $num=3;
   if ($num>4 XOR $num<2) {
   	 echo "num大于3并且小于10";
   }
 ?>
 	<!-- AND 一假皆假
 		 OR  一真皆真
 		 XOR  只能一边为真(全真就假)-->
 <?php 
 	# switch
 	$favColor = 1;
 	switch ($favColor) {
 		case '1':
 			# code...
 			echo "angry";
 			break;
 		case 'yellow':
 			# code...
 			echo "happy";
 			break;
 		case 'blue':
 			# code...
 			echo "silence";
 			break;
 		case 'green':
 			# code...
 			echo "forgive";
 			break;
 		default:
 			# code...
 			echo "BOOM";
 			break;
 	}
  ?>

