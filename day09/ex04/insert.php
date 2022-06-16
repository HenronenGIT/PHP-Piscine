<?php
	print_r($_POST);
	file_put_contents('list.csv', $_GET['test']);
?>