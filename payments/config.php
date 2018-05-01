<?php
	require_once "stripe-php-master/init.php";
	require_once "products.php";

	$stripeDetails = array(
		"secretKey" => "sk_test_aqkeNcZ2WASeTyiWXfqH1Emx",
		"publishableKey" => "pk_test_ZaZ6G96fNFzTqX6qHOhzl8LW"

		);


	\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);


?>