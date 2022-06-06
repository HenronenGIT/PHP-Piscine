#!/usr/bin/php
<?php
function panic()
{
	exit("Syntax Error\n");
}

function find_operator($str)
{
	if (strpos($str, "+"))
		return ("+");
	else if (strpos($str, "-"))
		return ("-");
	else if (strpos($str, "*"))
		return ("*");
	else if (strpos($str, "/"))
		return ("/");
	else if (strpos($str, "%"))
		return ("%");
	else
		panic();
}

function valid_input($array)
{
	if (count($array) != 2)
		return (0);
	if (!is_numeric($array[0]) || !is_numeric($array[1]))
		return (0);
	return (1);
}

function calculate($operator, $number_array)
{
	if ($operator == '+')
		print($number_array[0] + $number_array[1] . "\n");
	else if ($operator == '-')
		print($number_array[0] - $number_array[1] . "\n");
	else if ($operator == '*')
		print($number_array[0] * $number_array[1] . "\n");
	else if ($operator == '/')
		print($number_array[0] / $number_array[1] . "\n");
	else if ($operator == '%')
		print($number_array[0] % $number_array[1] . "\n");
}

function explode_string($operator, $str)
{
	$array = explode("$operator", $str);
	$trimmed_array = array();
	foreach ($array as $element)
	{
		$temp = trim($element);
		$trimmed_array[] = $temp;
	}
	return ($trimmed_array);
}

	if ($argc == 2)
	{
		$str = $argv[1];
		$operator = "";
		$i = 0;

		$operator = find_operator($str);
		$array = explode_string($operator, $str);
		if (!valid_input($array))
			panic();
		calculate($operator, $array);
	}
	else
		print("Incorrect Parameters\n");
?>