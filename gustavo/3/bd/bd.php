<?php
$db['server']		= 'localhost';
$db['user']			= '';
$db['password']		= '';
$db['dbname']		= 'test';

$conn = mysql_connect($db['server'], $db['user'], $db['password']);

mysql_select_db($db['dbname'], $conn);
?>