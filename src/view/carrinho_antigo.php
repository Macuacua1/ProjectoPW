<?php
    session_start();
    // session_destroy();
    // include_once"../config/conexao.php";
    include_once"../model/reserva.php";
    // if(isset($_SESSION['carrinho'])){

 //        echo "aquiiiiiiiii tem";
    // }else{
        //verifica de foi selecionado um produto
        if (isset($_GET['id'])):
            # code...
            //pega o id do produto selecionado
            $id=intval($_GET['id']);
            //verifica se ha algo no carrinho
            if (!isset($_SESSION['carrinho'])):
                $_SESSION['carrinho']=array();
            endif;
            //verifica se ja existe o produto selecionado 
            if (empty($_SESSION['carrinho'][$id])):
                $_SESSION['carrinho'][$id]=1;
            else:
                $_SESSION['carrinho'][$id]=$_SESSION['carrinho'][$id]+1;
            endif;
                # code...
            endif;// isset
            

?>
<?php
    if(isset($_GET['ac'])=='limpar'):
        unset($_SESSION['carrinho']);
    endif;

    
?>
<?php
//para accao apagar, apaga um a um
    if(isset($_GET['ac'])=='apagar'):
        $id=intval($_GET['id']);
        if (isset($_GET['id'])) {
            unset($_SESSION['carrinho'][$id]);
        }
    endif;
?>
<?php
//para accao Fazer Reserva
    $art=null;
  
    $data=date('d/m/Y');

    if(isset($_GET['accao'])=='reservar'){
    
        if (!isset($_SESSION['carrinho'])) {
            echo "Não Existem Artigos para Reservar!";
        }
        else{   
                foreach ($_SESSION['carrinho'] as $k => $v) {
                    $con=new conexao();
                    $sql = "select * from artigo a inner join foto f on a.cod_artigo=f.cod_artigo where cod_foto='".$k."'";
                    $result=$con->query($sql);//($sql);
                    if ($result->num_rows>0) {
                    while ($f=$result->fetch_assoc()) {
                               $art=$f['cod_artigo'];
                    }
                    
                        $q=$v;
                        
                        $cliente=2;
                        $cod_f=1;
                        $fat=1;$trs=1;
                        //criacao da reserva
                        $c=new reserva();
                        $c->reserva($art,$cliente,$data,$q,$cod_f,$fat,$trs);
                        $c->save();
                }
                unset($_SESSION['carrinho']);  
            }
        }
    }
?>
<?php

    if (isset($_POST['alter_quant'])) {
        $valor=$_POST['quant'];   
        $cod_foto=$_POST['cod_art'];
        if (!empty($_SESSION['carrinho'][$cod_foto])) {
            # code...
            $_SESSION['carrinho'][$cod_foto]=$valor;
        }

        # code...
    }
?>


<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
        rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../../lib/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../lib/js/bootstrap.min.js">

    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        

        <link href="../lib/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../lib/css/font-awesome.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="../lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/css/custom.css">
    <!-- Custom Theme Style -->
    <link href="../lib/css/custom.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">-->
   <link rel="stylesheet" href="../lib/css/form-elements.css">
    <link rel="stylesheet" href="../lib/css/style.css">
    <!--novos-->
    <link rel="stylesheet" type="text/css" href="../lib/css/isotope.css" media="screen" /> 
    <link rel="stylesheet" href="../lib/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../lib/css/bootstrap.css">
    <link rel="stylesheet" href="../lib/css/bootstrap-theme.css">
        <link rel="stylesheet" href="../lib/css/style.css">
        <link href="../../css/style.css" rel="stylesheet" type="text/css">
    <!-- skin -->
    <link rel="stylesheet" href="../lib/css/skin/default.css">
     <script src ="../lib/js/bootstrap.min.js" type="text/javascript"></script>
    <script src ="../lib/js/jquery.min.js" type="text/javascript"></script>


    <script type="text/javascript">
     $(document).ready(function(){
    $('.toggle-modal').click(function(){
    $('#popUpWindow').modal('toggle');
  }); 
});
</script>

    </head>
    
    <body>
        <?php include ("header.php"); ?>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h1 class="panel-title">Carrinho</h1>
                            </div>
                            <div class="panel-body">
                                <p></p>
                               
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Imagem</th>
                                            <th>Descricao</th>
                                            <th>Preço Unitário</th>
                                            <th>Quantidade</th>
                                            <th>Subtotal</th>
                                            <th>Accao</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <?php
                                     $total=0;
                                        if(!isset($_SESSION['carrinho'])){
                                            echo "<tr><td>Não Existem elementos Adicionados</td></tr>";
                                        }
                                           
                                        else {
                                        echo "<tr>";
                                           
                                               
                                           
                                                foreach ($_SESSION['carrinho'] as $k => $v) { 

                                                 echo "<tr>";
                                                    $con=new conexao();
                                                    

                                                    $sql = "select * from artigo a inner join foto f on a.cod_artigo=f.cod_artigo where cod_foto='".$k."'";
                                                    $result=$con->query($sql);//($sql);
                                                    if ($result->num_rows>0) {

                                                    while ($f=$result->fetch_assoc()) {
                                                        $subtotal=$f['preco_unitario']*$v;
                                                   

                                    ?> 
                                                    <form action="carrinho.php" method="POST"> 
                                                    <td><?php echo "<img src=../../Imagens/$f[nome] >";?></td>
                                                    <td><?php echo $f['descricao'] ;?></td>
                                                    <td><?php echo $f['preco_unitario'] ;?></td>
                                                    <input type="hidden" name="cod_art" value="<?php echo "$f[cod_foto]"?>" ></input>
                                                    <td><input type='number' name="quant" min="1" value="<?php echo $v;?>"></input>
                                                        <input type="submit" name="alter_quant" value="actualizar" class="btn btn-primary">
                                                    </td>
                                                    <td><?php echo "Mt ".number_format($subtotal,2,",","."); ?></td>
                                                    <td><a href="?ac=apagar&id=<?php echo "$f[cod_foto]"; ?>" class="btn btn-danger">X</a></td>
                                                    </tr>
                                                    </form>

                                                   <?php
                                                    $total+=$subtotal;
                                                   
                                                    }

                                                    }else{
                                                }
                                                    
                                            }//end foreach
                                            }//endif;// endif;//if empty(section)
                                            ?>
                                        </tr>
                                        
                                        
                                    </tbody>
                                    <a href="?ac='limpar'"><input type="submit" name="limpar" class="btn btn-success" value="Limpar todos"></input>
                                    <a href="produtos.php"><input type="submit" class="btn btn-success" value="Adicionar Mais "></input></a>

                                   <!--  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#popUpWindow">Terminar</button> -->

                                    <a href="?accao=reservar"><input type="submit" class="btn btn-success" value="Terminar  "></input>
                                  <!--   <a href="produtos.php"><input type="submit" class="btn btn-success" value="Reservas Mais "></input></a> -->
                                    
                                </table>
                                Total<?php echo " Mt ".number_format($total,2,",","."); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL -->
        <!-- <div > -->
          <div class="modal-dialog modal fade" id="popUpWindow">
            <div class="modal-content">
              
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;
                </button>
                <h3 class="modal-title">Log in</h3>
              
              </div>
              
              <div class="modal-body">
                
                      <form role="form" action="login.php" method="post" class="login-form">
                        <div class="form-group">
                          <label class="sr-only" for="form-username">Usuário</label>
                            <input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="form-password">Senha</label>
                            <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                          </div>
                           <p>
                                            <label for="remember">
                                                <input type="checkbox" name="remember" id="remember" value="1" /> Remember me
                                            </label>
                                         </p>
                          <button type="submit" name="login" class="btn">Entrar</button>
                      </form>
                      
              </div>
              
            </div>
          </div>
          <!-- </div> -->
          <script src ="../lib/js/bootstrap.min.js" type="text/javascript"></script>
    <script src ="../lib/js/jquery.min.js" type="text/javascript"></script>
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
  <!--  <script src="../lib/js/validator/validator.min.js"></script>-->

    <!-- Modal scripts-->
        <script src="../lib/js/custom.js"></script>
        <script src="../lib/js/login/jquery-1.11.1.min.js"></script>
        <script src="../lib/bootstrap.min.js"></script>
        <script src="../lib/js/login/jquery.backstretch.min.js"></script>
        <script src="../lib/js/login/scripts.js"></script>

    <!-- validator -->
    <script>

     <script src="lib/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
      
      <script src="lib/js/jquery.isotope.min.js"></script>
      <script src="lib/js/jquery.nicescroll.min.js"></script>
      <script src="lib/js/fancybox/jquery.fancybox.pack.js"></script>
      <script src="lib/js/skrollr.min.js"></script>   
      <script src="lib/js/jquery.scrollTo-1.4.3.1-min.js"></script>
      <script src="lib/js/jquery.localscroll-1.2.7-min.js"></script>
      <script src="lib/js/stellar.js"></script>
      <script src="lib/js/jquery.appear.js"></script>
     <!-- <script src="js/validate.js"></script>-->
        <script src="lib/js/main.js"></script>

        <?php
          include 'footer.php';
        ?>
    </body>

</html>