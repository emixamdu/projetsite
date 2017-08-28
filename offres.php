<?php
require "Modele.php";

try {
	if(isset($_GET["id"])) {
		$id = intval($_GET["id"]);
		if($id != 0) {
			$annonce = getAnnonce($id);
			$offres = getOffres($id);
			require "vueOffres.php";
		}
		else
			throw new Exception("Identifiant d'annonce incorrect");
	}
	else
		throw new Exception("Aucun identifiant d'annonce");
}
catch (Exception $e) {
	$msgErreur = $e->getMessage();
	require "vueErreur.php";
}