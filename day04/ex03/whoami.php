<?php
session_start();
$login = $_SESSION["loggued_on_user"];
if ($login)
    echo $_SESSION["loggued_on_user"] . "\n";
else
    echo "ERROR\n";
?>