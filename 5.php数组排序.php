<?php
$age=array("Zaa"=>"35","Steve"=>"37","Peter"=>"43");
arsort($age);//arsort是根据值进行升序或降序的 降序是arsort 升序是sort
print_r($age)."<br>";
echo"<hr>";

$numbers=array(3,5,1,22,11);
sort($numbers);//已经排好序还没有输出
print_r($numbers)."<br>";
echo"<hr>";

$cars=array("Volvo","BMW","SAAB");
sort($cars);
print_r($cars)."<br>";
echo"<hr>";


$age=array("Zill"=>"35","Oteve"=>"37","Peter"=>"43");
krsort($age);
print_r($age)."<br>";//根据键值或者值甚至是内容进行排序的时候 只和第一个字母有关与别的都没有关系
echo"<hr>";
?>