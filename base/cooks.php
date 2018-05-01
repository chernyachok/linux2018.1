<?php


//setcookie($cookie_name,$cookie_value, time()+1000 );

if(isset($_COOKIE['name']))
{
	$num = $_COOKIE['name'];
}else
{
	$num = 0;
}
$num++;


setcookie("name",$num,time() + 5);
echo "Update $num times";

echo count($_COOKIE);