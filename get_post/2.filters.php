<div class="container">
	<?php 
		#检查是否存在data的name属性
	if (filter_has_var(INPUT_POST,"data")) {
		$email = $_POST["data"];
		// 预定义的 $_POST 变量用于收集来自 method="post" 的表单中的值。
		// echo $email;
		// 过滤掉不合法的的字符
		$email = filter_var($email,FILTER_SANITIZE_EMAIL);
		echo $email;
		#验证是否是一个有效的邮箱		
		if (filter_input(INPUT_POST,"data",FILTER_VALIDATE_EMAIL)) {
			echo "邮箱合法";
		}else{
			echo "邮箱不合法";
		}
	}else{
		echo "data 不存在";
	}
	# 练习: 验证一个变量中的值,是否是合法的整数
	$var = 23;
	if (filter_var($var,FILTER_VALIDATE_INT)) {
		echo "合法的整型";
	}else{
		echo "不合法的整型";
	}
	#获取字符串中所有数值
	$var ="jj5454ada44da54d5a";
	$var =filter_var($var,FILTER_SANITIZE_NUMBER_INT);
	echo $var;

	#特殊字符
	$var2 = "<script>alert(1)</script>";
	//echo $var2; 不想让他弹 而是打印
	echo filter_var($var2,FILTER_SANITIZE_SPECIAL_CHARS);

	#验证数组中每个元素
	$filters = array(		
		"data" => FILTER_VALIDATE_EMAIL,//第一个input
		"data2" => array(				//第二个input
		"filter" => FILTER_VALIDATE_INT,
		"options" => array(
			"min_range"=>1,
			"max_range"=>150
			)
		)
	);
	print_r(filter_input_array(INPUT_POST,$filters));

	#把form表单中input的内容,第一个input一定是email 
	#第二个input一定是数值 并且数值不能小于1,大于150
		if (filter_input(INPUT_POST,"data",FILTER_VALIDATE_EMAIL)) {
			//filter_input() 函数从脚本外部获取输入，并进行过滤。
			//本函数可从各种来源获取输入:INPUT_POST
				echo "第一个input一定是email";
		}else{
			echo "第一个不是email";
		};
		$fff=$_POST["data2"];//记得判断是否传过来了
		if (filter_input(INPUT_POST,"data2",FILTER_VALIDATE_INT)) {
			if ($fff>1&&$fff<100) {
				echo "对了";
			}
		};

		$arr = array(
			"name" => "henry",
			"age" => "30",
			"email" => "henry@gmail.com"
			);
		$filters = array(
			"name" => array(
			"filter" => FILTER_CALLBACK,
			"options" => "ucwords"),

			"age" => array(
			"filter" => FILTER_VALIDATE_INT,
			"options" => array(
				"min_range"=>1,
				"max_range"=>150,
				)		
				)
			);
		print_r(filter_var_array($arr,$filters));
	?>
	

</div>
 <!DOCTYPE html>
 <html>
 <head>
 <meta charset="utf-8">
 	<title>过滤器</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/cerulean/bootstrap.min.css">
 	<style type="text/css"></style>
 </head>
 <body>
 	<div class="container">
 		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 		<!-- action规定向哪里发送数据 -->
 			<input type="text" name="data" class="form-control">
 			<input type="text" name="data2" class="form-control">
 			<button class="btn btn-primary btn-block" type="sunmit">提交</button>
 		</form>
 	</div>
 </body>
 </html>
 	<!-- /*
		审核
		FILTER_SANITIZE_EMAIL
		FILTER_SANITIZE_ENCODED
		FILTER_SANITIZE_MAGIC_QUOTES
		FILTER_SANITIZE_NUMBER_FLOAT
		FILTER_SANITIZE_NUMBER_INT
		FILTER_SANITIZE_SPECIAL_CHARS
		FILTER_SANITIZE_FULL_SPECIAL_CHARS
		FILTER_SANITIZE_STRING
		FILTER_SANITIZE_STRIPPED
		FILTER_SANITIZE_URL
		FILTER_UNSAFE_RAW
		
		验证
		FILTER_VALIDATE_BOOLEAN
		FILTER_VALIDATE_EMAIL
		FILTER_VALIDATE_FLOAT
		FILTER_VALIDATE_INT
		FILTER_VALIDATE_IP
		FILTER_VALIDATE_MAC
		FILTER_VALIDATE_REGEXP
		FILTER_VALIDATE_URL
	*/ -->