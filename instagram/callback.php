<?php
	if(isset($_GET['error']))
	{
		header('Location: insta_login.php');
		exit();
	}

	//require_once "instaApi.php";
	//$data = $Instagram->getAccessTokenAndUserDetails($_GET['code']);
	 //var_dump($data);

