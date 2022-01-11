<!DOCTYPE html>
<html lang="fr-FR">

<head>
	<title>Créer votre compte</title>
	<meta charset="utf-8" />
	<link rel="shortcut icon" type="image/x-icon" href="image/icon.jpg" />
	<link rel="stylesheet" href="css/compt.css" />
	<meta name="description" content="Inscription">
</head>

<body>
	<div class="contact-form">
		<img src="image/logo.png" alt="logo" class="avatar">
		<h2>Créer votre compte</h2>
		<h3>Accèder à naDan</h3>
		<form method="post" action="enregistrement.php">
			<div class="contact-for">
				<input type="text" name="prenom" placeholder="Prénom" required="required">
				<input type="text" name="nom" placeholder="Nom" required="required">
				<input type="text" name="login" placeholder="Nom d'utilisateur" required="required">
			</div>
			<input type="email" name="email" placeholder="E-mail" required="required">
			<div class="contact-fo">
				<span class="mot">
					<input type="password" name="password" id="motdepasse" placeholder="Mot de passe" required="required">
					<span class="confirmer">
						<input type="password" name="password" id="motdepass" placeholder="Confirmer" required="required">
					</span>
				</span>
			</div>
			<input type="checkbox" onclick="Afficher(),Affiche()">
			<label style="color: white;">Afficher le mot de passe</label>
			<input type="submit" value="Créer votre compte">
			<p class="creer"><strong><a href="index.php">Connectez-vous</a></strong></p>
		</form>
	</div>
</body>

</html>

<script type="text/javascript">
	function Afficher() {
		var input = document.getElementById("motdepasse");
		if (input.type === "password") {
			input.type = "text";
		} else {
			input.type = "password";
		}
	}

	function Affiche() {
		var input = document.getElementById("motdepass");
		if (input.type == "password") {
			input.type = "text";
		} else {
			input.type = "password";
		}
	}
</script>