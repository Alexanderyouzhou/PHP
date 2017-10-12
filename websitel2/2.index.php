<?php include "1.server-info.php" ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>客服端 & 服务器端 配置信息</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/cerulean/bootstrap.min.css">
	<style type="text/css"></style>
</head>
<body>
<!-- 开始弄客服端配置信息 -->
 <div class="container">
 	<h1>服务器配置信息</h1>
 	<?php if ($server):?>
 		<ul class="list-group">
 			<?php foreach($server as $key => $value): ?>
 				<li class="list-group-item">
 					<strong>
 						<?php echo $key; ?>: 
 						<!-- 加重key -->
 					</strong>
 					<?php echo $value; ?>
 				</li>
 			<?php endforeach; ?>
 		</ul>
 	<?php endif; ?>
 </div>
 <!-- 开始弄客户端配置信息 -->

 <div class="container">
 	<h1>客户端配置信息</h1>
 	<?php if($sclient): ?>
 		<ul class="list-group">
 			<?php foreach($sclient as $key => $value): ?>
 				<li class="list-group-item">
 					<strong>
 						<?php echo $key; ?>: 
 					</strong>
 					<?php echo $value; ?>
 				</li>
 			<?php endforeach; ?>
 		</ul>
 	<?php endif; ?>
 </div>
</body>
</html>