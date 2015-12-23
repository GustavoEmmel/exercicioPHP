<?php
include('./Authentication.php');

//$_SESSION['loggedin'] = 'gustavo';
//unset($_SESSION['loggedin']);
//$_COOKIE['Loggedin'] = 'gustavo';
//unset($_COOKIE['Loggedin']);

$user = new User();

if ($user->isLogged()) {
	header("Location: http://www.google.com");
	exit();
}
