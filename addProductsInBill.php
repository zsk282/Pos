<?php
require "database_main.php";

$letter = $_GET["item_id"];


$sql = "select item_name,serial_number FROM products where serial_number ='".$letter."'";
// print_r($sql);die;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    $data = array();
    while($row = $result->fetch_assoc()) {
       $data["item_name"] = $row["item_name"];
       $data["serial_number"] = $row["serial_number"];
    }

    echo json_encode($data);
} else {
    echo "0";
}

?>