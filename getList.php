<?php
	include "backend.php";

	$text = $_GET["text"];
	$onlyNames = array();

	# Uses previously saved token 
	if (isset($_SESSION["token"])){
		$client->setAccessToken($_SESSION["token"]);
		$people = new Google_Service_People($client);
		$contactsList = $people->people_connections->listPeopleConnections('people/me', array('pageSize' => 10));

		foreach($contactsList->getConnections() as $person){
			if (count($person->getNames())!=0){
				$names=$person->getNames();
				$dispName = $names[0]->getDisplayName();
				if (stristr($dispName, $text)===TRUE){
					array_push($onlyNames, $dispName);
				}
			}			
		}
		echo json_encode($onlyNames);
	}
?>