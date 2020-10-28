<?php
header('X-Frame-Options: SAMEORIGIN');
header('Server: Testing only');
header('X-Powered-By: White beard Pirates 8-)');
error_reporting(0);

ini_set('session.cookie_httponly', 1);
$conn = mysqli_connect("127.0.0.1", "root", "", "owasptop10");

// Check connection
if (mysqli_connect_errno()) {
	echo "connection to SQL server failed ->  " . mysqli_connect_error();
}

?>