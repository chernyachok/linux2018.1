<?php
require "db.php";
?>
<?php
if(isset($_SESSION['logged_user'])):

?>
Авторизований
<br>
Привіт, <?php echo $_SESSION['logged_user']-> login ?><hr>
<a href="logout.php"> Вийти</a>
<?php  else : ?>
<p>Ви не авторизовані!</p>
<a href="login.php">Autorisation</a><br>
<a href="signup.php">Sign up</a>
<?php endif; ?>