<?php require "header.php"; ?>
<?php $bill_number = $_GET["bill_number"];?>
<div class="container">
<h5 style="text-align: center;font-weight: 600">VAT INVOICE</h5>
<div class="row" style="text-align: right;">
	<button>Print</button>
	<button>Cancel</button>
</div>
	<table>
		<tr>
			<td>
				<table>
					<tr>
						<td>
							<h4>SHUBHTRON</h4>
							<p>
								P-71 Karni Nagar Vivek Vihar<br>
								200ft Bypass Gandhi Path West<br>
								Vaishali Nagar-JAIPUR<br>
								9950093592
							</p>
						</td>
					</tr>
					<tr>
						<td>
						<?php
							$temp;
								$sql = "SELECT customer_id FROM temp_bill_counter WHERE bill_no='".$bill_number."'";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
								    // output data of each row
								    while($row = $result->fetch_assoc()) {
								       $temp = $row["customer_id"];
								    }
								}

								$sql = "SELECT * FROM cutomer WHERE id='".$temp."'";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
								    // output data of each row
								    while($row = $result->fetch_assoc()) {
								       $c_name = $row["name"];
								       $c_tin_no = $row["tin_no"];
								       $c_address = $row["address"];
								       $c_mobile_no = $row["mobile_no"];
								    }
								}
							?>
							<h4><?php echo $c_name; ?></h4>
							<p>
								<?php echo $c_address; ?><br>
								<?php echo $c_mobile_no; ?><br>
								Tin Number: <?php echo $c_tin_no; ?>
							</p>
						</td>
					</tr>
				</table>
			</td>
			<td>
				<table>
					<tr>
						<td>
							Invoice No : <?php echo $bill_number;?>
						</td>
						<td>
							<?php
							$temp;
								$sql = "SELECT billing_date FROM temp_bill_counter WHERE bill_no='".$bill_number."'";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
								    // output data of each row
								    while($row = $result->fetch_assoc()) {
								       $temp = $row["billing_date"];
								    }
								}
							?>
							Dated: <?php echo $temp;?>
						</td>
					</tr>
					<tr>
						<td>
							Delivery Note
						</td>
						<td>
						<?php
							$temp;
								$sql = "SELECT mode_selling FROM temp_bill_counter WHERE bill_no='".$bill_number."'";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
								    // output data of each row
								    while($row = $result->fetch_assoc()) {
								       $temp = $row["mode_selling"];
								    }
								}
							?>
							Mode/Terms of Payments: <?php echo $temp;?>
						</td>
					</tr>
					<tr>
						<td>
							Supplier's Ref.
						</td>
						<td>
							Other's Ref.
						</td>
					</tr>
					<tr>
						<td>
							Buyer's Order No.
						</td>
						<td>
							Dated
						</td>
					</tr>
					<tr>
						<td>
							Despatch Document No
						</td>
						<td>
							Dated
						</td>
					</tr>
					<tr>
						<td>
							Despatched through
						</td>
						<td>
							Destination
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<!-- <table style="">
			<tr>
			<th class="input_th"><input type="textfield" name="container_no" placeholder="Model"></th>
			<th class="input_th"><input type="textfield" name="container_no" placeholder="Item"></th>
			<th class="input_th"><input type="textfield" name="container_no" placeholder="Serial No."></th>
			<th class="input_th"><input type="textfield" name="container_no" placeholder="Quantity"></th>
			<th class="input_th"><input type="textfield" name="container_no" placeholder="Rate"></th>
			<th class="input_th"><input type="textfield" name="container_no" placeholder="Amount"></th>
			<th class="input_th"><button>Add Product</button></th>
			</tr>
		</table> -->
		<tr>
			<!-- main particulars table -->
			<table>
				<tr>
					<th><h5>S.No.</h5></th>
					<th><h5>Marks & NOS Container Number</h5></th>
					<th><h5>Description of Goods</h5></th>
					<th><h5>Quantity</h5></th>
					<th><h5>Rate</h5></th>
					<th><h5>Amount</h5></th>
				</tr>
				<?php
					$sql = "SELECT * FROM products WHERE selling_bill_number='".$bill_number."'";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
					    // output data of each row
					    while($row = $result->fetch_assoc()) {
					    	//echo $row["serial_number"];die;
					       	echo "<tr><td>";
					       	echo "1";
							echo "</td><td>";
							echo $row["serial_number"];
							echo "</td><td>";
							echo $row["model_name"];
							echo "</td><td>";
							echo "1 Nos";
							echo "</td><td>";
							echo $row["selling_rate"] *1;
							echo "</td><td>";
							echo $row["selling_rate"] *1;
							echo "</td></tr>";
					    }
					}

				?>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td style="font-weight: 600">Total</td>
					<td style="font-weight: 600">4 Nos</td>
					<td style="font-weight: 600">18000</td>
				</tr>
			</table>
			<table>
				<p>Amount Chargables (in words)</p>
				<h4>Indian Rupees Eighteen thousand Only</h4>
			</table>
			<table class="borderless_table">
				<tr class="borderless_table">
					<td class="borderless_table">Company's VAT TIN</td>
					<td class="borderless_table">:&nbsp</td>
					<td class="borderless_table">123465789</td>
				</tr>
				<tr class="borderless_table">
					<td class="borderless_table">Company's PAN</td>
					<td class="borderless_table">:&nbsp</td>
					<td class="borderless_table">123465789</td>
				</tr>
			</table>
			<table>
				<tr id="seal_stamp_tr">
					<td>
						<p style="font-weight: 600">Customer's Seal and Signature</p>
						<br><br><br>
					</td>
					<td>
						<p style="font-weight: 600">for SHUBHTRON</p>
						<br><br>
						<p style="text-align: right;">Authorised Signatory</p>
					</td>
				</tr>
			</table>
		</tr>
	</table>
	<div class="row">
	<br>
		<p style="text-align: center;">
			SUBJECT TO JAIPUR JURIDICTION
		</p>
		<p style="text-align: center;">
			This is computer genereted invoice
		</p>
	</div>
</div>	
<?php require "footer.php"; ?>