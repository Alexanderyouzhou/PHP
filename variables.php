<h1>	
<?php 
	echo "hello world";
 ?>	
 </h1>
 <?php 
 	// echo "hello everybody";
 	// 单行注释1
 	#单行注释2
 	/*多行注释 alt+花键+/*/
 	# variable 变量
 	$output = "hello world";
 	/*变量 前缀 $,以字母/数字/下划线组成
 	-数字不能开头
 	-大小写敏感
 	-驼峰命名发*/
 	echo $output;
 ?>
 <!-- undifind 未定义 unexpect 不希望有什么什么 也就是不能有什么 -->
 <!-- 数据类型 
 	  String, Integer, Float Boolean Array Object Resource -->
 	 <?php 
 	 	$num=22;
 	 	$float=22.22;
 	 	$bool=true;//false打印0 但不在浏览器显示无法看到
 	 	echo $float;
 	 	echo $bool;
 	 	# 运算符
 	 	$num1=10;
 	 	$num2=20;
 	 	$sum=$num1+$num2;
 	 	echo $sum
 	  ?>
 	  <?php 
 	  	$string1="hello";
 	  	$string2="world";
 	  	//在php中加号就是加号没有拼接功能
 	  	$string3=$string1+$string2;
 	  	echo $string3;
 	  	//这样去拼接
 	  	$string4=$string1." ".$string2." ";
 	  	echo $string4
 	   ?>
 	   <?php 
 	   		$greeting2='$string1 $string2'."<br>";//可以使用逗号分隔打印多个变量
 	   		$greeting3="$string1 $string2"."<br>";
 	   		echo $greeting2;
 	   		echo $greeting3
 	   		//单引中的内容是单纯的字符串 双印中的内容(变量)可以正常被解析
 	    ?>
 	    <?php 
 	    	$string3='they\'re here'."<br>";
 	    	$string4="they're here"."<br>";
 	    	echo $string3;
 	    	echo $string4;
 	    	printf($string4);//输出俩次
 	    	#常量
 	    	echo "<hr>";
 	    	define("GREENTING","whatever   ",true);//常量一般大写  加个true就不会区分大小写
 	    	echo GREENTING;
 	    	echo greenting;
 	    	var_dump(greenting)//万能打印
 	     ?>
 	  