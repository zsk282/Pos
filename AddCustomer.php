<?php
require "database_main.php";


$c_name = $_GET["c_name"];
$c_tin = $_GET["c_tin"];
$c_Address = $_GET["c_Address"];
$c_mobile = $_GET["c_mobile"];

$sql = "INSERT INTO cutomer (name, tin_no, address,mobile_no)
VALUES ('".$c_name."', '".$c_tin."', '".$c_Address."','".$c_mobile."')";

if ($conn->query($sql) === TRUE) {
    $sql = "SELECT MAX(id) FROM cutomer";
            $result = $conn->query($sql);
            $temp = 0;
            // print_r($result);die;
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $data = array();
                foreach ($result->fetch_assoc() as $key ) {
                  $temp = $key;
                }
            }
            echo $temp;
} else {
    echo "error";
}


?>