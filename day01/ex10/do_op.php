#!/usr/bin/php
<?php
if ($argc == 4)
{
	$i = 0;
	while ($argv[$i])
	{
		$argv[$i] = trim($argv[$i]);
		$i++;
	}
	$nb1 = $argv[1];
	$sign = $argv[2];
	$nb2 = $argv[3];

	if ($sign == '+')
		print($nb1 + $nb2 . "\n");
	else if ($sign == '-')
		print($nb1 - $nb2 . "\n");
	else if ($sign == '*')
		print($nb1 * $nb2 . "\n");
	else if ($sign == '/')
		print($nb1 / $nb2 . "\n");
	else if ($sign == '%')
		print($nb1 % $nb2 . "\n");
}
else
	print("Incorrect Parameters\n");
?>