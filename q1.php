<?php

$arr1 = array(
	array(1 , 2 , 3),
	array(4 , 5 , 6),
	array(7 , 8 , 9)
);

$arr2 = array(
	array(7 , 2 , 1),
	array(3 , 4 , 2),
	array(5 , 3 , 1)
);

echo "Addition of matrix:";
echo "<br>";

for($rows=0; $rows<3; $rows++)
{
	for($cols=0; $cols<3; $cols++)
	{
		echo $arr1[$rows][$cols] + $arr2[$rows][$cols]."&nbsp";
	}
	echo "<br>";
}
?>