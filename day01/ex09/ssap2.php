#!/usr/bin/php
<?php
		function sort_array($str1, $str2)
		{
			$chars = "abcedfghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
			$i = 0;
			while ($str1[$i] || $str2[$i])
			{
				$pos1 = stripos($chars, $str1[$i]);
				$pos2 = stripos($chars, $str2[$i]);
				if ($pos1 > $pos2)
					return (1);
				else if ($pos1 < $pos2)
					return (-1);
				$i++;
			}
		}
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
