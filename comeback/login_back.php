<?php 
session_start();
//require "libs/rb.php";
 //R::setup( 'mysql:host=localhost;dbname=messenger',
 //       'root', '123' ); //f
require "db.php";
$data = $_POST;
if(isset($data) ){
	$user = R::findOne('users', 'login = ?', array($data['login']));
	$errors = array();
	if($user)
	{
		if(password_verify($data['password'], $user -> password) )
		{
			//ok
			$_SESSION ['logged_user'] = $user;
			echo 1;
		}
		else
		{
			$errors[] = "Incorrect password";
			//var_dump($data);
		}
	}
	else
	{
		$errors[] = "User not found";
	}

	if(!empty($errors))
	{
		echo array_shift($errors);
	}
}
 ?>