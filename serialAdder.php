<?php

require "database_main.php";
$purchase_bill_number = $_GET["bill_no"];
$product_name = $_GET["product_name"];
$model_name = $_GET["model_name"];
$company_name = $_GET["company_name"];
$numbers = $_GET["numbers"];
$dataString = $_GET["dataString"];
$temp = 0;
for ($i=0; $i < $numbers ; $i++) { 
	$sql = "INSERT INTO products (company_name, model_name, item_name, serial_number, purchase_bill_number)
	VALUES ('".$company_name."', '".$model_name."', '".$product_name."','".$dataString[$i]."', '".$purchase_bill_number."')";
	// die($sql);
	if ($conn->query($sql) === TRUE) {
	   $temp = 1;
	} else {
	    $temp = 0;
	}
}

if($temp == 1){
	$sql = "INSERT INTO stock_ledger ( date, bill_no, item_name, recipt)
	VALUES ('".date("Y-m-d H:i:s")."', '".$purchase_bill_number."', '".$product_name."','".$numbers."')";
	// die($sql);
	if ($conn->query($sql) === TRUE) {
	   $temp = 1;
	} else {
	    $temp = 0;
	}
}else{
	echo "0";
}
echo $temp;

?>