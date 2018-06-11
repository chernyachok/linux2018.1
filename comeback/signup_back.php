<?php
//echo "fuk";

require "db.php";

//$conn =  R::setup( 'mysql:host=localhost;dbname=messenger',
  //      'root', '123' ); //for both mysql o
$data = $_POST;
if(isset($data)){
	$errors = array();
	if(trim($data['login']) =="")
		$errors[] = "Enter a login";

	if(trim($data['email']) =="")
		$errors[] = "Enter an email";
	
	if($data['password_1'] =="")
		$errors[] = "Enter a password";
	if($data['password_2'] != $data['password_1'])
		$errors[] = "passwords dont match";

	if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL))
	$errors[] = "Enter correct email";

	if(R::count('users','login = ?',array($data['login']) ) >0){
		$errors[] = "Such login exist";
	}
	if(R::count('users','email = ?',array($data['email']) ) >0){
		$errors[] = "Such email exist";
	}
	
	if(empty($errors)){
		$user = R::dispense('users');
		$user->login = $data['login'];
		$user->email = $data['email'];
		$user->password = password_hash($data['password_2'],PASSWORD_DEFAULT);
		R::store($user);
		$user = R::dispense('avatars');
		$user->login=$data['login'];
		$user->time= time();
		$user->image="image699.png";
		R::store($user);
		echo 1;
	}
		else{
	echo array_shift($errors);
	}
}
?>