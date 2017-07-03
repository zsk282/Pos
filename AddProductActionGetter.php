<?php
require "database_main.php";

$letter = $_GET["item_id"];
$temp_name = '';

$sql = "select model_name FROM products_list where item_id =".$letter;
// print_r($sql);die;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    $data = array();
    while($row = $result->fetch_assoc()) {
       $temp_name = $row["model_name"];
    }

    $sql = "select company_name,model_name,item_name,serial_number FROM products where model_name ='".$temp_name."'  AND is_sold != 1";
    $data = array();
    // die($sql);
    $result = $conn->query($sql);

    echo "<table id='rowclick2'>
          <tbody>
          <tr>
            <th><h5>Pick</h5></th>
            <th><h5>Serial Number</h5></th>
            <th><h5>Company</h5></th>
            <th><h5>Model Name</h5></th>
          </tr>";
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<tr id='".$row['serial_number']."'><td class='cb'>";
        echo "<input type='checkbox' name='serial_number' value='".$row['serial_number']."'>";
        echo "</td><td>";
        echo $row["serial_number"];
        echo "</td><td>";
        echo $row["company_name"];
        echo "</td><td>";
        echo $row["model_name"];
        echo "</td></tr>";
        // $temp_name = $row["item_name"];
      }
    }
    echo "<tr><td></td><td></td><td></td><td><button id='test' onclick='test()'>Select Product</button>";
    echo "</tbody></table>";

} else {
    echo "0";
}

?>