#!/usr/bin/php
<?php
if ($argc > 1)
{
	unset($argv[0]);
	$str = array_shift($argv);
	$arr = preg_split('/\s+/', $str);
	$word = array_shift($arr);
	array_push($arr, $word);
	$str = implode(" ", $arr);
	print("$str\n");
}
?>
