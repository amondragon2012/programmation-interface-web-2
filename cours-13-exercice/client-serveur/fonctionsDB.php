<?php
	$connexion = connectDB();
	
	function connectDB() {

		$laConnexion = mysqli_connect('localhost', 'root', 'root');			// MAC
		//$laConnexion = mysqli_connect('localhost', 'root', '');			// Windows
				
		if (!$laConnexion) {
			// La connexion n'a pas fonctionné
			die('Erreur de connexion à la base de données. ' . mysqli_connect_error());
		}
		
		$selected = mysqli_select_db($laConnexion, 'accounts');

		if(!$selected) {
			die('La base de données n\'existe pas.');
		}
		
		mysqli_query($laConnexion, 'SET NAMES "utf8"');
		return $laConnexion;
	}
	
	function executeRequete($requete) {
		global $connexion;
		$resultats = mysqli_query($connexion, $requete);
		return $resultats;
	}
	
	function getAllMembers() {
		return executeRequete('SELECT id, nom, prenom FROM accounts');		
	}
	
	function getAllMemberInfos($idMember) {
		return executeRequete('SELECT * FROM accounts WHERE id = ' . $idMember);
	}

	function changeMemberInfos($column, $newValue, $idMember) {
		return executeRequete(" UPDATE accounts 
								SET $column = '" . $newValue . "'
								WHERE id = " . $idMember);
	}	
?>