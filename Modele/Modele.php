<?php

function getAnnonces() {
	$bdd = getBdd();
	$annonces = $bdd->query("SELECT ann_id as id, ann_date as date,
		ann_titre as titre, ann_contenu as contenu FROM t_annonces 
		ORDER BY ann_id DESC");
	return $annonces;
}

function getBdd() {
	$bdd = new PDO("mysql:host=localhost;dbname=louerdutemps;charset=utf8", "root", "",
		array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	return $bdd;
}

function getAnnonce($idAnnonce) {
	$bdd = getBdd();
	$annonce = $bdd->prepare("SELECT ann_id as id, ann_date as date,"
		. " ann_titre as titre, ann_contenu as contenu FROM t_annonces"
		. " WHERE ann_id=?");
	$annonce->execute(array($idAnnonce));
	if($annonce->rowCount() == 1)
		return $annonce->fetch();
	else
		throw new Exception("Aucune annonce ne correspond à l'identifiant '$idAnnonce'");
}

function getOffres($idAnnonce) {
	$bdd = getBdd();
	$offres = $bdd->prepare("SELECT pre_id as id, pre_pseudo as pseudo, pre_prix as prix"
		. " FROM t_prestataire WHERE ann_id=?");
	$offres->execute(array($idAnnonce));
	return $offres;
}
