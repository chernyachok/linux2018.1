<?php
require "db.php";
if(isset($_POST)){
	if(!empty($_POST['message'])){
		$query = R::dispense('messages');
		$query->login= $_POST['login'];
		$query->time_unix = time();
		$query->date_of_message = date("F j, g:i a");
		$query->message = $_POST['message'];
		R::store($query);
		echo "successfully sent";
	}
}