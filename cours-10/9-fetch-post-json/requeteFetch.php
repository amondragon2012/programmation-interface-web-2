<?php 
    require_once('fonctionsDB.php');

    $request_payload = file_get_contents('php://input');
    $data = json_decode($request_payload, true);

    //var_dump($request_payload);
    //var_dump($data);
    //var_dump($data['username']);
    //var_dump($data['password']);
    //var_dump($data['lastname']);
    //var_dump($data['firstname']);
    
    
    if (isset($data['username']) && isset($data['password']) && isset($data['lastname']) && isset($data['firstname'])) {

        $username = filter_var($data['username'], FILTER_SANITIZE_STRING);
        $password = filter_var($data['password'], FILTER_SANITIZE_STRING);
        $lastname = filter_var($data['lastname'], FILTER_SANITIZE_STRING);
        $firstname = filter_var($data['firstname'], FILTER_SANITIZE_STRING);
        
        add($username, $password, $lastname, $firstname);
    
    } else {
		echo 'Erreur query string';
	}
    
?>