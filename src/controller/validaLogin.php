<?php 
// Inicia sessões 
session_start(); 

// Verifica se existe os dados da sessão de login 
if(!isset($_SESSION["email"]) || !isset($_SESSION["password"])) 
{ 
// Usuário não logado! Redireciona para a página de login 
header('Location: ../view/produto.php?action=failed');

} 
?>
