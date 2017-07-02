<?php
require "database_main.php";
$bill_id = $_GET["bill_id"] + 1;
$productsArray = $_GET["productsArray"];
$productsAmount = $_GET["productsAmount"];
$final_bill_number = "SUBH/17-18/".$bill_id;

$sql = "INSERT INTO temp_bill_counter(bill_no) VALUES ('SUBH/17-18/".$bill_id."')";

$result = $conn->query($sql);

for($i=0;$i < count($productsArray);$i++){
    	$sql = "UPDATE products SET selling_bill_number='".$final_bill_number."',customer_id='2',mode_selling='Cash',selling_rate='".$productsAmount[$i]."' WHERE serial_number = '".$productsArray[$i]['serial_number']."'";
		// print_r($sql);die;
		 $result = $conn->query($sql);
    }
?>