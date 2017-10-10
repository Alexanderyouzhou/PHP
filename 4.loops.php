<?php 
	# loops:循环 让项目制作的更高效
	# 根据某个条件重复执行某段代码
	/*
	- for
	- while
	- do...while
	- Foreach
	*/

	# for 循环
	# @params - init(变量),condition(条件),inc(自增)
	for ($i=0; $i < 10; $i++) { 
		echo ($i+1)."<br>";
	}
	echo "<hr>";
	# while 循环
	# @params - condition
	$i = 0;
	while ($i<10) {
		echo $i."<br>";
		$i++;
		// echo "<hr>";
	}
	# do..while
	# @params - condition
	echo "<hr>";
	$i = 0;
	do{
		echo $i."<br>";
		$i++;
	}while ( $i<= 10); 
		# code...
	# foreach 循环 下标数组
	echo "<hr>";
	$people = array("herry","bucky","emily");
	foreach($people as $person){
		echo $person;
		echo "<br>";
	}
	echo "<hr>";
	$people = array (
		"henry"=>"henry@gmail.com",
		"bucky"=>"bucky@gmail.com",
		"emily"=>"emily@gmail.com",
	);
	foreach($people as $key => $value){
		echo $key.":".$value;
		echo "<br>";
	}
	// 练习1.
	/*打印1~100之间7的倍数*/
	/*打印1~100之间个数为7的数*/
	/*打印1~100之间十位为7的数*/
	/*打印1~100之间个位不为7,十位不为7,以及不是7的倍数数*/
	// 练习2.
	/*打印九九乘法表*/

 ?>	
