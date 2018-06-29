<?php
require "db.php";
//require_once "profile2.php";
$data_img = R::findOne('avatars','login=?',array($_SESSION['logged_user']-> login));
?>
<?php
if(isset($_SESSION['logged_user'])){
require "online.php";
echo "Hi, <label id ='logged_user'>".$_SESSION['logged_user']-> login."</label><br>";
echo "<span style='color:blue;' >Online on server: <label id='online_count'>".$online_count."</label></span>"."<br>";
?>
<form enctype="multipart/form-data" >
	<p>Update image</p>
	<input type="file" name="inputfile" id="inputfile"><br><br>
</form>
<span id="result"><img src="imgs/<?php  echo $data_img->image ?>" width="225" height="150"></span><br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="script21.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<textarea name="text" id="text" rows="5" cols="25" style="border: solid 2px aqua; box-shadow: 4px 4px 4px #ccc; border-radius: 8px"></textarea><br>
<input type="button" id="do_text" name="do_text" value="send message">
<span  id="first_row" style="display: none"></span>
<span id="message_response"></span><br>
	<div id="rows">
	<?php
		require "show_rows.php";
	?>
	</div>
<br><br>
<script type="text/javascript" src="script_messages.js"></script>
<script type="text/javascript" src="ajax_interval.js"></script>
<script type="text/javascript" src="is_typing.js"></script>
<?php
echo "<br>";
echo "<a href='logout.php'> Вийти</a>";
echo "<hr>";
}
else {
	echo "<p>Ви не авторизовані!</p>
	<a href='login.php'>Autorisation</a><br>
	<a href='signup.php'>Sign up</a>";
}