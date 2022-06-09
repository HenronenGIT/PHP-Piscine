#!/usr/bin/php
<?php
	$regex0 = "/(?<=)<a.*?<\/a>/ism";
	$regex1 = "/(?<=>).*?<|(?<=title)=\"(.*?)\"/ism";
	if ($argc == 2)
	{
		$str = implode("", file($argv[1]));
		$copy = $str;
		preg_match_all($regex0, $str, $match);
		$str = implode("", $match[0]);
		preg_match_all($regex1, $str, $match);
		foreach($match[0] as $string)
			$copy = preg_replace("/$string/", strtoupper($string), $copy);
		print($copy);
	}
?>