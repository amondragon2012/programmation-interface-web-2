<!DOCTYPE html>
<html lang="fr_CA">
<head>
    <!-- meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cours 16 | Appel AJAX jQuery - LOAD | jQuery et jQuery UI</title>
	<meta name="description" content="Cours 16 du cours 582-31F-MA Programmation d'interface Web 2 : Librairie externe jQuery et jQuery UI">

	<!-- styles -->
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
    
	<!-- scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./main.js"></script>
</head>

<body>
	<header>
		<h1>Cours 16 - Appel AJAX jQuery - LOAD</h1>
	</header>

	<main>

		<form>
			<h3>Choisissez l'équipe :</h3>

			<select data-js-team>
				<option value="0">Veuillez sélectionner une équipe</option>
				<?php
					// Générer les options dynamiquement
					require_once('fonctionsDB.php');

					// Récupération des résultats sous forme de tableau associatif
					$equipes = GetAllEquipes();
					while($equipe = mysqli_fetch_assoc($equipes)) {
						echo '<option value="' . $equipe['id'] . '">' . $equipe['nom'] . ' de ' . $equipe['quartier'] . '</option>';
					}
				?>
			</select>	

		</form>
		
		<div data-js-result></div>

	</main>
</body>
</html>