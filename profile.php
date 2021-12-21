<?php
	session_start();
	if(!$_SESSION['user'])
		header('Location: login.php');
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
	<form>
		<img src="<?= $_SESSION['user']['photo'] ?>" width="100" height="100" alt="">
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
		<button><a href="main.php">На главную</a></button>
</br>
		<button><a href="logout.php">Выход</a></button>
	</form>
</body>
</html>