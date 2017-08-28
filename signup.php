<?php

$pseudo = $_POST["pseudo"];
$email = $_POST["email"];
$pass = $_POST["mdp"]

$pass_hache = sha1($pass);


$bdd = new PDO("mysql:host=localhost;dbname=projet", "root","");
$req = $bdd->prepare("INSERT INTO t_client(client_nom, client_email, client_mdp) VALUES (:pseudo, :email, :pass_hache)");
$req->execute(array(
	":pseudo" => $pseudo,
	":email" => $email,
	":pass_hache" => $pass_hache
));
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="style.css"/>
	<title>Louer du temps - Inscription</title>
</head>
<body>
	<div>
		<form action="" method="post">
			Pseudo : <input type="text" name="pseudo" required/>
			Adresse email : <input type="email" name="email" required/>
			Mot de passe : <input type="password" name="mdp" required/>
			Confirmation mot de passe : <input type="password" name="confmdp" required/>
			<input type="submit" value="Je m'inscris !"/>
		</form>
	</div>
</body>
</html>
