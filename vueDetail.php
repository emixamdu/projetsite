<?php $titre = "Louer du temps - Annonce n°".$annonce["id"]; ?>
<?php ob_start(); ?>
<article>
	<heater>
		<h1 class="titreAnnonce"><?= $annonce["titre"] ?></h1>
		<time><?= $annonce["date"]