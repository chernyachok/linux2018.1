<?php
require "db.php";
$query = R::findAll("messages",'ORDER BY `id` DESC LIMIT 1');
//echo "<label id='position1'>"."losst"." <u>"."losst"."</u> wrote: <i>"."losst"."</i></label><br>";
echo "ths is outside text";