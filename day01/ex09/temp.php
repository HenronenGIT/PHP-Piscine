#!/usr/bin/php
<?php
	$arg = 1;
	$arr = array();
	function compare($str1, $str2)
	{
		$i = 0;
		$line = "abcdefghijklmnopqrstuvwxyz0123456789!\"
				#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
		while (($i < strlen($str1)) || ($i < strlen($str2)))
		{
			$str1_sorted = stripos($line, $str1[$i]);
			$str2_sorted = stripos($line, $str2[$i]);
			if ($str1_sorted > $str2_sorted)
				return (1);
			else if ($str1_sorted < $str2_sorted)
				return (-1);
			else
				$i++;
		}
	}

	usort($arr, "compare");

?>