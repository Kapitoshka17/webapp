<?php
	session_start();
	require_once('settings.php');
	$email = $_POST["email"];
	$password = $_POST["password"];
	$password_confirm = $_POST["password-confirm"];
	if ($password === $password_confirm)
	{
		$path = 'pic/' . time() . $_FILES['profile-photo']['name'];
		if(!move_uploaded_file($_FILES['profile-photo']['tmp_name'], $path))
		{
		$_SESSION["message"] = 'Ошибка загрузки фото';
		header('Location: registration.php');
		exit();
		}
		$password = md5($password);
		$query = "INSERT INTO `users` (`id`, `email`, `photo`, `password`) VALUES (NULL, '$email', '$path', '$password')";
		mysqli_query($connect, $query);
		$_SESSION["message"] = 'Регистрация успешна';
		header('Location: login.php');
		exit();

	}
	else{
		$_SESSION["message"] = 'Пароли не совпадают';
		header('Location: registration.php');
		exit();
	}
?>