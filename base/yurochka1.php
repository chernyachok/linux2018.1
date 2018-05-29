<?php
require "rb.php";
 $s = R::setup( 'mysql:host=localhost;dbname=id5519891_users',
        'id5519891_yurochka', 'tyson2033' ); //for both mys
$data = R::findOne('users', 'login = ?', array("platon"));
echo $data -> password;