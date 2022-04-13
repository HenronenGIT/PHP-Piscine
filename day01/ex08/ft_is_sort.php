#!/usr/bin/php
<?php
function ft_is_sort($arr)
{
    $copy = $arr;
    sort($copy);
    if ($copy == $arr)
        return (1);
    else
        return (0);
}
?>