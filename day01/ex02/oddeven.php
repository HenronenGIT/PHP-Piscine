#!/usr/bin/php
<?php

while (1)
{
    $input = readline("Enter a number: ");
    if (is_numeric($input) == 0)
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