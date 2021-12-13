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
	<title>Регистрация</title>
	<link rel="stylesheet" type="text/css" href="resources/login_style.css">
</head>
<body>
	<form action="signup.php" method="POST" enctype="multipart/form-data">
		<label>E-mail</label>
		<input type="text" name="email" placeholder="Введите e-mail">
		<label>Загрузите фото</label>
		<input type="file" name="profile-photo">
		<label>Придумайте пароль</label>
		<input type="password" name="password" placeholder="Введите пароль">
		<label>Введите пароль ещё раз</label>
		<input type="password" name="password-confirm" placeholder="Введите пароль еще раз">
		<?php
		if ($_SESSION['message']) {
			echo '<p class="msg">' . $_SESSION['message'] . '</p>';
		}
		unset($_SESSION['message']);
		?>
		<button type="submit">Зарегистрироваться</button>
		<p>Уже есть аккаунт? <a href="login.php">Войти</a></p>
	</form>
</body>
</html>