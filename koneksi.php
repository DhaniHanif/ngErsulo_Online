<?php
$host = "mysql.idhostinger.com";
$user = "u949430627_root";
$password = "123456";
$database_name = "u949430627_web";
$pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>
