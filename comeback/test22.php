<?php
require "db.php";
if(isset($_GET)){//empty
	if(!empty($_GET['text'])){
		$query = R::dispense('test22');
		$query->login = "rosta";
		$query->text = $_GET['text'];
		$query->time_unix= time();
		$query->time_comment =  date("F j, g:i a");
		R::store($query);
	}
}
$comment = R::find('test22', "ORDER BY `id` DESC LIMIT 5");
foreach($comment as $comment_display){
		echo "On ".$comment_display->time_comment." <u>".$comment_display->login."</u> wrote: \"<i>".$comment_display->text."</i>\"<br>";
	}
?>
<form method="get" action="<?php echo basename($_SERVER['SCRIPT_NAME']) ?>">
	<textarea name="text" rows="5" cols="25" style="border: solid 2px aqua; box-shadow: 4px 4px 4px #ccc; border-radius: 8px"></textarea>
	<input type="submit" name="do_submit">
</form>
