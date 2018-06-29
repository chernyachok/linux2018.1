<?php
require_once "db.php";
$currentUser = $_SESSION['logged_user']->login;
$limit = 5;
	$count = 1;
	$query = R::findAll("messages"," ORDER BY `id` DESC LIMIT ?", array($limit));
	$typing = R::findOne("typing", "time_unix>?",array(time()-(5)));
	foreach($query as $messages){
		if($typing && $typing->username != $currentUser){
			echo "<label id='is_typing'>".$typing->username." is typing...<br></label><label id='position".$count."'>".$messages->date_of_message." <u>".$messages->login."</u> wrote: <i>".$messages->message."</i></label><br>";
			$typing = null;
		}
		else{
			echo "<label id='position".$count."'>".$messages->date_of_message." <u>".$messages->login."</u> wrote: <i>".$messages->message."</i></label><br>";
		}
	$count++;
	}
?>
<script type="text/javascript">
		setTimeout(function(){
			$("#is_typing").html('');
		},3000);

</script>