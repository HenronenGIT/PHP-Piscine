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
			$i = 0;
			$line = "abcdefghijklmnopqrstuvwxyz0123456789!\
					#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
			while (($i < strlen($a)) || ($i < strlen($b)))
			{
				$a_new = stripos($line, $a[$i]);
				$b_new = stripos($line, $b[$i]);
				if ($a_new > $b_new)
					return (1);
				else if ($a_new < $b_new)
					return (-1);
				else
					$i++;
			}
		}
		// foreach ($array as $word)
		// {
		// 	while ($word[$i] or $str[$i])
		// 	{
		// 		if (in_array($word[$i], $str))
		// 			return ($array<$b ? -1:1);
		// 	}
		// }

		// return ($array <=> $b);

	unset($argv[0]);
	$words = array();
	foreach ($argv as $word)
	{
		$arr = explode(' ', $word);
		$words = array_merge($words, $arr);
	}

	usort($words, "sort_array");
	foreach ($words as $word)
		print("$word\n");
?>