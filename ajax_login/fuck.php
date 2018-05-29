<?php
require "libs/rb.php";
	$conn =  R::setup( 'mysql:host=localhost;dbname=onlinetest',
        'root', '123' ); //for both mysql o

	if(!R::testConnection()){
		echo "failed connection";
	}
$res = R::getAll("SELECT * FROM `writers`");
foreach($res as $wr){
	echo "<table><tr><td>".$wr['author']."</td><td>".$wr['year']."</td><td>".$wr['country']."</td></tr></table>";
}