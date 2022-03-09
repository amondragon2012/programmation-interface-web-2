<!DOCTYPE html>
<html lang="fr_CA">
<head>
    <!-- meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cours 9 | Delete Database (POST) | API XMLHttpRequest</title>
	<meta name="description" content="Cours 9 du cours 582-31F-MA Programmation d'interface Web 2 : API XMLHttpRequest">

	<!-- styles -->
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
    
	<!-- scripts -->
    <script src="./main.js" defer></script>
</head>

<body>
	<header>
		<h1>Cours 9 - Appel AJAX - Delete Database (POST)</h1>
	</header>

	<main>

		<form>
		<?php
			// Générer les équipes dynamiquement
			require_once('FonctionsDB.php');
			$equipes = GetAllEquipes();

			// Récupération des résultats sous forme de tableau associatif
			while($equipe = mysqli_fetch_assoc($equipes)) {
				echo '	
						<div>
							<span>' . $equipe['nom'] . '</span>
							<button data-js-btn data-js-equipe-id="' . $equipe['id'] . '">Supprimer</button>
						</div>
					';
			}
		?>
		</form>

	</main>
</body>
</html>