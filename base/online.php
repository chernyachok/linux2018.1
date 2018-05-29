<?php
require "libs/rb.php";
    R::setup( 'mysql:host=localhost;dbname=id5519891_users',
        'id5519891_yurochka', 'tyson2033' ); //for both mysql or mariaDB//onlinetest
    $ip = $_SERVER['REMOTE_ADDR'];
    $online = R::findOne('online', 'ip = ?', array($ip));

    if ($online) {

    	# code...
    	$online->lastvisit = time();
        $online->timeip = date('Y-m-d H:i:s');
    	R::store($online);
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