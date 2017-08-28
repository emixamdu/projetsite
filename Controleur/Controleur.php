<?php
require "Modele/Modele.php";

function accueil() {
	$annonces = getAnnonces();
	require "Vue/vueAccueil.php";
}

function annonce($idAnnonce) {
	$annonce = getAnnonce($idAnnonce);
	$offres = getOffres($idAnnonce);
	require "Vue/vueOffres.php";
}

function erreur($msgErreur) {
	require "Vue/vueErreur.php";
}