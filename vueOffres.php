<?php $titre = "Louer du temps - Annonce n°".$annonce["id"]; ?>
<?php ob_start(); ?>
<article>
	<header>
		<h1 class="titreAnnonce"><?= $annonce["titre"] ?></h1>
		<time><?= $annonce["date"] ?></time>
	</header>
	<p><?= $annonce["contenu"] ?></p>
</article>
<hr />
<header>
	<h1 id="titreOffres">Offres déposées :</h1>
</header>
<?php foreach($offres as $offre): ?>
	<p><?= $offre["pseudo"] ?> propose un tarif de <?= $offre["prix"] ?> euros de l'heure.</p>
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>

<?php require "gabarit.php"; ?>