<?php
require_once("connexion.php");

function securisation($donnees)
{
	$donnees = strip_tags($donnees);
	$donnees = trim($donnees);
	$donnees = stripslashes($donnees);
	return $donnees;
}

$login = securisation($_POST['username']);
$pass = md5(securisation($_POST['password']));

$ps = $pdo->prepare("SELECT * FROM users WHERE login=? AND password=?");
$params = array($login, $pass);
$ps->execute($params);
if ($user = $ps->fetch()) {
	session_start();
	$_SESSION['PROFILE'] = $user;
	header("location:accueil.php");
} else {
	header("location:index.php");
}
