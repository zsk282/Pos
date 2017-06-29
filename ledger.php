<?php include "header.php"; ?>
<?php if($_SESSION["login_flag"] == true){ ?>
<div class="container">
	<div class="row">
		<div class="col-md-8 search_dealer">
			<div class="search_box_header">
				<h4>Search By</h4>
				<div class="search_box_body">
					<ul class="search_box_ul">
						<li class="search_box_li">
							Dealer Name <input type="textfield" class="input_search" name="dealer_name_search">		
						</li>
						<li class="search_box_li">
							Dealer Id <input type="textfield" name="dealer_id_search" class="input_search">
						</li>
						<li class="search_box_li">
							Date: From<input type="textfield" name="dealer_from_search" class="input_search">To<input type="textfield" name="dealer_to_search" class="input_search">
						</li>
						<button>Search</button>
					</ul>
					
				</div>
			</div>
		</div>
		<div class="col-md-4 add_dealer">
			<button class="add_dealer_action">Add Dealer</button>
			<button class="add_dealer_action">Add Customer</button>
		</div>
	</div>
	<br>
<!-- main list table of ledger-->
	<div class="row">
		<div class="col-md-12">
			<table>
				<tr>
					<th><h3>Tin No./GST/CST Number</h3></th>
					<th><h3>Firm/Customer Name</h3></th>
					<th><h3>Debit</h3></th>
					<th><h3>Credit</h3></th>
					<th><h3>Balance</h3></th>
					<th><h3>Details</h3></th>
				</tr>
				<tr>
					<td>SUBH0001</td>
					<td>SINEWAVE FIRM</td>
					<td>+5000</td>
					<td>0</td>
					<td>+5000</td>
					<td><button onclick="location.href='ledgerDetail.php';">Detail</button></td>
				</tr>
				
				<tr>
					<td>SUBH0001</td>
					<td>SINEWAVE FIRM</td>
					<td>+5000</td>
					<td>0</td>
					<td>+5000</td>
					<td><button onclick="location.href='ledgerDetail.php';">Detail</button></td>
				</tr>
				<tr>
					<td>SUBH0001</td>
					<td>SINEWAVE FIRM</td>
					<td>+5000</td>
					<td>0</td>
					<td>+5000</td>
					<td><button onclick="location.href='ledgerDetail.php';">Detail</button></td>
				</tr>
				<tr>
					<td>SUBH0001</td>
					<td>SINEWAVE FIRM</td>
					<td>+5000</td>
					<td>0</td>
					<td>+5000</td>
					<td><button onclick="location.href='ledgerDetail.php';">Detail</button></td>
				</tr>
			</table>
		</div>
	</div>
</div>
<?php } ?>
<?php include "footer.php"; ?>