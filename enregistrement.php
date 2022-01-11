<?php
	require_once("connexion.php ");

	function securisation($donnees){
	 	$donnees=strip_tags($donnees);
	 	$donnees=trim($donnees);
	 	$donnees=stripslashes($donnees);
		return $donnees;
	}

	$prenom=securisation($_POST['prenom']);
	$nom=securisation($_POST['nom']);
	$login=securisation($_POST['login']);
	$password=md5(securisation($_POST['password']));

	$ps=$pdo->prepare("INSERT INTO users(prenom,nom,login,password) VALUES(?,?,?,?)");
	$params = array($prenom,$nom,$login,$password);
	$ps->execute($params);


	$log=$_POST['login'];
	$pass=md5($_POST['password']);
	$pAs=$pdo->prepare("SELECT * FROM users WHERE login=? AND password=?");
	$parametres = array($log,$pass);
	$pAs->execute($parametres);
	if($user=$pAs->fetch()){
		session_start();
		$_SESSION['PROFILE']=$user;
		header("location:index.php");
	}
	else{
		header("location:compte.php");
	}
	
?>