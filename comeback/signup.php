<meta http-equiv="Cache-control" content="no-cache">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="-1">
<body style="background-color: #ccc;">
<form action="signup.php" style="text-align: left;">
	<div id="myform">
		<p>
			<p style=""><strong>Ваш логін</strong>:</p>
			<input type="text" name="login" id="login"><span id="test1" style="color: red"></span>
		</p>
		<p>
			<p><strong>Ваш email</strong>:</p>
			<input type="email" name="email" id="email"><span id="test2" style="color: red"></span>
		</p>
		<p>
			<p><strong>Ваш пароль</strong>:</p>
			<input type="password" name="password_1" id="password_1" ><span id="test3" style="color: red"></span>
		</p>
		<p>
			<p><strong>Ваш пароль ще раз</strong>:</p>
			<input type="password" name="password_2" id="password_2"><span id="test4" style="color: red"></span>
		</p>
		<p>
			<input value="sign up" type="button" name="do_signup" id="do_signup" >
		</p>
	</div>
</form>
<div id="result"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>