<?php
 	$array = array("henry","bucky","emily");
	# 计算数组个数 count
	echo count($array);
	echo "<hr>";
	# 将数组开头的单元移出数组 array_shift
	$newArray = array_shift($array);
	print_r($newArray);
	echo "<hr>";
	# 在数组开头插入一个或多个单元 array_unshift
	$insertvalue = array_unshift($array,"hemiah");
	print_r($insertvalue);
	echo "<hr>";
	# 将一个或多个单元压入数组的末尾（入栈）array_push
	array_push($array, "elyse");
	print_r($array);
	echo "<hr>";
	# 弹出数组最后一个单元（出栈） array_pop
	array_pop($array);
	print_r($array);
	echo "<hr>";
	# 数组排序 sort
	$values = array(22,56,33,44,18,"abcd");
	sort($values);
	print_r($values);
	echo "<hr>";
	# 数组转字符串 implode
	$arraytostring = array("a","b","c");
	$value = implode(" ", $arraytostring);
	echo $value;
	echo "<hr>";
	# 字符串转数组 explode
	$array = explode(" ",$value);//只能根据间隔符去转 所以" "不能丢
	echo $array[0]."<br>";
	var_dump($array);
 ?>