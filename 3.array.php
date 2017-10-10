<?php 
	#array:数组存储一堆数据的集合
	/*下标数组:下标以零开始 
	  关联数组:关联以一个名字开头
	*/
	  #下标数组
	  $people = array("keven","henry","Hemiah");
	  echo $people[0];
	  echo $people[3];//数组越界!!!
	  $ids = [23,56,42];
	  echo $ids[2]."<br>";
	  $cars = ["Honda","Toyota","BYD"];
	  $cars[3] ="bmw";
	  echo $cars[3]."<br>";
	  echo count($cars)."<br>";
	  print_r($cars)."<br>";
	  // var_dump($cars)

	  #关联数组
	  $people = array("henry"=>35,"bukcy"=>25,"emily"=>20);
	  echo $people["emily"]."<br>";
	  $ids = array(20=>"hurry",25=>"emily");
	  echo $ids[20]."<br>";
	  $ids[35]="emily";
	  echo $ids[35];
	  $cars[]="Bence";//不给下标向数组最后一个插
	  print_r($cars);
	  echo "<hr>";
	  $ids[] = "john";
	  print_r($ids);
	  echo "<hr>";
	  $people[]=55;
	  print_r($people);

	  # 多维数组
	  $cars = array(
	  	array("Honda",20,10),
	  	array("dz",20,20),
	  	array("ford",15,15),
	  	);
	   echo "<hr>";
	   echo $cars[2][1];
 ?>