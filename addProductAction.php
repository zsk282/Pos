<?php

require "database_main.php";

$company_name = $_GET["company_name"];
$model_name = $_GET["model_name"];
$item_name = $_GET["item_name"];


$sql = "INSERT INTO products_list (company_name, model_name, item_name) VALUES ( '".$company_name."','".$model_name."','".$item_name."')";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "error".$conn->error;
}


?>