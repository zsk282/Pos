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
				<tr>
					<td>SUBH0001</td>
					<td>SINEWAVE FIRM</td>
					<td>5-1-2017</td>
					<td>1000</td>
					<td>Cash</td>
					<td><button>View</button></td>
				</tr>
			</table>
		</div>
	</div>
	<!-- <div class="row">
		<div class="col-md-8"></div>
		<div class="col-md-4">
			<div class="order_total_box">
				<h2>Total:&nbsp</h2><h2>12345</h2>
			</div>
		</div>
	</div> -->
<?php } ?>
<?php include "footer.php"; ?>