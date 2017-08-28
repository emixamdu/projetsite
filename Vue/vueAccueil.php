<?php $titre = "Louer du temps"; ?>
<?php ob_start(); ?>
<?php foreach($annonces as $annonce): ?>
	<article>
		<header>
			<a href="<?= 'index.php?action=annonce&id=' . $annonce['id'] ?>">
				<h1 class="titreAnnonce"><?= $annonce["titre"] ?></h1>
			</a>
			<time><?= $annonce["date"] ?></time>			
		</header>
		<p><?= $annonce["contenu"]?></p>
	</article>
	<hr/>

<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>
<?php require "Vue/gabarit.php"; ?>