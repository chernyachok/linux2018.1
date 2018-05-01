<?php
require "libs/rb.php";
R::setup( 'mysql:host=localhost;dbname=redbean','root', '123' ); 
$player = R::dispense('player');
echo count($player->ownItemList);

/*$player->nickname = "yura_bomber2033";

$item = R::dispense('item');

$item->model = "ak47";
$item->type = "pistol";
$item->quatity = 1;

$player->ownItemList[] = $item;

R::store($player);
echo "count: ".$player->countOwn('item');



$player = R::load('player',1);
echo "Player ".$player->nickname."<br>";
echo "weapons: <br>";
foreach($player->ownItemList as $item)
{
	echo $item->model."(x".$item->quatity.")<br>";
	
}
*/

?>