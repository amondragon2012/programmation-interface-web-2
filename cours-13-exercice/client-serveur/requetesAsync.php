<?php

	// Pour accéder à la base de données
	require_once('fonctionsDB.php');

    if (isset($_POST['action'])) {

        // Switch en fonction de l'action envoyée
        switch ($_POST['action']) {
            
            case 'getMemberInfos':

				if ($_POST['action'] && $_POST['id']) {
	
					$tableau = array();

					// Obtenir les équipes dans la BD
					$membres = getAllMemberInfos($_POST['id']);

					// Boucler sur les équipes obtenues
					while ($membre = mysqli_fetch_assoc($membres)) { 
						$tableau[] = $membre;
					}
				
					echo json_encode($tableau);

				} else {
					echo 'Erreur query string';
				}

				break;
		}
	} else {
		echo 'Erreur action';					
	}

?>