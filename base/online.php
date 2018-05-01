<?php
require "libs/rb.php";
    R::setup( 'mysql:host=localhost;dbname=onlinetest',
        'root', '123' ); //for both mysql or mariaDB
    $ip = $_SERVER['REMOTE_ADDR'];
    $online = R::findOne('online', 'ip = ?', array($ip));

    if ($online) {

    	# code...
    	//$online->lastvisit = time();
    	//R::store($online);
    }
    else{
    	$online = R::dispense('online');
    	$online-> lastvisit = time();
    	$online-> ip = $ip;
    	R::store($online);
    }
    $online_count = R::count('online', 'lastvisit >'.(time()- (3600) ));


?>
<!DOCTYPE html>
<html>
<head>
	<title>online count</title>
</head>
<body>
Online: <?php echo $online_count ?>
</body>
</html>