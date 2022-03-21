<html lang="fr_CA">
<head>
    <!-- meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cours 13 | Exercice</title>
	<meta name="description" content="Exercice cours 13 du cours 582-31F-MA Programmation d'interface Web 2 : Route et routeur">

    <script>
		let elBase = document.createElement('base'),
			href;

		// https://developer.yoast.com/blog/relative-urls-issues/
		// https://developer.mozilla.org/fr/docs/Web/HTML/Element/base
		if (location.hostname == 'localhost') {
            href = `${location.protocol}//${location.host}${location.pathname.substring(0, location.pathname.lastIndexOf('exercice/')) + 'exercice/'}`
        } else {
            href = `${location.protocol}//${location.host}${location.pathname}`;
        }

		elBase.setAttribute('href', href);
		document.head.appendChild(elBase);
	</script>    

	<!-- styles -->
	<link rel="stylesheet" type="text/css" href="./styles/styles.css">

    <!-- scripts -->
    <script type="module" src="./scripts/main.js" defer></script>
</head>

<body>
	<header>
		<h1>Exercice cours 13</h1>
	</header>

	<main>
 
        <section>

            <select data-js-team>
                <option value="0">Veuillez sélectionner un membre</option>
                <?php
                    // Générer les options dynamiquement
                    require_once('client-serveur/fonctionsDB.php');
                    $members = getAllMembers();

                    // Récupération des résultats sous forme de tableau associatif
                    while ($member = mysqli_fetch_assoc($members)) { 
                        echo '<option value="' . $member['id'] . '">' . $member['nom'] . ', ' . $member['prenom'] . '</option>';
                    }
                ?>
            </select>	

            <div data-js-member-infos></div>

        <section>
	</main>
</body>
</html>