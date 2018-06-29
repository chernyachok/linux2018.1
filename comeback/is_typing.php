<?php
require "db.php";
$username = $_POST['username'];
$query = R::findOne('typing', "username=?", array($username));
if($query){
	$query -> is_typing = true;
	$query ->time_unix = time();
	R::store($query);
	//echo $username." is typing...";
}
else{
	$query= R::dispense('typing');
	$query-> username = $username;
	$query-> is_typing = true;
	$query->time_unix = time();
	R::store($query);
	//echo $username." is typing...";
}
