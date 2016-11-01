<?php

   
   include_once("../model/utilizador.php");

    $accao=$_GET["accao"];
    $usuario=new utilizador();
	
	if($accao=="listar"){
	  
	  $lista=$usuario->listar();
	}
	
	if($accao=="registar"){

		$username=$_POST["username"];
		$password=$_POST["password"];

	   	$usuario->setUsername($username);
	   	$usuario->setPassword($password);
		$usuario->registar();
	}

?>