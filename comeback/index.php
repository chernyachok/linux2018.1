<?php
require "db.php";
//require_once "profile2.php";
$data_img = R::findOne('avatars','login=?',array($_SESSION['logged_user']-> login));
?>
<?php
if(isset($_SESSION['logged_user'])){
require "online.php";
echo "Hi, ".$_SESSION['logged_user']-> login."<br>";
echo "<span style='color:blue;'>Online on server: ".$online_count."</span>"."<br>";
?>
<form enctype="multipart/form-data" method="post" >
	<p>update</p>
	<input type="file" name="inputfile" id="inputfile"><br><br>
</form>
<span id="result"><img src="imgs/<?php  echo $data_img->image ?>" width="225" height="150"></span>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="script21.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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