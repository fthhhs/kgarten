<?php include "dbconn.php";?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<title>AdminHub</title>
</head>
	<body>
		<form action = "test.php" method = "GET">
		Number 1:<br>
		<input name = "num1"><br>
		Number 2:<br>
		<input name = "num2"><br>
		<button type = "submit">sum</button>
		</form>
		<a href="addstaff.php" class="btn-download">
			<i class="" ></i>
			<span class="text">Back</span>
		</a> 


</body>
</html> -->

<html>
	<head><title>Simple HTML Calculation form</title></head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
	<style>
		.row-heading
		{
		font-size:1.3rem;
		font-weight:bold;
		}

		.total
		{
		font-size:2rem;
		font-weight:bold;
		}
		
		.total-val
		{
		font-size:2rem;
		border:
		}
	</style>
	<body>
		<div class="container mt-4">
		<div class="row">
			<div class="col-6 row-heading">
			Item
			</div>
			<div class="col-3 row-heading">
			Quantity
			</div>
			<div class="col-2 row-heading">
			Price
			</div>
			
		</div>
		<div class="row">
			<div class="col-6">
			1. Powdered white sugar (cups)
			</div>
			<div class="col-3">
			<input type="number" value="0" class="qty" id="qty_sugar"/>
			</div>
			<div class="col-2">
			<input type="number" readonly value="0" id="price_sugar"/>
			</div>
		</div>
		
		<div class="row my-3">
			<div class="col-6">
			2. Butter salted (grams)
			</div>
			<div class="col-3">
			<input type="number" value="0" class="qty" id="qty_butter"/>
			</div>
			<div class="col-2">
			<input type="number" readonly value="0" id="price_butter"/>
			</div>
		</div>
		
		<div class="row my-3">
			<div class="col-6">
			3. Eggs (count)
			</div>
			<div class="col-3">
			<input type="number" class="qty" value="0" id="qty_eggs"/>
			</div>
			<div class="col-2">
			<input type="number" readonly value="0" id="price_eggs"/>
			</div>
		</div>
		
		<div class="row my-3">
			<div class="col-6">
			4. Vanilla extract (ml)
			</div>
			<div class="col-3">
			<input type="number" class="qty" value="0" id="qty_vanilla"/>
			</div>
			<div class="col-2">
			<input type="number" readonly value="0" id="price_vanilla"/>
			</div>
		</div>
		
		<div class="row my-4">
			<div class="col-9 text-right total">
			Total
			</div>
			
			<div class="col-2 total-val">
			<span id="total_value">0</span>
			</div>
		</div>
		
		</div>

	</body> 
	<script>
		function calculateTotal()
		{
		let unit_price={
			sugar: 22,
			butter: 12,
			eggs: 2,
			vanilla:43    
		};
		let item_price={}
		
		item_price.sugar = ($("#qty_sugar").val() * unit_price.sugar )
		$("#price_sugar").val(item_price.sugar);
		
		item_price.butter = ($("#qty_butter").val() * unit_price.butter )
		$("#price_butter").val(item_price.butter);
		
		item_price.eggs = ($("#qty_eggs").val() * unit_price.eggs )
		$("#price_eggs").val(item_price.eggs);  
		
		item_price.vanilla = ($("#qty_vanilla").val() * unit_price.vanilla )
		$("#price_vanilla").val(item_price.vanilla);    
		
		let total = item_price.sugar + item_price.butter + item_price.eggs + item_price.vanilla;

		
		$("#total_value").text(total);
		
		}

		$(function()
		{
			$(".qty").on("change keyup",calculateTotal)
		})

	</script>
</html>

