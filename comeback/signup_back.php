<?php
//echo "fuk";

require "libs/rb.php";

$conn =  R::setup( 'mysql:host=localhost;dbname=messenger',
        'root', '123' ); //for both mysql o

	if(!R::testConnection()){
		echo "failed connection";
	}
$data = $_POST;
if(isset($data)){
	$errors = array();
	if(trim($data['login']) =="")
		$errors[] = "fill a login";

	if(trim($data['email']) =="")
		$errors[] = "fill an email";
	
	if($data['password_1'] =="")
		$errors[] = "fill a password";
	if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL))
		$errors[] = "email incorrect";
	if($data['password_2'] != $data['password_1'])
		$errors[] = "2 password does not match";
	if(R::count('users','login = ?',array($data['login']) ) >0){
		$errors[] = "such login exist";
	}
	if(R::count('users','email = ?',array($data['email']) ) >0){
		$errors[] = "such email exist";
	}
	
	if(empty($errors)){
		$user = R::dispense('users');
		$user->login = $data['login'];
		$user->email = $data['email'];
		$user->password = password_hash($data['password_2'],PASSWORD_DEFAULT);
		R::store($user);
		echo 1;
	}
		else{
	echo array_shift($errors);
	}
}
?>