#!/usr/bin/php
<?php
$i = 1;
unset($argv[0]);
$words= array();
while ($i < $argc)
{
    $arr = explode(' ', $argv[$i]);
    $words = array_merge($words, $arr);
    $i++;
}
sort($words);
print_r($words);
?>