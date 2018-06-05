<?php
require "db.php";
require_once "profile2.php";
?>
<?php
if(isset($_SESSION['logged_user'])){
echo "Hi, ".$_SESSION['logged_user']-> login."<br>";
?>
<form enctype="multipart/form-data" method="post" action="index.php">
	<p>Download or update</p>
		<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />

	<input type="file" name="inputfile" id="inputfile"><br><br>
	<input type="submit" name="do_submit">
</form>
<?php
$query = R::findOne('avatars', 'login=?', array($_SESSION['logged_user']->login));
//echo "<pre>";
//var_dump($query);
echo "<img src='imgs/".$query->image."' alt='Trulli' width='500' height='333'>";
echo "<br>";
echo "<a href='logout.php'> Вийти</a>";
echo "<hr>";
}
else {
	echo "<p>Ви не авторизовані!</p>
	<a href='login.php'>Autorisation</a><br>
	<a href='signup.php'>Sign up</a>";
}