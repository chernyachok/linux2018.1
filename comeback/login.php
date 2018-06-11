<?php 

?>
<!DOCTYPE html>

<html>
<head>
	<title>login</title>
</head>
<body style="background-color: #ccc">

<form >
<p>
	<p><b>Login</b></p>
	 <input type="text" name="login" id="login" ><span id="test1" style="color: red"></span>
</p>
<p>
	<p><b>Password</b></p>
	<input type="password" name="password" id="password"><span id="test2" style="color: red"></span>
</p>
	<input type="button" id="do_login" value="Log In"  >
</form>
<div><a href="index.php">Back</a></div>
<div id="test"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="script_login.js"></script>
</body>
</html>