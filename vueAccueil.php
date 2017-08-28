<?php $titre = "Louer du temps"; ?>
<?php ob_start(); ?>
<?php foreach($annonces as $annonce): ?>
	<article>
		<header>
			<h1 class="titreAnnonce"><?= $annonce["titre"] ?></h1>
			<time><?= $annonce["date"] ?></time>			
		</header>
		<p><?= $annonce["contenu"]?></p>
	</article>
	<hr/>

<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>
<?php require "gabarit.php"; ?>