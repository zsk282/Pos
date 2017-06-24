<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

	if($username == "admin" && $password == "admin"){
		$_SESSION["login_flag"] = true;
		header("location:index.php");
	}else{
		echo "0";
	}

?>