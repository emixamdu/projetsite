<?php
require "Controleur/Controleur.php";

try {
	if (isset($_GET["action"])) {
		if ($_GET["action"] == "annonce") {
			if (isset($_GET["id"])) {
				$idAnnonce = intval($_GET["id"]);
				if ($idAnnonce != 0) 
					annonce($idAnnonce);
				else
					throw new Exception("Identifiant d'annonce non valide");
			}
			else 
				throw new Exception("Identifiant d'annonce non défini");
		}
		else
			throw new Exception("Action non valide");
	}
	else {
		accueil();
}
}
catch (Exception $e) {
	erreur($e->getMessage());
}
