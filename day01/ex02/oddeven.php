#!/usr/bin/php
<?php
while (1)
{
	print("Enter a number: ");
	$input = stream_get_line(STDIN, 0, "\n");
	if (feof(STDIN) == TRUE)
	{
		echo("\n");
		break;
	}
	else if (is_numeric($input) == 0)
	{
		echo("'$input' is not a number\n");
	}
	else if (($input % 2) == 0)
	{
		echo("The number $input is even\n");
	}
	else if (($input % 2) != 0)
	{
		echo("The number $input is odd\n");
	}
}
?>