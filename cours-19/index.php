<html lang="fr_CA">
<head>
    <!-- meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cours 19 | Révision</title>
	<meta name="description" content="Cours 19 du cours 582-31F-MA Programmation d'interface Web 2 : Révision">

	<!-- styles -->
	<link rel="stylesheet" type="text/css" href="./styles/styles.css">

	<!-- scripts -->
    <script src="./scripts/main.js" type="module" defer></script>
</head>

<body>
	<header data-js-component="Router">
		<h1 data-js-home>Cours 19 - Révision</h1>
		<form>
			<h3>Choisissez l'équipe :</h3>

			<select>
				<option value="0">Veuillez sélectionner une équipe</option>
				<?php
					// Générer les options dynamiquement
					require_once('client-serveur/fonctionsDB.php');
					$equipes = getAllEquipes();

					// Récupération des résultats sous forme de tableau associatif
					while ($equipe = mysqli_fetch_assoc($equipes)) { 
						echo '<option value="' . $equipe['id'] . '">' . $equipe['nom'] . ' de ' . $equipe['quartier'] . '</option>';
					}
				?>
			</select>	
		</form>
	</header>

	<main>

		<template data-js-player-template>
			<li data-js-player="{{id}}">#{{id}} : {{nomFamille}}, {{prenom}}</li>
		</template>
		
		<ul data-js-players></ul>

	</main>
</body>
</html>