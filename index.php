<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<title>Connectez-vous</title>
	<meta charset="utf-8"/>
	<link rel="shortcut icon" type="image/x-icon" href="image/icon.jpg" />
	<link rel="stylesheet" href="css/inde.css"/>
	<meta name="description" content="Connexion">
	<script src="https://kit.fontawesome.com/3597400b38.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="contact-form">
		<img src="image/logo.png" alt="logo" class="avatar">
		<h2>Connectez-vous</h2>
		<form method="post" action="authentification.php">
			<p><input type="text" name="username" placeholder="Nom d'utilisateur" required="required"></p>
			<p><input type="password" name="password" placeholder="Mot de passe" required="required">
				<div class="icon">
					<i class="far fa-eye"></i>
					<i class="far fa-eye-slash"></i>
				</div>
			</p>
			<input type="submit" value="Connexion">
			<p class="creer"><strong><a href="compte.php">Créer un compte</a></strong></p>
		</form>
	</div>


	<script type="text/javascript">
		const eye=document.querySelector('.fa-eye');
		const eyeslash=document.querySelector('.fa-eye-slash');
		const ChampPassword=document.querySelector('input[type=password]')

		eye.addEventListener('click', () => {
			eye.style.display="none";
			eyeslash.style.display="block";
			ChampPassword.type="text";
		});

		eyeslash.addEventListener('click', () => {
			eyeslash.style.display="none";
			eye.style.display="block";
			ChampPassword.type="password";
		});

	</script>

</body>
</html>