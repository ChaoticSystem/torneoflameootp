<?php


/*  parametros db  */
	$host     = "localhost";//Ip of database, in this case my host machine    
	$user     = "root";	//Username to use
	$pass     = "Aa19896429..";//Password for that user
	$dbname   = "torneo";//Name of the database
	
	$result = [
		'ok' => false,
		'message' => 'no se pudo agregar los datos'
	];
	
	function fetchUrl($uri) {
		$handle = curl_init();

		curl_setopt($handle, CURLOPT_URL, $uri);
		curl_setopt($handle, CURLOPT_POST, false);
		curl_setopt($handle, CURLOPT_BINARYTRANSFER, false);
		curl_setopt($handle, CURLOPT_HEADER, true);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 10);

		$response = curl_exec($handle);
		$hlength  = curl_getinfo($handle, CURLINFO_HEADER_SIZE);
		$httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
		$body     = substr($response, $hlength);

		// If HTTP response is not 200, throw exception
		if ($httpCode != 200) {
			throw new Exception($httpCode);
		}

		return $body;
	}
	
	$data = trim($_GET['nombredeinvocador']);
	$id = preg_replace('/\s+/', '%20', $data);
	$pos = false;
	require_once("acentos.php");
	
	try{
		$url = "https://www.leagueofgraphs.com/es/summoner/lan/".urlencode($id);
		$page = @fetchUrl($url);		
		$findme = $id;
		$pos = strpos($page, $findme);
	}catch(exception $ex){
		$result['pageError'] = $ex->getMessage();
	}


if ($pos === false) {

   die(json_encode($result));
   
   
} else {
	//se encontrĂ³
	try {
		
		$connection = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$nombrereal = $_GET['nombrereal'];
		$nombredeinvocador = $_GET['nombredeinvocador'];
		//echo $nombrereal;
		//echo $nombredeinvocador;

		$statement = $connection->prepare("INSERT INTO participantes (nombrereal, nombredeinvocador ) VALUES ('$nombrereal', '$nombredeinvocador')");

		try {
			//preparamos el insert al modo pdo 	
			$statement->execute();
			if($statement->rowCount() > 0){
				$result['id'] = $connection->lastInsertId();
				$result['ok'] = true;
				$result['message'] = 'Se ha registrado correctamente.';
			}
		} catch(PDOException $e) {
			//errores
			//$e->getMessage();
			$result['codeError1'] = $e->getCode();
			$result['codeError2'] = $statement->errorCode();
			if($e->getCode() == 1062 or $statement->errorCode() == 23000){
				$result['message'] = 'El invocador ya se encuentra registrado';
			}else{
				$result['message'] = $e->getMessage();
			}
			
		}

	}catch(PDOException $e){
	    //echo $e->getMessage(); 
		$result['message'] = $e->getMessage();	  
	}

die(json_encode($result));
}

	