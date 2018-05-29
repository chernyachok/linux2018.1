<?php

require "libs/rb.php";
$connection =  R::setup( 'mysql:host=127.0.0.1;dbname=redbean','root', '123' ); //for both mysql or mariaDB

if(!R::testConnection())
{
	echo "test connection unavailable";
}
/*
$user = R::dispense('user');
$user->name = "	Mark";
$user->country = "Korea";
$user->age= "33";
$success = R::store($user);


if($success)
{
	echo "added successfully<br>";
}

function dump($what){
	echo "<pre>";
	print_r($what);
	echo "</pre>";

}
*/
echo "<pre>";
$ide =5;
$result = R::getAll("SELECT * FROM user WHERE id = ?",array(1));
print_r($result);
/*foreach($result as $v)
{
	echo $v['name'];
}