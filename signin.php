<?php
	session_start();
	require_once('settings.php');
	$email = $_POST["email"];
	$password = md5($_POST["password"]);
	$get_access = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
	echo mysqli_num_rows($get_access);
	if (mysqli_num_rows($get_access) > 0) {
		$user = mysqli_fetch_assoc($get_access);
		$_SESSION['user'] = [
			"id" => $user['id'],
			"email" => $user['email'],
			"photo" => $user['photo']
		];
		header('Location: ../main.php');
		exit();
	}
	else{
		$_SESSION["message"] = 'Неверный логин или пароль';
		header('Location: login.php');
		exit();
	}
?>