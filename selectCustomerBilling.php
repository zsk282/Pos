<?php require "header.php"; ?>
<div class="container">
		<div class="row">
			<div class="col-md-8 search_dealer">
				<div class="search_box_header">
					<h4>Search By</h4>
					<div class="search_box_body">
						<ul class="search_box_ul">
							<li class="search_box_li">
								Dealer/Customer Name <input type="textfield" class="input_search" name="dealer_name_search">		
							</li>
							<button>Search</button>
						</ul>
						
					</div>
				</div>
			</div>
			<div class="col-md-4 add_dealer">
				<button class="add_dealer_action" onclick="location.href='finalBilling.php';">Create Bill</button>
				<button class="add_dealer_action">Add New Customer/Firm</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table>
					<tr>
						<th><h3>Firm/Customer Name</h3></th>
						<th><h3>Make Bill</h3></th>
					</tr>
					<tr>
						<td>SINEWAVE FIRM</td>
						<td><button>Make Bill</button></td>
					</tr>
					<tr>
						<td>SINEWAVE FIRM</td>
						<td><button>Make Bill</button></td>
					</tr>
					<tr>
						<td>SINEWAVE FIRM</td>
						<td><button>Make Bill</button></td>
					</tr>
					<tr>
						<td>SINEWAVE FIRM</td>
						<td><button>Make Bill</button></td>
					</tr>
					<tr>
						<td>SINEWAVE FIRM</td>
						<td><button>Make Bill</button></td>
					</tr>
				</table>
		</div>
	</div>
</div>
<?php require "footer.php"; ?>