#!/usr/bin/php
<?php
function sort_words($str)
{
    if (is_numeric($str))
        echo"number\n";
    else if (!is_numeric($str))
        echo"ascii\n";
    else
        echo"other\n";

}
$i = 1;
unset($argv[0]);
$arr= array();
while ($i < $argc)
{
    $temp_arr = explode(' ', $argv[$i]);
    $arr = array_merge($temp_arr, $arr);
    $i++;
}
foreach($arr as $word)
{
    sort_words($word);
}


//foreach($arr as $word)
//    echo("$word\n");
?>