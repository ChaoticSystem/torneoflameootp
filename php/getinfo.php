<?php

	//header("Content-type: application/json");
	error_reporting(0);


	$data = trim($_GET['nombredeinvocador']);

	$id = preg_replace('/\s+/', '%20', $data);
	
	
	/*  agradecimientos a 
	
	// Auteur : JoeCare
// Date : 2017-01-27 21:00:00
// Description : Url encode/decode d'UTF-8 U+0300 vers UTF-8 Regular


	*/
require_once("acentos.php");


	$url = "https://www.leagueofgraphs.com/es/summoner/lan/".urlencode($id);

	$page = file_get_contents($url);

	if($page === FALSE) {

		die("error");

	}else{
		
		die($page);
	}

