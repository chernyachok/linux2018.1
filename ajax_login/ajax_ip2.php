<?php
	require "libs/rb.php";
	$conn =  R::setup( 'mysql:host=localhost;dbname=onlinetest',
        'root', '123' ); //for both mysql o

	if(!R::testConnection()){
		echo "failed connection";
	}
	$response = R::findOne('asynch','login=?',array($_POST['login']));
	echo "<table><tr>
	<td>Login</td>
	<td>".$response->login."</td>
</tr>
<tr>
	<td>email</td>
	<td>".$response->email."</td>
</tr>
<tr>
	<td>phone</td>
	<td>".$response->phone."</td>
</tr></table>";
