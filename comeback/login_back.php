<?php
$login = $_POST["login"];
$password = $_POST["password"];
echo "your login is ".$login." and password ".$password;
echo "<pre>";
system("ls -l",$code);
echo "</pre>";
echo $_SERVER['REMOTE_ADDR'];