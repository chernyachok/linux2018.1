<?php
//hi
$ip = "92.180.12.45";

$file = file_get_contents('http://ip6.me/');

/* Trim IP based on HTML formatting
$pos = strpos( $file, '+3' ) + 3;
$ip = substr( $file, $pos, strlen( $file ) );

// Trim IP based on HTML formatting
$pos = strpos( $ip, '</' );
$ip = substr( $ip, 0, $pos );

// Output the IP address of your box
echo "My IP address is $ip";

// Debug only -- all lines following can be removed
echo "\r\n<br/>\r\n<br/>Full results from ip6.me:\r\n<br/>";
echo $file;
*/
echo $file;

require "sypexgeo/SxGeo.php";
$geo = new SxGeo('sypexgeo/SxGeoCity.dat');
echo "<pre>";
print_r($geo->getCity($ip));

unset($geo);


