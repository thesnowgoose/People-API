<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	session_start();
	require "vendor/autoload.php";
	// unset($_SESSION["token"]);

	$clientId = "949810388978-4tm83kq2djf7l5ra8r2rss6qkohr3bm0.apps.googleusercontent.com";
	$secret = "1qLLRC1qw1TlLjwzKPUEnxCg";
	$redirectUri = "http://localhost/API";

	$client = new Google_Client();
	$client->setApplicationName("Get Contacts");
	$client->setClientid($clientId);
	$client->setClientSecret($secret);
	$client->setRedirectUri($redirectUri);
	$client->setAccessType("offline");

	$client->setScopes("https://www.googleapis.com/auth/contacts.readonly");

	$authUri = $client->createAuthUrl();

	# Get token the first time starts session
	if (isset($_GET["code"])){
		$code = $_GET["code"];
		$result = $client->authenticate($code);
		// #Ask for token
		$accessToken = $client->getAccessToken();
		# Saves token in a session
		$_SESSION["token"] = $accessToken;
		$client->setAccessToken($accessToken);
	}

?>
