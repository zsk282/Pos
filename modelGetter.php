<?php
require "database_main.php";

$letter = $_GET["item_id"];


$sql = "select item_name,company_name,model_name,item_id FROM products_list where item_id =".$letter;
// print_r($sql);die;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    $data = array();
    while($row = $result->fetch_assoc()) {
       $data["item_name"] = $row["item_name"];
       $data["company_name"] = $row["company_name"];
       $data["model_name"] = $row["model_name"];
       $data["item_id"] = $row["item_id"];
    }

    echo json_encode($data);
} else {
    echo "0";
}

?>