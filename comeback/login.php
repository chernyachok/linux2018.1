<?php 
require "db.php";
$data = $_POST;
if(isset($data['do_submit']) ){
	$user = R::findOne('users', 'login = ?', array($data['login']));
	$errors = array();
	if($user)
	{
		if(password_verify($data['password'], $user -> password) )
		{
			//ok
			$_SESSION ['logged_user'] = $user;
			echo '<div style="color: green" ><a href="index.php">'."Ви авторизовані!".'</a></div><hr>';
		}
		else
		{
			$errors[] = "Пароль не правильний";
		}
	}
	else
	{
		$errors[] = "Користувача не знайдено";
	}

	if(!empty($errors))
	{
		echo '<div style="color: red">'.array_shift($errors).'</div><hr>';
	}
	
	
}

 ?>

<!DOCTYPE html>

<html>
<head>
	<title>login</title>
</head>
<body>

<form action="login.php" method="post">
	Login: <input type="text" name="login" value="<?php echo $data['login'] ?>"><br>
	Password: <input type="password" name="password" value="<?php echo $data['password'] ?>">
	<input type="submit" name="do_submit" >
</form>
</body>
</html>