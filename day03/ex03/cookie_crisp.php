<?php
if ($_GET["action"] == "set")
{
	setcookie($_GET["name"], $_GET["value"], time() + (86400 * 30), "/");
}
else if ($_GET["action"] == "get")
{
	if ($_COOKIE[$_GET["name"]])
	{
		print($_COOKIE[$_GET["name"]]);
		print("\n");
	}
}
else if ($_GET["action"] == "del")
{
	setcookie($_GET["name"], null, -1);
}
?>
