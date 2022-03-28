<!DOCTYPE html>
<html lang="fr_CA">
<head>
    <!-- meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cours 16 | Appel AJAX jQuery - POST | jQuery et jQuery UI</title>
	<meta name="description" content="Cours 16 du cours 582-31F-MA Programmation d'interface Web 2 : Librairie externe jQuery et jQuery UI">

	<!-- styles -->
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
    
	<!-- scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./main.js"></script>
</head>

<body>
	<header>
		<h1>Cours 16 - Appel AJAX jQuery - POST</h1>
	</header>

	<main>

		<h3>Ajouter un usager (POST)</h3>

		<div data-js-form-wrapper>
			<form data-js-form>

				<div>
					<label for="username">Nom d'usager :</label>
					<input type="text" name="username" id="username" data-js-username/>
				</div>

				<div>
					<label for="password">Mot de passe : </label>
					<input type="text" name="password" id="password" data-js-password/>
				</div>
				
				<div>
					<label for="lastname">Nom :</label>
					<input type="text" name="lastname" id="lastname" data-js-last-name/>
				</div>
				
				<div>
					<label for="firstname">Prénom: </label>
					<input type="text" name="firstname" id="firstname" data-js-first-name/>
				</div>
				
				<div>
					<button data-js-btn>Créer</button>
				</div>

			</form>
		</div>

	</main>
</body>
</html>