<?php require "header.php"; ?>
<?php 

$bill_id = $_GET['bill_id'];
$mode_billing_payment = $_GET['mode_billing_payment'];

?>
<input type="hidden" id="bill_id" value="<?php echo $bill_id; ?>">
<input type="hidden" id="billing_mode" value="<?php echo $mode_billing_payment; ?>">
<div class="container">
<div class="row">
		<div class="col-md-12">
			<table>
				<tr>
					<th class="letter" onclick="letterclick('a')"><h3>A</h3></th>
					<th class="letter" onclick="letterclick('b')"><h3>B</h3></th>
					<th class="letter" onclick="letterclick('c')"><h3>C</h3></th>
					<th class="letter" onclick="letterclick('d')"><h3>D</h3></th>
					<th class="letter" onclick="letterclick('e')"><h3>E</h3></th>
					<th class="letter" onclick="letterclick('f')"><h3>F</h3></th>
					<th class="letter" onclick="letterclick('g')"><h3>G</h3></th>
					<th class="letter" onclick="letterclick('h')"><h3>H</h3></th>
					<th class="letter" onclick="letterclick('i')"><h3>I</h3></th>
					<th class="letter" onclick="letterclick('j')"><h3>J</h3></th>
					<th class="letter" onclick="letterclick('k')"><h3>K</h3></th>
					<th class="letter" onclick="letterclick('l')"><h3>L</h3></th>
					<th class="letter" onclick="letterclick('m')"><h3>M</h3></th>
					<th class="letter" onclick="letterclick('n')"><h3>N</h3></th>
					<th class="letter" onclick="letterclick('o')"><h3>O</h3></th>
					<th class="letter" onclick="letterclick('p')"><h3>P</h3></th>
					<th class="letter" onclick="letterclick('q')"><h3>Q</h3></th>
					<th class="letter" onclick="letterclick('r')"><h3>R</h3></th>
					<th class="letter" onclick="letterclick('s')"><h3>S</h3></th>
					<th class="letter" onclick="letterclick('t')"><h3>T</h3></th>
					<th class="letter" onclick="letterclick('u')"><h3>U</h3></th>
					<th class="letter" onclick="letterclick('v')"><h3>V</h3></th>
					<th class="letter" onclick="letterclick('w')"><h3>W</h3></th>
					<th class="letter" onclick="letterclick('x')"><h3>X</h3></th>
					<th class="letter" onclick="letterclick('y')"><h3>Y</h3></th>
					<th class="letter" onclick="letterclick('z')"><h3>Z</h3></th>
				</tr>
			</table>
		</div>
	</div>
	<div class="big_box_append">
		
	</div><br>
	<div class="small_box_append">
		
	</div>
	<div class="row" id="add_products_step">
		<h4 style="text-align: center;">Add products in Bill</h4>
			<div class="col-md-12">
				<table id="myTable">	
					<tr>
						<th><h5>S.No.</h5></th>
						<th><h5>Marks & NOS Container Number</h5></th>
						<th><h5>Description of Goods</h5></th>
						<th><h5>Quantity</h5></th>
						<th><h5>Rate</h5></th>
						<th><h5>Amount</h5></th>
					</tr>
				</table>
				<div class="row">
					<tr>
						<button id="reset_btn">Reset</button>
						<button id="make_bill">Make Bill</button>
						
				</div>
			</div>
		<!-- </form> -->
		</div>
</div>
<script type="text/javascript">

function letterclick(a){
	$(".big_box_append").html("");
	$(".small_box_append").html("");
	$.ajax({
        type: "get",
        url: "letterGetter.php",
        data: {
        	'letter':a+"%"
        },
        success: function(responseData) {
	    	// alert(responseData);
	    	$(".big_box_append").append(responseData);
	    },
	    error: function(errorThrown) {
	        alert("Error: Cannot find Models");
	    }
    })
}

function modelclick(a){
	// alert(a);
	$(".small_box_append").html("");
	
	$.ajax({
        type: "get",
        url: "AddProductActionGetter.php",
        data: {
        	'item_id':a
        },
        success: function(responseData) {
	    	// alert(responseData);
	    	$(".small_box_append").append(responseData);
	    	$(".small_box_append").show();
	    },
	    error: function(errorThrown) {
	        alert("Error: Cannot find Models");
	    }
    })
}
var productsArray = [];
var productsAmount = [];
function test() {
	// alert("sads");
    $('#out').text('');
    $('#rowclick2 tr').filter(':has(:checkbox:checked)').each(function() {
        // this = tr
        $tr = $(this);
        $('td', $tr).each(function() {
            // If you need to iterate the TD's
        });
        //get row values
        // alert(this.id);
        var rowCount = $('#myTable tr').length;
		// alert(rowCount);
        $.ajax({
	        type: "get",
	        url: "addProductsInBill.php",
	        data: {
	        	'item_id':this.id
	        },
	        success: function(responseData) {
		    	var res = JSON.parse(responseData);
		    	productsArray.push({
		    		'serial_number':res['serial_number'],
		    		'item_name':res['item_name']
		    	});
		    	$('#myTable').append("'<tr><td>"+rowCount+"</td><td>"+res['serial_number']+"</td><td>"+res['item_name']+"</td><td>1 Nos</td><td><input type='textfield' id='amount"+rowCount+"'></td><td></td></tr>'");
		    	// console.log(productsArray);
		    },
		    error: function(errorThrown) {
		        alert("Error: Cannot find Models");
		    }
	    })
    });
}	

$("#reset_btn").click(function(){
    alert("The paragraph was clicked.");
});

$("#make_bill").click(function(){
    var rowCount = $('#myTable tr').length;
    alert(rowCount);
    for(var i =1; i<rowCount;i++){
    	var temp = $("#amount"+i).val();
    	productsAmount.push(temp);
    }
    // console.log(productsAmount);
    finalAjax();
});

function finalAjax(){
	var bill_id = $("#bill_id").val();
	var mode_billing_payment = $("#billing_mode").val();
	$.ajax({
        type: "get",
        url: "submitBillAddition.php",
        data: {
        	'mode_billing_payment': mode_billing_payment,
        	'bill_id':bill_id,
        	'productsArray':productsArray,
        	'productsAmount':productsAmount
        },
        success: function(responseData) {
	    	alert("Bill  created");
	    },
	    error: function(errorThrown) {
	        alert("Error: Cannot Creating Bill");
	    }
    })
}
</script>
<?php require "footer.php";  ?>
