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