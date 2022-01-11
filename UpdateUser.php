<?php 
	require_once("security.php");
 ?>

<?php
	$code= $_SESSION['PROFILE']['login']['password'];
	$login=$_POST['login'];
	$password=$_POST['password'];
	
	require_once("connexion.php");

	$ps=$pdo->prepare("UPDATE users SET login=?, password=? WHERE login=? AND password=? ");
	$params = array($login,$password,$_SESSION['PROFILE']['login'], $_SESSION['PROFILE']['password']);
	$ps->execute($params);

	$_SESSION['PROFILE']['login'] = $login;
    $_SESSION['PROFILE']['password'] = $password;

	header("location:editer.php");
?>