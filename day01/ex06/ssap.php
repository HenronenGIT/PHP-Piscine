#!/usr/bin/php
<?php
$i = 1;
while ($i < $argc)
{
    $arr[$i] = [];
    sort($arr);
    $i++;
}
print_r($argv);
?>