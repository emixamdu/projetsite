<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="style.css"/>
		<title><?= $titre ?></title>
	</head>
	<body>
		<div id="global">
			<header id="mainHeader">
				<a href="index.php"><h1 id="titreSite">Louer du temps</h1></a>
				<h3 id="slogan">Le premier site de location de temps</h3>
				<a href="login.php">Connexion</a>
				<a href="signup.php">Inscription</a>
			</header>
			<div id="contenu">
				<?= $contenu ?>
			</div>
			<footer id="footer">
				Un site réalisé par Maxime Dussubieux
			</footer>
		</div>
	</body>
</html>