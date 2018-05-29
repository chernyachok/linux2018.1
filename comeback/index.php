<?php
require "db.php";
?>
<?php
if(isset($_SESSION['logged_user'])){
echo "Hi, ".$_SESSION['logged_user']-> login."<br>";
require "profile.php";
echo "<a href='logout.php'> Вийти</a>";
echo "<hr>";
}
else {
	echo "<p>Ви не авторизовані!</p>
	<a href='login.php'>Autorisation</a><br>
	<a href='signup.php'>Sign up</a>";
}