<?php
session_start();
header('Power-BY: Rapidsafeguard.com');

if ($_SESSION['logged2'] != true) {
	header('Location: login.php', true, 302);
	exit;
}

if (isset($_SERVER['HTTP_ORIGIN'])) {
	header("Access-Control-Allow-Origin: " . $_SERVER['HTTP_ORIGIN'] . "");
	header('Access-Control-Allow-Credentials: true');
	echo '<div align=center style="margin: 30px;">F149 is 5uc355u11y !nj3ct3d & N3v3r Trust Arbitrary Origin</div>';
}

echo '<div align=center style="margin: center; font-weight: bold;"><p>Start Find Out Flag and Learn How its work.</p>';

?>