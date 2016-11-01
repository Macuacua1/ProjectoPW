<?php
    $servername="localhost";
    $username= "root";
    $database="db_locacao";
    $password= "";
    
    
    //connect to the db
    $conexao = new mysqli($servername, $username, $password,$database);
    
        if($conexao->connect_error){
            die('connexao falhou '.$conexao->connect_error);
        }
        
        echo 'conectado com sucesso';
?>