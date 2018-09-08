<?php
 require "libs/rb.php";
R::setup( 'mysql:host=localhost; dbname=id5519891_users',
      'id5519891_yurochka', '' ); //for both mysql or mariaDB
   //R::setup( 'mysql:host=localhost; dbname=messenger',
//    'root', '123' );
	if(!R::testConnection()){
		echo "failed connection";
	}
  session_start();
