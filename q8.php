<?php

$arr1=array(1=>"23",2=>"45",3=>"21",4=>"60",5=>"31");

echo "<br>";

arsort($arr1);

echo "<br>";

$max = key($arr1);

echo "Maximum value's index is: $max";
?>