<?php
require "validaLogin.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Bem Vindo</title>

		<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
  		<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../../javascript.js">
		<link rel="stylesheet" type="text/css" href="../../css/style.css">
		<script type="text/javascript">
			document.getElementById('login').alert('ola');
		</script>

	</head>
	<body >
		<div class="row">
			<div class="col-sm-4"></div>

			<div class="col-sm-4">
				<div id="loginBox">
					<h2 align="left">Novo usuario</h2>
					  <form class="form-horizontal" action="?accao=registar" role="form" method="post">
					    <div class="form-group">
					      <label class="control-label col-sm-2" for="user">User</label>
					      <div class="col-sm-10">
					        <input type="text" name="username" class="form-control" id="user" placeholder="digite o seu username">
					      </div>
					    </div>
					    <div class="form-group">
					      <label class="control-label col-sm-2" for="pwd">Senha</label>
					      <div class="col-sm-10">          
					        <input type="password" name="password" class="form-control" id="senha" placeholder="digite a senha">
					      </div>
					    </div>
					    
					    <div class="form-group" class="btn-success"> 
					    <div class="col-sm-2" ></div>       
					      <div class="col-sm-5" >
					      	<input id="voltar" type="submit" class="btn btn-default" value="Voltar"><a href="index.php"></a></input>
					      </div>
					      <div class="col-sm-5" >
					        <input align="right" id="registar" type="submit" class="btn btn-default" value="Salvar"></input>
					      </div>
					    </div>
					  </form>
				</div>
			
				
				<?php
					if($_SERVER['REQUEST_METHOD'] == 'POST'){
					  include_once("../controller/usuarioController.php");
		   }
		   ?>
				
			</div>


			<div class="col-sm-4"></div>

		</div>		
	</body>
</html>
