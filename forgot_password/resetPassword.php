<?php
	if(!isset($_GET['email']) && !isset($_GET['token'])){
		header("Location: login.php");
		die();
	}
	else{
		require "libs/rb.php";
		$connection =  R::setup( 'mysql:host=localhost;dbname=forgotpassword',
        'root', '123' );
        $email = $_GET['email'];
        $token = $_GET['token'];
        $data  = R::getAll("SELECT id FROM users WHERE email= '$email' AND token = '$token'");
        if($data >0){
        	$str = "12345678efkgirgdser";
        	$str = str_shuffle($str);
        	$str = substr($str, 0,10);
        	$password = sha1($str);

        	$new_pass = R::findOne('users','email=?',array($email));
		  	$new_pass -> password = $password;
		  	R::store($new_pass);
        	
        }else
        	echo "please check your link";
	}


?>