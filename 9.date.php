<?php 
	//echo date();  至少给一个参数
	echo date("d");# day
	echo"<hr>";
	echo date("m");# month
	echo"<hr>";
	echo date("Y");# Year-2017,year-17
	echo"<hr>";
	echo date("l");# day of week
	echo"<hr>";
	echo date('Y/m/d');#年月日
	echo"<hr>";
	echo date('d-m-Y');#年月日
	echo"<hr>";

	#时分秒
	echo date("h-"); #hour;
	echo date("i-"); #minutes;
	echo date("s-"); #seconds;
	echo date("AM"); #AM or PM;
	echo"<hr>";
	#设置时区
	date_default_timezone_set("Asia/Shanghai");
	echo date('h:i:s');
	echo"<hr>";
	#mktime
	$timestamp = mktime(07,00,12,8,6,1994);
	echo $timestamp;//从1970年到现在经历了多少秒
	#完整的时间
	echo"<hr>";
	echo date("m/d/Y h:i:sa",$timestamp);
	#字符串转时间
	echo"<hr>";
	$timestamp2 = strtotime("7:00pm March 22 2016");
	echo $timestamp2."<br>";
	echo date("m/d/Y h:i:sa",$timestamp2);
	echo"<hr>";
	$timestamp3 = strtotime("tomorrow");
	echo $timestamp3."<br>";
	echo date("m/d/Y h:i:sa",$timestamp3);
	echo"<hr>";
	$timestamp4 = strtotime("+2 Days");
	echo date("m/d/Y h:i:sa",$timestamp4);
 ?>