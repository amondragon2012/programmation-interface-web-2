<?php

	// Pour accéder à la base de données
	require_once('fonctionsDB.php');
	
	$tableau = array();

	// Obtenir les équipes dans la BD
	$joueurs = getAllJoueursParEquipe($_GET['id']);

	// Boucler sur les équipes obtenues
	while ($joueur = mysqli_fetch_assoc($joueurs)) { 
	   $tableau[] = $joueur;
    }
   
	echo json_encode($tableau);
	
?>