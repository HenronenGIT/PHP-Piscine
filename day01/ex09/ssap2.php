#!/usr/bin/php
<?php
	// function sort_array($array, $b)
	// {
	// 	// $str = '!"#$%&()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~';
	// 	$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	// 	$str2 = "abcdefghijklmnopqrstuvwxyz";
	// 	$str3 = "0123456789";
	// 	$i = 0;
	function sort_array($a, $b)
	{
		$line = "abcdefghijklmnopqrstuvwxyz0123456789!\"";
	}
	function foo($str)
	{
		while ($word[$i] != 0)
		{
			// print("$word[$i]");
			if (stripos($word[$i], $numbers))
			{
				array_push($numbers, $word);
				break;
			}
			else if (stripos($word[$i], $signs))
				array_push($other, $word);
			else
				array_push($alpha, $word);
			$i++;
		}
	}
	unset($argv[0]);
	$words = array();
	$alpha = array();
	$numerics = array();
	$other = array();
	$alphabet = "abcdefghijklmnopqrstuvwxyz";
	$numbers = "0123456789";
	$signs = "#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	$i = 0;

	foreach ($argv as $word)
	{
		$arr = explode(' ', $word);
		$words = array_merge($words, $arr);
	}
	foreach ($words as $word)
	{
		print("$word\n");
		foo($word);
		// while ($word[$i] != 0)
		// {
		// 	// print("$word[$i]");
		// 	if (stripos($word[$i], $numbers))
		// 	{
		// 		array_push($numbers, $word);
		// 		break;
		// 	}
		// 	else if (stripos($word[$i], $signs))
		// 		array_push($other, $word);
		// 	else
		// 		array_push($alpha, $word);
		// 	$i++;
		// }
	}
		// print_r($numbers);
		// print_r($alpha);
		// print_r($other);
	//usort($words, "sort_array");
	//foreach ($words as $word)
	//	print("$word\n");
?>