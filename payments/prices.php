<?php
require_once "stripeIPN.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>price</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0" >
	<meta http-equiv="X-UA_Compatible" content="ie=edge">
	<style type="text/css">
		.container{
			margin-top: 100px;
		}
		.card{
			width: 300px;
		}
		.card:hover{
			-webkit-transform:  scale(1.05);
			transform: scale(1.05);
			-webkit-transition: all .3s ease-in-out ;
		}
		.list-group-item{
			border:0px;
			padding: 5px;
		}
		.price{
			font-size: 72px;
		}
	</style>
</head>
<body>
<div class="container">
<?php
$colNum = 1;
foreach($products as $prodKey => $prodVal)
{
	if($colNum == 1){
	echo '<div class="row">';
	}
	/////
	echo '
			<div class="col-md-4" ></div>
				<div class="card">
					<div class="card-header">
						<h2 class="price"><label style="position: relative; top:-31px;font-size:25px;">$</label>'.$prodVal['price'].'</h2>
					</div>
					<div class="card-body text-center">
						<div class="card-title">
							<h2>'.$prodVal['title'].'</h2>
						</div>
						<ul class="list-group">';
							foreach($prodVal['features'] as $features){
							echo '<li class="list-group-item">'.$features.'</li>';
							}
							echo '
														</ul>
														<br><br>
														<form action ="stripeIPN.php?id='.$prodKey.'" method="POST">
								  <script
								    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
								    data-key="'.$stripeDetails['publishableKey'].'"
								    data-amount="'.$prodVal['price'].'"
								    data-name="'.$prodVal['title'].'"
								    data-description="Widget"
								    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
								    data-locale="auto">
								  </script>
								</form>
					</div>	
				    </div>
			    </div>	
			</div>
		</div>';
		////
	if($colNum == 3){
		echo "</div>";
		$colNum= 0;
	}
	else
		$colNum++;
}
?>
</body>
</html>