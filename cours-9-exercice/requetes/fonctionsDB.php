<?php
	$connexion = connectDB();
	
	function connectDB() {
		define('DB_HOST', 'localhost');
		define('DB_USER', 'root');
		define('DB_PASSWORD', 'root');			// MAC
		//define('DB_PASSWORD', '');			// Windows
	
		$laConnexion = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
				
		if (!$laConnexion) {
			// La connexion n'a pas fonctionné
			die('Erreur de connexion à la base de données. ' . mysqli_connect_error());
		}
		
		$selected = mysqli_select_db($laConnexion, 'ligue-ajax');			// Sélectionne la base de données par défaut pour les requêtes à la base de données.

		if (!$selected) {
			die('La base de données n\'existe pas.');
		}

		mysqli_query($laConnexion, 'SET NAMES "utf8"');						// Définir l'unicode des caractère pour les requête à venir.				
		return $laConnexion;
	}
	
	function executeRequete($requete) {
		global $connexion;
		$resultats = mysqli_query($connexion, $requete);					// Effectue une requête à la base de données.
		return $resultats;
	}
	
	function getAllEquipes() {
		return executeRequete('SELECT id, nom, quartier FROM equipes');		
	}
?>