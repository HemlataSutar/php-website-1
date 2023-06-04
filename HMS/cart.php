<?php
if(!isset($_COOKIE['email_signed_in'])) {
    header('location: /login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive Product Design</title>
	<link rel="stylesheet" type="text/css" href="css/cart.css">
</head>
<body>
	<section class="products">
		<h2>Book Your Room...</h2>
		<div class="all-products">
			<div class="product">
				<img src="css/room_1.jpg">
				<div class="product-info">
					<h4 class="product-title">Single Room</h4>
					<p class="product-price">RS 2000</p>
					<a class="product-btn" href="https://book.stripe.com/test_8wM5oe06d4nnf84144">Book Now</a>

				</div>
			</div>
			<div class="product">
				<img src="css/room_2.jpg">
				<div class="product-info">
					<h4 class="product-title">Double Room</h4>
					<p class="product-price">RS 4000</p>
					<a class="product-btn" href="https://book.stripe.com/test_7sIdUK7yFdXX0daeUW">Book Now</a>

				</div>
			</div>
			<div class="product">
				<img src="css/room_3.jpg">
				<div class="product-info">
					<h4 class="product-title">Luxury Room</h4>
					<p class="product-price">RS 5000</p>
					<a class="product-btn" href="https://book.stripe.com/test_7sI3g63ip8DDaRO5kn">Book Now</a>

				</div>
			</div>
			<div class="product">
				<img src="css/room_4.jpg">
				<div class="product-info">
					<h4 class="product-title">Business Room</h4>
					<p class="product-price">RS 3000</p>
					<a class="product-btn" href="https://book.stripe.com/test_4gw2c22elaLL1he8wA">Book Now</a>

				</div>
			</div>
		</div>
	</section>

</body>
</html>