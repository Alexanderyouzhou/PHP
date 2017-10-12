<div class="container">
	<?php
		// php echo $_GET["sbname"]

	//检查sbname是否被获取到
		// if (isset($_GET["sbname"])) {//如果获取到了 才执行
		// 	// echo $_GET["sbname"];
		// 	$name = $_GET["sbname"];
		// 	$Email = $_GET["sbemail"];
		// 	if (!empty($name)&& !empty($Email)) {
		// 		echo $name." : ".$Email;
		// 	}
		

		// }
	if (isset($_GET["sbname"])&&isset($_GET["sbemail"])) {//如果获取到了 才执行
			// echo $_GET["sbname"];
			$name = $_GET["sbname"];
			$Email = $_GET["sbemail"];
			if (!empty($name)&& !empty($Email)) {
				echo $name." : ".$Email;
			}
		}
		#查询url地址后面的参数
		// echo $_SERVER["QUERY_STRING"]//这个只适用于GET 因为要打印的是?后面的东西
	 ?>
</div>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="https://bootswatch.com/cerulean/bootstrap.min.css">
	<title></title>
</head>
<body>
<!-- <div class="container">
	<form action="1.get_post.php" method="get">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="sbname" class="form-control">
		</div>
		<br>

		<div class="form-group">
			<label>Email</label>
			<input type="text" name="sbemail" class="form-control">
		</div>
		<br>
		<input class="btn btn-primary btn-block" type="submit" value="提交">
	</form>
</div> -->
<div class="container">
	<form action="1.get_post.php" method="GET">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="sbname" class="form-control">
		</div>
		<br>
		
		<div class="form-group">
			<label>Email</label>
			<input type="text" name="sbemail" class="form-control">
		</div>
		<br>
		<input class="btn btn-primary btn-block" type="submit" value="提交">
	</form>
	<ul class="list-group">
		<li class="list-group-item">
		<a href="<?php echo $_SERVER['PHP_SELF']."?name=橙子"; ?>" class="btn btn-primary btn-block">
			橙子	
		</a>
		</li>
	</ul>

	<ul class="list-group">
		<li class="list-group-item">
		<a href="<?php echo $_SERVER['PHP_SELF']."?name=橘子"; ?>" class="btn btn-primary btn-block">
			橘子	
			<!-- PHP_SELF 当前路径 -->
			<!-- 这里的php指的是一个链接? -->
		</a>
		</li>
	</ul>
	<h1>
		<?php if (isset($_GET["name"])) {
			echo $_GET['name'];
		} ?>
	</h1>
</div>
</body>
</html>