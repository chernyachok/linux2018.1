<?php
require "db.php";

$data = $_POST;
if(isset($data['do_signup'])){
	//register
	$errors = array();
	if(trim($data['login']) =="")
		$errors[] = "Введи логін";

	if(trim($data['email']) =="")
		$errors[] = "Введи email";
	
	if($data['password_1'] =="")
		$errors[] = "Введи пароль";

	if($data['password_2'] != $data['password_1'])
		$errors[] = "2 пароль невірно";
	if(R::count('users','login = ?',array($data['login']) ) >0){
		$errors[] = "such login exist";
	}
	if(R::count('users','email = ?',array($data['email']) ) >0){
		$errors[] = "such email exist";
	}


	if(empty($errors)){
		//register here
		$user = R::dispense('users');
		$user->login = $data['login'];
		$user->email = $data['email'];
		$user ->password = password_hash($data['password_2'],PASSWORD_DEFAULT);
		R::store($user);
		echo '<div style="color: green">'."Ви зареєстровані".'</div><hr>';


	}
	else{
		echo '<div style="color: red">'.array_shift($errors).'</div><hr>';
	}


}
?>
<form action="signup.php" method="post">
	<p>
		<p><strong>Ваш логін</strong>:</p>
		<input type="text" name="login" value="<?=  $data['login'] ?>">
	</p>
	<p>
		<p><strong>Ваш email</strong>:</p>
		<input type="email" name="email" value="<?=  $data['email'] ?>">
	</p>
	<p>
		<p><strong>Ваш пароль</strong>:</p>
		<input type="password" name="password_1" value="<?=  $data['password_1'] ?>">
	</p>
	<p>
		<p><strong>Ваш пароль ще раз</strong>:</p>
		<input type="password" name="password_2" value="<?=  $data['password_2'] ?>">
	</p>
	<p>
		<button type="submit" name="do_signup">Зареєструватися</button>
	</p>

</form>