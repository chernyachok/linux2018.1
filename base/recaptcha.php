<?php
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$secret_key = "6LdlG1MUAAAAADZl6xr-cCNLwlqRcbNYTe3JaPDj";
	$response_key = $_POST['g-recaptcha-response'];
	$user_ip = $_SERVER['REMOTE_ADDR'];
	

	$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$response_key&remote=$user_ip";
	$response = file_get_contents($url);
	$response = json_decode($response);
	if ($response->success) {
		echo "fuck you, $username";
		# code...
	}
	else 
		echo "one more,bitch";
	# code...

}


?>


<!DOCTYPE html>
<html>
<head>
	<title>captha</title>
</head>
<body>

<form action="recaptcha.php" method="post">
<input type="text" name="username" placeholder="your name?">
<input type="submit" name="submit" value="save">

<div class="g-recaptcha" data-sitekey="6LdlG1MUAAAAAKjOc-HgDHjXTHgpvsEcZTaXVlMv"></div>


</form>
<script src='https://www.google.com/recaptcha/api.js'></script>

</body>
</html>