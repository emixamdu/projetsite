<?php
	require "Modele.php";

	try {
		$annonces = getAnnonces();
		require "vueAccueil.php";
	}
	catch (Exception $e) {
		$msgErreur = $e->getMessage();
		require "vueErreur.php";
	}

