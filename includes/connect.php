<?php
	if(!session_id()){
		session_start();
	}

	$hostname = "";
	$db = "";
	$user = "";
	$pass = "";

	try {
		$dbh = new PDO("mysql:host=$hostname;dbname=$db", $user, $pass);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$dbh->exec("set names utf8");
	} catch(PDOException $e) {
		echo "<center><h1>Oops.</h1><h3>Something went wrong</h3><br></center>";
		echo "<center>".$e->getMessage()."</center>";
	}

?>