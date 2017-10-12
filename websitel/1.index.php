<?php 
include_once "./include/header.php";
include_once "./include/header.php";
//require 一旦出错 下面的内容都不会显示 而include会接着显示下面的内容(但是依然显示报错信息)
//include_once&require_once的作用 重复引用只识别一次 (但是必须都得写include(或者require)_once)
?>
<h1>Home</h1>
<?php 
include "./include/footer.php";
 ?>
