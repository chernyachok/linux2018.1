<?php
//require 'db.php';
    $ip = $_SERVER['REMOTE_ADDR'];
    $online = R::findOne('online', 'ip = ?', array($ip));

    if ($online) {

    	$online-> lastvisit = date('Y-m-d H:i:s');
    	$online-> time_unix = time();
    	R::store($online);
    }
    else{
    	$online = R::dispense('online');
    	$online-> ip = $ip;
    	$online-> lastvisit = date('Y-m-d H:i:s');
    	$online-> time_unix = time();
    	R::store($online);
    }
    $online_count = R::count('online', 'time_unix >'.(time()- (3600) ));


?>
