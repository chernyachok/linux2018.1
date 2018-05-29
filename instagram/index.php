<?php
foreach(scandir(__DIR__) as $dir){

	
	echo "<a href = '".$dir."'>".$dir."</a><br>";
}