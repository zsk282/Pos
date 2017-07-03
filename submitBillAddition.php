<?php
require "database_main.php";
$bill_date = $_GET["bill_date"];
$bill_id = $_GET["bill_id"] + 1;
$customer_details = $_GET["customer_details"];
$productsArray = $_GET["productsArray"];
$productsAmount = $_GET["productsAmount"];
$final_bill_number = "SUBH/17-18/".$bill_id;
$mode_billing_payment = $_GET["mode_billing_payment"];

// echo $bill_date;die;
$sql = "INSERT INTO temp_bill_counter(bill_no,customer_id,mode_selling,billing_date) VALUES ('SUBH/17-18/".$bill_id."','".$customer_details."','".$mode_billing_payment."','".$bill_date."')";
// die($sql);die;
$result = $conn->query($sql);

for($i=0;$i < count($productsArray);$i++){
    	$sql = "UPDATE products SET selling_bill_number='".$final_bill_number."',customer_id='".$customer_details."',is_sold='1',mode_selling='".$mode_billing_payment."',selling_rate='".$productsAmount[$i]."' WHERE serial_number = '".$productsArray[$i]['serial_number']."'";
		// print_r($sql);die;
		 $result = $conn->query($sql);
    }

    echo $final_bill_number;
?>