<?php 
    require_once('fonctionsDB.php');

    //var_dump($_POST['username']);
    
    
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['lastname']) && isset($_POST['firstname'])) {
        
        //$username = $_POST['username'];
        //$password = $_POST['password'];
        //$lastname = $_POST['lastname'];
        //$firstname = $_POST['firstname'];

        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
        $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
        
        add($username, $password, $lastname, $firstname);
    
    } else {
		echo 'Erreur query string';
	}
    
?>