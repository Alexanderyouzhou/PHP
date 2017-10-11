<?php 
	#fucntion: 函数的存在 - 具有某一功能的代码块
	/*	Camel Case - myFunction()
		Lower Case - my_fucntion()
		Pascal Case - MyFuncfion()*/
		header('content-type:text/html;charset=utf-8'); 
	//  定义函数 
		function simpleFunction()
		{
			echo "hello world";
		}
		simpLeFunction();
		//函数不被调用不会存在于内存中 函数永远有返回值 没有return 返回undefind
		//在php中函数的名字不区分大小写 随便改变大小写也可
		echo"<hr>";

		//有参数 无返回值

		function buy($money="20元钱"){
			echo $money."拿着钱跑了";
		}
		buy("30元钱");//传参的优先级高于默认值
		buy("10元钱");
		echo"<hr>";
		#多参参数 有返回值
		function sumvalue($sum1,$sum2){
			$sum = $sum1 + $sum2;
			return $sum;
		}
		echo sumvalue(65465,656);//有返回值要有东西接收
		echo"<hr>";

		//无参数有返回值
		
		function buydrink(){
			return "饭后的饮料";
		}
		echo buydrink();
		
		# 函数传引用
		$mynum=10;
		function add(&$num){
			return $num+=5;
		}
		echo add($mynum);//15 
		echo"<hr>";
		//拿到了mynum的引用, 改变了内存中的数值, 所以是15

 ?>