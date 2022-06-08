#!/usr/bin/php
<?php
	if ($argc == 2)
	{
		$file = file_get_contents($argv[1]);
		// print($file);
		$result = preg_replace_callback("/(?<=title=\")(.*)</", function($match) {
			print($match[1] . "\n");
			print($match[0] . "\n");
			return (str_replace($match[1], strtoupper($match[1]), $match[0]));
		}, $file);

		print($result);
	}
?>