<?php include "header.php"; ?>
<?php if($_SESSION["login_flag"] == true){ ?>
	<div class="row">
		<div class="col-md-8">
			<div class="col-md-12" style="background-color: darkcyan;color: white;">
				<h3>Total Sale in Item Numbers</h3>
			</div>
			<div class="col-md-12" style="background-color: crimson;color: white;">
				<h3>Total Sales in RS</h3>
			</div>
			<div class="col-md-12" style="background-color: coral;color: white;">
				<h3>Today's Date</h3>
			</div>
		</div>
		<div class="col-md-4">
			<button onclick="location.href='selectCustomerBilling.php';">Make Sale</button>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-12">
			<table>
				<tr>
					<th><h3>Bill Number</h3></th>
					<th><h3>Customer Name</h3></th>
					<th><h3>Date</h3></th>
					<th><h3>Price</h3></th>
					<th><h3>Payment Mode</h3></th>
					<th><h3>View</h3></th>
				</tr>
				<?php
				$sql = "SELECT selling_bill_number,selling_rate,customer_id,mode_selling FROM products WHERE is_sold = 1";
				// print_r($sql);die;
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				       	echo "<tr>";
				        echo "<td>" . $row["selling_bill_number"]. "</td>";
				        echo "<td>" . $row["customer_id"]. "</td>";
				        echo "<td></td>";
				        echo "<td>" . $row["selling_rate"]. "</td>";
				        echo "<td>" . $row["mode_selling"]. "</td>";
				        echo "<td><button onclick=viewBill('".$row["selling_bill_number"]."')>View Bill</button></td>";
				        echo "</tr>";
				    }
				} else {
				    echo "0 results";
				}

				?>
			</table>
		</div>
	</div>
<script type="text/javascript">
	function viewBill(a){
		fullPath ="finalbilling.php?bill_number="+a;
	    	window.location=fullPath;
	}
</script>
<?php } ?>
<?php include "footer.php"; ?>