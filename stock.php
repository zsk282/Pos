<?php require "header.php"; ?>
	<div class="row">
		<div class="col-md-12">
			<table>
				<tr>
					<th><h3>A</h3></th>
					<th><h3>B</h3></th>
					<th><h3>C</h3></th>
					<th><h3>D</h3></th>
					<th><h3>E</h3></th>
					<th><h3>F</h3></th>
					<th><h3>G</h3></th>
					<th><h3>H</h3></th>
					<th><h3>I</h3></th>
					<th><h3>J</h3></th>
					<th><h3>K</h3></th>
					<th><h3>L</h3></th>
					<th><h3>M</h3></th>
					<th><h3>N</h3></th>
					<th><h3>O</h3></th>
					<th><h3>P</h3></th>
					<th><h3>Q</h3></th>
					<th><h3>R</h3></th>
					<th><h3>S</h3></th>
					<th><h3>T</h3></th>
					<th><h3>U</h3></th>
					<th><h3>V</h3></th>
					<th><h3>W</h3></th>
					<th><h3>X</h3></th>
					<th><h3>Y</h3></th>
					<th><h3>Z</h3></th>
				</tr>
			</table>
		</div>
	</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table>
				<tr>
					<th><h3>Date</h3></th>
					<th><h3>Particulars</h3></th>
					<th><h3>Bill No</h3></th>
					<th><h3>Recipt</h3></th>
					<th><h3>Issue</h3></th>
					<th><h3>View Bill</h3></th>
				</tr>
				<?php
					$sql = "SELECT * FROM `stock_ledger` WHERE 1";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					    // output data of each row
					    while($row = $result->fetch_assoc()) {
					        echo "<tr>";
					        echo "<td>" . $row["date"]. "</td>";
					        echo "<td>" . $row["item_name"]. "</td>";
					        echo "<td>" . $row["bill_no"]. "</td>";
					        echo "<td>" . $row["recipt"]. "</td>";
					        echo "<td>" . $row["issue"]. "</td>";
					        echo "<td><button onclick=showBill('" .$row["bill_no"]. "')>View Bill</button></td>";
					        echo "</tr>";
					    }
					} else {
					    echo "0 results";
					}


				?>
			</table>
			<script type="text/javascript">
				function showBill(a){alert(a);}
			</script>
		</div>
	</div>
</div>
<?php require "footer.php" ?>