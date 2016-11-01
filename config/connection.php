<?php
	$servername="localhost";
	$username= "root";
	$database="db_locacao";
	$password= "";

	$conexao=null;

	$conexao=mysqli_connect($servername,$username,$password)or die('Falha de conexao');
	$bd=mysql_select_db($database,$conexao)or die('Falha de base de dados');
?>