<?php
            
    include_once"../../config/conexao.php";
           
    $cod_foto=$_GET["id"];
    $conexao=null;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title>Product Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../lib/css/custom.css">
</head>
<body>
    <!-- <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <a class="navbar-brand" href="#"><span>Isis Arte</span></a>
          </div>
        </div>
      </div>
    </div> -->
     <?php include ("header.php"); ?>
     
    <div class="container conteudo">
        <div class="row">
            <div class="col-md-5">

            <?php
                $conexao=new Conexao();

                $sql = "SELECT * from foto f  join artigo a on f.cod_artigo=a.cod_artigo WHERE cod_foto='".$cod_foto."'";
                 

            $resultado = $conexao->query($sql);
             if ($resultado->num_rows>0) {

                while ($row=$resultado->fetch_assoc()) {
                    
                     echo "<img src=../../Imagens/$row[nome] >";
                      echo"<p><a 
                                      href='../controller/add_to_cart.php?id=$row[cod_artigo]&name=$row[designacao]'
                                    class='btn glyphicon glyphicon-shopping-cart btn-success '> Ao Carrinho &raquo;</a></p>";
                     // class='grow img-responsive'  class='img-polaroid' alt='Sample Image' style='width: 320px;height: 300px '";
              
             ?>  
                
            </div>
            <div class="col-md-7">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1">Especificações</a></li>
                    <li><a data-toggle="tab" href="#tab-2">oooooo</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade in active">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>Nome</th>
                                    <td><?php echo $row['designacao'];?></td>
                                </tr>
                                <tr>
                                    <th>Preço</th>
                                    <td><?php echo $row['preco_unitario'];?></td>
                                </tr>
                                <tr>
                                    <th>descrição</th>
                                    <td><?php echo $row['descricao'];?></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <div id="tab-2" class="tab-pane fade">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>detalhes</td>
                                </tr>
                                <tr>
                                    <td>detalhes</td>
                                </tr>
                                <tr>
                                    <td>detalhes</td>
                                </tr>
                                <tr>
                                    <td>detalhes</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php
              }
            } ?>
            <!-- <div class="span7">
                <h2>Lenovo Desktop</h5>
                <h4 class="muted">Thinner, Lighter, Faster. All in One Desktop</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa.</p>
                <hr>
                <h3>Price - <del class="text-error">$699</del> $499</h3>
                <p class="muted">Inclusive of all taxes. Free home delivery.</p>
                <br>
                <p><a href="#" class="btn btn-success btn-large">Buy Online Now</a></p>
            </div> -->
        </div>
       <!--  <div class="row">
            
        </div> -->
    </div>
    <!-- Footer section -->
    <?php
      include 'footer.php';
    ?>
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>