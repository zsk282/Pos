<?php include "header.php"; ?>
<?php if($_SESSION["login_flag"] == true){ ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="text-align: center">
				<h4>Dealer Name in BOLD</h4>
				<h6>Address 1</h6>
				<h6>Add 2</h6>
				<h6>Phone Number</h6>
				<h6>Contact #</h6>
				<h6>Detail</h6>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="text-align: center">
				<h4>OUR Name in BOLD</h4>
				<h6>Address 1</h6>
				<h6>Add 2</h6>
				<h6>Phone Number</h6>
				<h6>Contact #</h6>
				<h6>Dteail</h6>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table>
					<tr>
						<th><h3>Date</h3></th>
						<th><h3>Particulars</h3></th>
						<th><h3>Vch Type</h3></th>
						<th><h3>Vch No./ Excise Inv. No.</h3></th>
						<th><h3>Debit</h3></th>
						<th><h3>Credit</h3></th>
						<th><h3>Detail</h3></th>
					</tr>
					<tr>
						<td>2-1-2121</td>
						<td>SUBH0001 Battery</td>
						<td>Purchase</td>
						<td>Subhtron/17-18/1234</td>
						<td>0</td>
						<td>+5000</td>
						<td><button onclick="location.href='finalBilling.php';">Detail</button></td>
					</tr>
					
					<tr>
						<td>2-1-2121</td>
						<td>SUBH0001 Battery</td>
						<td>Purchase</td>
						<td>Subhtron/17-18/1234</td>
						<td>0</td>
						<td>+5000</td>
						<td><button onclick="location.href='finalBilling.php';">Detail</button></td>
					</tr>
					<tr>
						<td>2-1-2121</td>
						<td>SUBH0001 Battery</td>
						<td>Purchase</td>
						<td>Subhtron/17-18/1234</td>
						<td>0</td>
						<td>+5000</td>
						<td><button onclick="location.href='finalBilling.php';">Detail</button></td>
					</tr>
					<tr>
						<td>2-1-2121</td>
						<td>SUBH0001 Battery</td>
						<td>Purchase</td>
						<td>Subhtron/17-18/1234</td>
						<td>0</td>
						<td>+5000</td>
						<td><button onclick="location.href='finalBilling.php';">Detail</button></td>
					</tr>
					<tr>
						<td>2-1-2121</td>
						<td>SUBH0001 Battery</td>
						<td>Purchase</td>
						<td>Subhtron/17-18/1234</td>
						<td>0</td>
						<td>+5000</td>
						<td><button onclick="location.href='finalBilling.php';">Detail</button></td>
					</tr>
				</table>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12" style="text-align: right;">
				<div class="order_total_box">
					<h2>CR&nbsp&nbsp</h2><h2>Total:&nbsp</h2><h2>12345</h2>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12" style="text-align: right;">
				Select Date:
				<input type="textfield" name="closingBalance_calander">
				<button>Find Closing Balance</button>
			</div>
		</div>
		<br>
	</div>
<?php } ?>
<?php include "footer.php"; ?>