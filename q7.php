<?php
$arr1 = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

ksort($arr1);
echo "Accending sort as per key: <br>";
foreach($arr1 as $key=>$value)
{
	//echo "<br>";
	echo "Key= ".$key."&nbsp"."value= ".$value."<br>";
}
echo "<br>";

asort($arr1);
echo "Accending sort as per value: <br>";
foreach($arr1 as $key=>$value)
{
	//echo "<br>";
	echo "Key= ".$key."&nbsp"."value= ".$value."<br>";
}
echo "<br>";

krsort($arr1);
echo "Descending sort as per key: <br>";
foreach($arr1 as $key=>$value)
{
	//echo "<br>";
	echo "Key= ".$key."&nbsp"."Value= ".$value."<br>";
}
echo "<br>";

arsort($arr1);
echo "Descending sort as per value: <br>";
foreach($arr1 as $key=>$value)
{
	//echo "<br>";
	echo "Key= ".$key."&nbsp"."Value= ".$value."<br>";
}
?>