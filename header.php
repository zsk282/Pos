<?php session_start(); ?>
<?php require "database_main.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>POS</title>
	  	<!-- required css and js -->
		<script type="text/javascript" src="js/jquery.js"></script>    
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
		<!-- CSS Bootstrap & Custom -->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	    <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Main CSS -->
		<link rel="stylesheet" href="css/styles.css">
		<!-- Favicons -->
	    <!-- <link rel="shortcut icon" href="images/ico/favicon.ico"> -->
	</head>
	<body>

	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">Subhtron</a>
	    </div>
	    <?php if($_SESSION["login_flag"] == true || (isset($_SESSION["login_flag"]) && !empty($_SESSION["login_flag"]))){ ?>
	    <ul class="nav navbar-nav">
	      <li class="active" id="sales_nav"><a href="sales.php">Sales</a></li>
	      <li><a href="purchase.php" id="purchase_nav">Purchase</a></li>
	      <li><a href="ledger.php" id="ledger_nav">Ledger</a></li>
	      <li><a href="bank.php" id="bank_nav">Balance</a></li>
	      <li><a href="stock.php" id="stock_nav">Stock</a></li>
	    </ul>
	    <?php }else{
	    	$_SESSION["login_flag"] = false;
	     ?>
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="#">Catalog</a></li>
	      <li><a href="#">Contact Us</a></li>
	      <li><a href="#">About Us</a></li>
	    </ul>
	    <?php } ?>
	    <ul class="nav navbar-nav navbar-right">
	    <?php if($_SESSION["login_flag"] == false){ ?>
	      <li><a href="login.php"><span class="login_span"></span> Login</a></li>
	     <?php }else{ ?>
	     	<li><a href="logoutAction.php"><span class="logout"></span> Logout</a></li>
	     <?php } ?>
	    </ul>
	  </div>
	</nav>