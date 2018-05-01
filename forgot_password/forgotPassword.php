<?php
	require "libs/rb.php";
	if(isset($_POST['do_submit'])){
		  $connection = R::setup( 'mysql:host=127.0.0.1;dbname=forgotpassword', 'root', '123' );
		  if(!R::testConnection()){
		  		echo "failed connection to data";
		  }

		  $current_email = $_POST['email'];

		  if(R::count('users','email= ?', array($current_email)) >0){
		  		$str = "38492084fekrgtioclxjalovmd";
		  		$str = str_shuffle($str);
		  		$str = substr($str, 0,10);
		  		$url = "resetPassword.php?token=$str&email=$current_email";
		  		mail($current_email,"reset pas","visit this: $url","from: mail@mail.com\r\n");
		  		
		  		$new_pass = R::findOne('users', 'email=?',array($current_email));
		  		$new_pass -> token = $str;
		  		R::store($new_pass);
		  		
		  }else
		  		echo "no such email available";

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>forgot</title>
</head>
<body>
	<form action="<?php basename($_SERVER['SCRIPT_NAME']) ;?>" method="post">
		<input type="text" name="email" placeholder="Email"><br>
		<input type="submit" name="do_submit" value="request password">	
	</form>
</body>
</html>