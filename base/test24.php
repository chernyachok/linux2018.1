<?php

$m = new Memcached();
$m->addServer('localhost', 11211);

/*if($m->add("key2", "val22")){
	echo "dobavleno ".$m->get("key1");
}
	else echo $m->getResultMessage();
*/
	$m->delete("key1");
	$m->delete("key2");