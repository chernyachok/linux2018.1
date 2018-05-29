<?php
	require "libs/rb.php";
	$conn =  R::setup( 'mysql:host=localhost;dbname=onlinetest',
        'root', '123' ); //for both mysql o

	if(!R::testConnection()){
		echo "failed connection";
	}

$login =trim($_POST['login']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);

$errors = array();
if($login ==""){
	$errors[]= "fill a login";
}
if($email==""){
	$errors[] = "fill amail";
}
if($phone== ""){
	$errors[] = "fill phone";
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$errors[] ="uncorrect email";
}
if(empty($errors)){

	$send_info  = R::dispense('asynch');
	$send_info->login = $login;
	$send_info->email = $email;
	$send_info->phone = $phone;
	R::store($send_info);

	echo "1";
}
else
	echo array_shift($errors);

