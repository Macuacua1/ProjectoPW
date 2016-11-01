<?php

	include_once("../model/reserva.php");

    $accao=$_GET["accao"];

    $reserva=new reserva();
	
	if($accao=="listar"){
	  
	  $lista=$reserva->selectAll();
	}
	
	if($accao=="registar"){

		$username=$_POST["username"];
		$password=$_POST["password"];

	   	$usuario->setUsername($username);
	   	$usuario->setPassword($password);
		$usuario->registar();
	}
?>