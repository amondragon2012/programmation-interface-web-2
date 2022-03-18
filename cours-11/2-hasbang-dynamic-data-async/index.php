<html lang="fr_CA">
<head>
    <!-- meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cours 11 | hashbang (#!) | Route et routeur</title>
	<meta name="description" content="Cours 11 du cours 582-31F-MA Programmation d'interface Web 2 : Route et routeur">

	<!-- styles -->
	<link rel="stylesheet" type="text/css" href="../styles/styles.css">

    <!-- scripts -->
    <script type="module" src="./main.js" defer></script>
</head>

<body data-js-component="Router">
	<header>
		<h1>Cours 11 - hashbang (#!), data dynamique</h1>
	</header>

	<main>
        <div>

            <select data-js-teams>
                <option value="0">Veuillez sélectionner une équipe</option>
                <?php
                    // Générer les options dynamiquement
                    require_once('fonctionsDB.php');
                    $equipes = GetAllEquipes();

                    // Récupération des résultats sous forme de tableau associatif
                    while ($equipe = mysqli_fetch_assoc($equipes)) { 
                        echo '<option value="' . $equipe['id'] . '">' . $equipe['nom'] . ' de ' . $equipe['quartier'] . '</option>';
                    }
                ?>
            </select>	

            <div data-js-team-players></div>

        <div>
	</main>
</body>
</html>