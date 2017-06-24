<?php
session_start();

$_SESSION["login_flag"] = false;
header("location:index.php");

?>