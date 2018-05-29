<?php
$myObj = array("1"=>23,"4"=>43);

$myJSON = serialize($myObj);

echo $myJSON;

echo $_SERVER['PHP_SELF']."<br>";
echo __FILE__."<br>";
echo $_SERVER['SCRIPT_NAME']."<br><pre>";
echo getcwd();
echo __DIR__;

//print_r (scandir("/home/yurochka/Pictures"));
foreach(scandir(__DIR__) as $dir){

	
	echo "<a href = '/".basename(__DIR__).'/'.$dir."'>".$dir."</a><br>";
}