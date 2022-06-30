<?php
/*
Stampare a schermo una decina di dischi musicali (vedi screenshot).
Utilizzare:
Html, CSS, VueJS, axios, PHP

Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.

Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere lato backend.
*/

include __DIR__ . '/db/data.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="assets/style.css">
</head>
<body><?php
	include __DIR__ . '/partials/header.php'; ?>

	<main>
		<div class="container">
			<div id="discs-container"><?php
				foreach ($arr_discs as $disc) { ?>

					<div class="disc">
						<img src="<?= $disc['poster'] ?>" alt="<?= $disc['title'] ?>">
						<strong><?= $disc['title'] ?></strong>
						<small><?= $disc['author'] ?></small>
						<small><?= $disc['year'] ?></small>
					</div><?php

				} ?>
			</div>
		</div>
	</main>
</body>
</html>