<?php 
	# string functin: 处理字符串的函数
	# 返回字符串的一部分 substr
	$output = "helloworld";
	$output = substr($output, 0);
	echo $output;
	echo"<hr>";
	# 返回给定的字符串 string 的长度  strlen
	echo strlen($output);//因为已经截取了么
	echo"<hr>";
	# 查找字符串首次出现的位置 strpos
	$output=strpos($output, "lo");
	echo $output;
	echo"<hr>";
	# 计算指定字符串在目标字符串中最后一次出现的位置 strrpos
	$output = "helloworld";
	$output=strrpos($output,"l");
	echo $output;
	echo"<hr>";
	# 去除首尾空格trim
	$output = " helloworld ";
	echo strlen($output);
	echo trim($output);
	echo"<hr>";
	# 将字符串转为大写 strtoupper
	echo strtoupper($output);
	echo"<hr>";
	# 将字符串转为小写 strtolower
	echo strtolower($output);
	echo"<hr>";
	
	# 将每个单词首字母大写 ucwords
	echo ucwords($output);
	echo"<hr>";
	# 替换所有匹配的内容  str_replace
	$new=str_replace("world","body",$output);
	echo $new;
	echo"<hr>";
	# 判断是否是字符串  is_string
	
	# 过滤掉数组中非字符串的值
	
	# 压缩字符串  gzcompress
	echo gzcompress($output);
	# 解压字符串 gzuncompress
 ?>