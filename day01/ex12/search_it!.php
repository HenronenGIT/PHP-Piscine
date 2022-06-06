#!/usr/bin/php
<?php
	if ($argc > 2)
	{
		unset($argv[0]);
		$match = array_shift($argv);
		$array_keys = array();
		$array_values = array();
		foreach ($argv as $element)
		{
			$temp_arr = explode(":", $element);
			array_push($array_keys, $temp_arr[0]);
			array_push($array_values, $temp_arr[1]);
		}
		$i = 0;
		$last_match = -1;
		foreach ($array_keys as $key)
		{
			if ($key == $match)
				$last_match = $i;
			$i++;
		}
		if ($last_match != -1)
			print($array_values[$last_match] . "\n");
	}
?>