<?php
require "database_main.php";

$letter = $_GET["letter"];


$sql = "select item_id, item_name FROM products_list where item_name LIKE '".$letter."'";
// print_r($sql);die;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    ?>
<div class="row">
		<div class="col-md-12" id="product_view" style="display: block;">
    <?php
    while($row = $result->fetch_assoc()) {
       echo "<div class='big_box' onclick=modelclick('".$row['item_id']."')>"; 
       echo "<p>".$row["item_name"]."</p>";
       echo "</div>";
    }
} else {
    echo "0 results";
}

?>

	</div>
</div>