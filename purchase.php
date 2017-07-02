<?php include "header.php"; ?>
<?php if($_SESSION["login_flag"] == true){ ?>
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
		
	</div>
	<div class="small_box_append">
		
	</div>
	<div class="row">
	<br>
		<div class="col-md-12" style="text-align: right;">
		<br>
			<!-- <form action="addProductAction.php" method="GET"> -->
				Company Name: <input type="textfield" id="company_name"><br>
				item name: <input type="textfield" id="item_name"><br>
				Model Number: <input type="textfield" id="model_name"><br>
				<!-- <input type="submit" name="submit"> -->
				<button id="addProductActionSubmit">Add Product</button>
				<script type="text/javascript">
					$("#addProductActionSubmit").click(function(){
						var company_name = document.getElementById('company_name').value;
						var model_name = document.getElementById('model_name').value;
						var item_name = document.getElementById('item_name').value;
					      $.ajax({
					            type: "get",
					            url: "addProductAction.php",
					            data: {
					            	'company_name':company_name,
					            	'model_name':model_name,
					            	'item_name':item_name
					            },
					            success: function(responseData) {
					            	if(responseData == "success"){
					            		alert("Product Added");
					            	}else{
					            		alert("Error Adding new Product");	
					            	}
					            },
					            error: function(errorThrown) {
					                alert("Error Adding new Product");
					            }
					        })
					});
				</script>
			<!-- </form> -->
		</div>			
	</div>
	<!-- have to show after slecting all product details and models  -->
	<div class="row hidden_box" style="display: none;">
		<div class="row">
			<div class="col-md-12" style="text-align: center;">
				<h3>Product Name:</h3>
				<h3 id="hidden_box_product_name"></h3>
				<h3>Model Name:</h3>
				<h3 id="hidden_box_model_name"></h3>
				<h3>Company Name:</h3>
				<h3 id="hidden_box_company_name"></h3>
			</div>
		</div>
		<div class="row">
			Enter Number of Purchased Items: <input type="textfield" id="qty_selector">
			Enter Bill Number: <input type="textfield" id="bill_no_selector"><br>
			<button id="serial_number_selector">Insert Serial Numbers</button>
			<br><br>
				Insert Serial Numbers:<br>
			<div class="input_field_numbers" style="display: none;">
				<!-- <input type="textfield" name=""><br> -->
			</div>
		</div>
		<div class="row" style="text-align: right;">
		<button id="purchase_done_button">Done</button>
		<button>Cancel</button>
	</div>
	</div>
	
</div>
<?php } ?>
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
	$(".small_box_append").html("");
	
	$.ajax({
        type: "get",
        url: "modelGetter.php",
        data: {
        	'item_id':a
        },
        success: function(responseData) {
	    	 // alert(responseData);
	    	 var res = JSON.parse(responseData);
	    	 console.log(res);
	    	$("#hidden_box_product_name").html(res["item_name"]);
	    	$("#hidden_box_company_name").html(res["company_name"]);
	    	$("#hidden_box_model_name").html(res["model_name"]);
	    	$(".hidden_box").show();
	    },
	    error: function(errorThrown) {
	        alert("Error: Cannot find Models");
	    }
    })
}

$("#serial_number_selector").click(function(){
	var numbers = document.getElementById('qty_selector').value;
	// alert(numbers);
	html = '';

	for(i=1;i<=numbers;i++){
		
		html += "Serial Number "+i+": &nbsp<input type='textfield' id='qty_"+ i+"'><br>"
	}
	// console.log(html);
	$(".input_field_numbers").append(html);
	$(".input_field_numbers").show();
});


$("#purchase_done_button").click(function(){
	var numbers = document.getElementById('qty_selector').value;	
	var dataString = [];
	for (var i = 1; i <= numbers; i++) {
		dataString.push(document.getElementById('qty_'+i).value);
	}
	var bill_no = document.getElementById('bill_no_selector').value;
	
	var product_name = $("#hidden_box_product_name").text();
	var model_name = $("#hidden_box_model_name").text();
	var company_name = $("#hidden_box_company_name").text();
	var numbers = numbers;

	$.ajax({
        type: "get",
        url: "serialAdder.php",
        data: {
        	'bill_no':bill_no,
        	'product_name':product_name,
        	'model_name':model_name,
        	'company_name':company_name,
        	'numbers':numbers,
        	'dataString':dataString
        },
        success: function(responseData) {
	    	 // alert(responseData);
	    	 if(responseData == 1 ){
	    	 	alert("Product Serial numbers Added");
	    	 	location.reload();
	    	 }else{
	    	 	alert("Some Error occured while adding Serial numbers");
	    	 }
	    },
	    error: function(errorThrown) {
	        alert("Error: Cannot Add Serial Numbers: Error in something!");
	    }
    })
});

$(".big_box").click(function(){
	alert("sda");
});

// $("#product_view").click(function(){
// 	$("#item_view").show();
// });


</script>
<?php include "footer.php"; ?>