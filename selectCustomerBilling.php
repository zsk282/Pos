<?php require "header.php"; ?>
<!-- SELECTED STEP ONE -->
<div class="container">
<form action="AddProduct.php" method="GE"T>
		<div class="row" id="select_customer_step">
			<h4 style="text-align: center;">Select Customer</h4>
			<div class="col-md-12">
					<table>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td><button onclick="select_customer_step_add_customer()">Add New Customer</button></td>
						</tr>
						<tr>
							<th><h3>Firm/Customer Name</h3></th>
							<th><h3>TIN Number</h3></th>
							<th><h3>Address</h3></th>
							<th><h3>Mobile Name</h3></th>
							<th><h3>Select</h3></th>
						</tr>
						<!-- <tr>
							<td>SINEWAVE FIRM</td>
							<td><button onclick="select_customer_step('customerId')">Add Detail</button></td>
						</tr> -->
						<?php
							$sql = "SELECT * FROM `cutomer` WHERE 1";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row = $result->fetch_assoc()) {
							        echo "<tr>";
							        echo "<td>" . $row["name"]. "</td>";
							        echo "<td>" . $row["tin_no"]. "</td>";
							        echo "<td>" . $row["address"]. "</td>";
							        echo "<td>" . $row["mobile_no"]. "</td>";
							        echo "<td><input type='radio' name='customer_details' value='".$row["id"]."'></td>";
							        echo "</tr>";
							    }
							} else {
							    echo "0 results";
							}
						?>
					</table>
			</div>
		</div>
		<!-- SELECTED STEP SECOND -->
		<div class="row" id="add_details_step">
			<h4 style="text-align: center;">Add Payment Details in Bill</h4>
				<ul class="search_box_ul">
					<li class="search_box_li">
						Mode of Payment
						<select name="mode_billing_payment">
							<option value="Cash">Cash</option>
							<option value="Check">Check</option>
							<option value="Credit">Credit</option>
							<option value="Online">Online</option>
						</select>
					</li>
				</ul>
				<div class="col-md-12 two_big_button" style="text-align: right;">
					<?php
						$sql = "SELECT MAX(id) FROM temp_bill_counter";
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
					?>
					<input type="hidden" name="bill_id" value="<?php echo $temp; ?>">
					<input type="submit" value="Add Products"></input>
				</div>
		</div>
		<!-- <div class="row" id="final_confirmation_step">
		<h4 style="text-align: center;">Final Action</h4>
			<div class="row">
			</div>
		</div> -->
	</div>
	<script type="text/javascript">
		function select_customer_step(session_key,session_value){
			$("#addProductActionSubmit").click(function(){
			      $.ajax({
			            type: "get",
			            url: "sessionSetter.php",
			            data: {
			            	'session_key':session_key,
			            	'session_value':session_value
			            },
			            success: function(responseData) {
			            	alert(responseData);
			            },
			            error: function(errorThrown) {
			                alert("Error Adding new Product");
			            }
			        })
			});
		}
	</script>
 </form>
<?php require "footer.php"; ?>