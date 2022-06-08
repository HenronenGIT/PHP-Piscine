#!/usr/bin/php
<?php
date_default_timezone_set('Europe/Helsinki');
function output_user($arr)
{
	printf("%s %s %s\n", $arr["username"], $arr["terminal"], date("M j H:i", $arr["timestamp"]));
}

$file_ptr = fopen("/var/run/utmpx", "r");

while ($bytes = fread($file_ptr, 628))
{
	$unpacked_array = unpack("a256username/a4terminal_id/a32terminal/ipid/ilogin_type/itimestamp/imicro/a256hostname", $bytes);
	if ($unpacked_array["login_type"] == 7)
		output_user($unpacked_array);
}
?>