<?php
	session_start();
	if($_SESSION['user'])
		header('Location: profile.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="pic/icon.png" type="image/x-icon" />
	<meta charset="utf-8">
	<title>Авторизация</title>
	<link rel="stylesheet" type="text/css" href="resources/login_style.css">
</head>
<body>
	<form action="signin.php" method="POST">
		<label>Логин</label>
		<input type="text" name="email" placeholder="Введите логин">
		<label>Пароль</label>
		<input type="password" name="password" placeholder="Введите пароль">
		<?php
		if ($_SESSION['message']) {
			echo '<p class="msg">' . $_SESSION['message'] . '</p>';
		}
		unset($_SESSION['message']);
		?>
		<button type="submit">Войти</button>
		<p>Нет аккаунта? <a href="registration.php">Зарегистрируйтесь</a></p>
	</form>
</body>
</html>