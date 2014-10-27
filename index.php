<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$name = "test";
$value = 45;
$expire = time() + (60*60*24*7);
  // setcookie($name, $value, $expire);
  // nimetus, väärtus, aegumishetk 
//setcookie("teine", "tere", time() + 30);
?>
<pre>
<?php 
	print_r($_COOKIE);
	if (isset($_COOKIE['test'])) {
		$test = $_COOKIE['test'];
	} else {
		$test = "";
	}
	echo $test;
?>
</pre>
</body>
</hmtl>