<?php 
session_start();
require "libs/rb.php";
 R::setup( 'mysql:host=localhost;dbname=messenger',
        'root', '123' ); //f
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
			$errors[] = "Пароль не правильний";
			//var_dump($data);
		}
	}
	else
	{
		$errors[] = "Користувача не знайдено";
	}

	if(!empty($errors))
	{
		echo array_shift($errors);
	}
}
 ?>