<?php
	require "libs/rb.php";
	$conn =  R::setup( 'mysql:host=localhost;dbname=id5519891_users',
        'id5519891_yurochka', 'tyson2033' ); //for both mysql o

	if(!R::testConnection()){
		echo "failed connection";
	}
	$conn =R::dispense('messenger');
	$conn->username = "jonni";
	$conn-> message= "bla";
	R::store($conn);
	print_r($result);