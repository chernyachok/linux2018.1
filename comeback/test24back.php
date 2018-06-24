<?php
require "db.php";
$query = R::findOne('users',"login=?",array("tttt1"));
echo $query->email;