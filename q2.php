<?php

$arr1=array(7,8,9,1);
$arr2=array(6,5,3,4);
$arr3=array("a"=>"red","b"=>"blue","c"=>"green");
$arr4=array("1"=>"Volvo","2"=>"BMW","3"=>"Ford");
$arr5=array("Mango","Apple","Kiwi");
$arr6=array("Cabbage","Zuchini","Corn");

sort($arr1);
sort($arr2);

echo "Sorted arrays: <br>";
print_r($arr1);
echo "<br>";

print_r($arr2);
echo "<br>";
echo "<br>";

echo "searching of array: <br>";
echo array_search("blue", $arr3);
echo "<br>";

echo array_search("Volvo",$arr4);
echo "<br>";
echo "<br>";

echo "sum of arrays: <br>";
echo array_sum($arr1);
echo "<br>";
echo array_sum($arr2);
echo "<br>";
echo "<br>";

echo "Merging of arrays: <br>";
print_r(array_merge($arr5,$arr6));
echo "<br>";

?>