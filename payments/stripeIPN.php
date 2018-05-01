<?php

require_once "config.php";

if(!empty($_POST['stripeToken']) && !empty($_POST['stripeEmail']) && !empty($_GET['id'])){
/*if(!isset($_POST['stripeToken']) || !isset($products[$productId]))
{
	header("Location:prices.php");
	exit();
}
*/
$productId = $_GET['id'];

$token = $_POST['stripeToken'];
$email  =$_POST['stripeEmail'];

//var_dump($_POST);


$charge = \Stripe\Charge::create([
    'amount' => $products[$productId]['price'],
    'currency' => 'usd',
    'description' =>  $products[$productId]['title'],
    'source' => $token,
]);
echo "Success!ypo paid ".$products[$productId]['price'];
}

?>