#!/usr/bin/php
<?php
	if ($argc == 2)
	{
		$file = file_get_contents($argv[1]);

		$result = preg_replace_callback("/(?<=<a) .*?>(.*?)</", function($match) {
				return (str_replace($match[1], strtoupper($match[1]), $match[0]));
			}, $file);
			$result = preg_replace_callback("/(?<=title=\")(.*)</", function($match) {
			return (str_replace($match[1], strtoupper($match[1]), $match[0]));
		}, $result);
		print($result);
	}
?>