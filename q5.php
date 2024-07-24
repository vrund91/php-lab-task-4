<?php

$emails = array(
	"abc1@gmail.com",
	"glsufcait@gmail.com",
	"fcait.org@gmail.com",
	"abc1@gmail.com"
);

$unique_emails=array_unique($emails);

$duplicate_emails=array_diff_assoc($emails,$unique_emails);

echo "Unique emails address: <br>";
print_r($unique_emails);
echo "<br>";
echo "<br>";

echo "Duplicate emails address: <br>";
print_r($duplicate_emails);
echo "<br>";
echo "<br>";

?>