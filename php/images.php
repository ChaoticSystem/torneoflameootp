<?php

	$fileName = '';
	try{
		$fileName = @'img/rango/'.$_GET['rango'].'.png';
	}catch(exception $ex){}
	
	if(!file_exists($fileName)){
		$fileName = 'img/rango/default.png';
	}
	
	header('location: '.$fileName);