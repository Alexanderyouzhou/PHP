<?php 
	$users = ["name" => "henry","email"=>"812561286@qq.com","age" =>38];
	$users =serialize($users);//使用这个函数就可以将数组存进cookie里
	setcookie('users',$users,time()+360000);
	$users=unserialize($_COOKIE['users']);
	print_r($users);
?>