<?php
	session_start();
    session_destroy();
	include_once"../config/conexao.php";
	// if(isset($_SESSION['carrinho'])){

 //        echo "aquiiiiiiiii tem";
	// }else{
		if (isset($_GET['id'])):
			# code...
			$id=intval($_GET['id']);
			
			if (!isset($_SESSION['carrinho'])):
				$_SESSION['carrinho']=array();
			endif;
			if (empty($_SESSION['carrinho'][$id])):
				$_SESSION['carrinho'][$id]=1;
			else:
				$_SESSION['carrinho'][$id]=$_SESSION['carrinho'][$id]+1;
			endif;
            print_r($_SESSION['carrinho']);
            echo "aquiiiiiiiii";
				# code...
			endif;// isset
			
// }
			
        
    // $cod_foto=$_GET["id"];;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Carrinho</title>
	<link rel="stylesheet" type="text/css" href="../lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/css/custom.css">
</head>
<body>
	<div class="navbar navbar-default navbar-inverse navbar-static-top" height="20">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="Locacao images\hermes-logo-small.png"><span>Isis Arte</span></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="home.html">Home</a>
                        </li>
                        <li>
                            <a href="produtos.html">Produtos</a>
                        </li>
                        <li>
                            <a href="eventos.html">Eventos</a>
                        </li>
                        <li>
                            <a href="carrinho.html">Carrinho</a>
                        </li>
                        <li>
                            <a href="curiosidades.html">Perguntas Frequentes</a>
                        </li>
                        <li>
                            <a href="sobre.html">Sobre</a>
                        </li>
                        <li>
                            <a href="contaco.html">Contactos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
	
                <table width="700px" border="1">
                    <tr>
                        <td>Imagem</td>
                        <td>Caption</td>
                        <td>Quantidade</td>
                        <td>Accoes</td>
                    </tr>
                   
                     <?php 
                        foreach ($_SESSION['carrinho'] as $k => $v) {                            
                         echo "<tr>";
                            $con=new conexao();
                            echo " Testeee ".$k;
                            $sql = "select * from foto where cod_foto='".$k."'";
                            $result=$con->query($sql);//($sql);
                            if ($result->num_rows>0) {

                            while ($f=$result->fetch_assoc()) {
                            ?> 
                            <td><?php echo "<img src=../Imagens/$f[nome] >";?></td>
                            <td><?php $f['caption'] ;?></td>
                            <td>Quantidade</td>
                            <td>Accoes</td>
                            </tr>
                           <?php
                           
                            }
                            }else{
                                echo "Nao existem Dados";
                            }
                    }?>
                    
                    
                </table>

</body>
</html>