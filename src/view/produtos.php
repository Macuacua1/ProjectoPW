 <?php    
 
  include_once '../config/conexao.php';
  //session_destroy();
  // to prevent undefined index notice
  $action = isset($_GET['action']) ? $_GET['action'] : "";

  $product_id = isset($_GET['product_id']) ? $_GET['product_id'] : "1";
  $name = isset($_GET['name']) ? $_GET['name'] : "";

if($action=='added' ){
        # code...
    echo "<div class='alert alert-info'>";
    echo "O artigo <strong>{$name}</strong> foi addicionado ao carrinho!";
    echo "</div>";
}
elseif($action=='exists' ){
        # code...
    echo "<div class='alert alert-info'>";
    echo "O artigo <strong>{$name}</strong> já Existe, A sua quantidade aumentou em uma unidade!";
    echo "</div>";
}
elseif($action=='sucesso' ){
        # code...
    echo "<div class='alert alert-info'>";
    echo "A sua reserva foi <strong>efectuada com sucesso</strong>!";
    echo "</div>";
}
elseif($action=='failed' ){
        # code...
    echo "<div class='alert alert-info'>";
    echo "Erro nos dados fornecidos <strong>tente denovo</strong>!";
    echo "</div>";
}

 
 ?>


<html>
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" type="text/css" href="../../lib/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="../../lib/css/w3.css">
    <link rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../../css/GalleryStyle.css">
    <link rel="stylesheet" type="text/css" href="../../css/modal.css">
    <link rel="stylesheet" type="text/css" href="../../lib/css/custom.css">
    <style type="text/css">
        .session4{
            height: 400px;
        }
    </style>

  </head>
  <body onLoad="auto()">
   <!--  <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <a class="navbar-brand" href="#"><span>Isis Arte</span></a>
          </div>
        </div>
      </div>
    </div> -->
     <?php include ("header.php"); ?>


    <div class="section session4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="carousel-example" data-interval="false" class="carousel slide"
                        data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="active item">
                                    <img src="../Locacao images/1f341e_c826298ab2a84fbbaa900b6a0fec1d12.jpg">
                                    <div class="carousel-caption">
                                        <h2>IsisArte</h2>
                                        <p>Description</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="../Locacao images/company_28984.jpg">
                                    <div class="carousel-caption">
                                        <h2>IsisArte</h2>
                                        <p>Description</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="../Locacao images\company_28978.jpg">
                                    <div class="carousel-caption">
                                        <h2>IsisArte</h2>
                                        <p>Description</p>
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example" data-slide="prev"><i class="icon-prev  fa fa-angle-left"></i></a>
                            <a class="right carousel-control" href="#carousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
        if($action=='added'){
            echo "<div class='alert alert-info'>";
                echo "<strong>{$name}</strong> was added to your cart!";
            echo "</div>";
        }
?>
    
    <div class="container">
    <div class="row ">
          <div class="span3" >
            <div class="well" >
              <ul class="nav nav-list"> <!--nav nav-pills nav-stacked-->
                  <li class="active"><a href="#">Categorias</a></li>

                  <?php $con=new conexao();

                $sql = 'select * from categoria';
                $result=$con->query($sql);//($sql);
                if ($result->num_rows>0) {
                while ($f=$result->fetch_assoc()) {
                  ?>
                  <li style="color:black;"><a href="#"></a><?php $f['designacao']?> </li>
                          
              <?php
                  # code...
                }
                  ?>
                    <?php
              }
              ?>
              </ul>

            </div>
          </div>         
          <div class="span9 ">
              <?php $con=new conexao();

                $sql = 'select * from foto as f inner join artigo as a on f.cod_artigo=a.cod_artigo  ';
                $result=$con->query($sql);//($sql);
                if ($result->num_rows>0) {
                  echo "<ul class=' thumbnails' style='list-style-type: none; float:left;'>";
                while ($f=$result->fetch_assoc()) {
                  ?>
                  <li class="span3" >
                          <?php echo" <a href='#openModal'>"?>
                          <div class="thumbnail grow">
                          <?php echo"<img src=../../Imagens/$f[nome] >"   ?> 
                              <div class="caption">

                                  <div class="grow">
                                      <?php echo"<a href='detalhes.php?id= $f[cod_foto]' class='btn btn-success'> Detalhes &raquo;</a>";?>
                                  </div>
                                    <div class="grow">
                                    <?php echo"<a 
                                      href='../controller/add_to_cart.php?id=$f[cod_artigo]&name=$f[designacao]'
                                    class='btn glyphicon glyphicon-shopping-cart btn-success '> Ao Carrinho &raquo;</a>";?>
                                    </div>
                                </div>
                              <footer style=" background-color:#F4B35D " ><?php echo"$f[descricao]"?></footer>
                          </div> 
                          <?php echo " </a>" ?> 
                      </li>
              <?php
                  # code...
                }
                echo "</ul>";
                }else
                {
                  echo "Nenhum Artigo encontrado";
                }
              ?>
        </div><!--fim da seccao-->
      </div><!--fim do container-->
    </div><!--fim da seccao-->

    <!-- <a href="#openModal">Open Modal</a>     -->
        <div id="openModal" class="modalDialog">
          <div> <a href="#close" title="Close" class="close">X</a>
            <div class="row">
              <div class="col-md-4">
                <div class="media span3">
                         <a class="pull-left " href="# "><img class="media-object
                            " src="../Imagens/images (4).jpg " height="64 " width="64 "></a>
                        <div class="media-body ">
                          <h4 class="media-heading ">Capas</h4>
                          <p></p>
                        </div>
                </div>
                </div>
                <div class="col-md-8">
                  <form class="form-horizontal" role="form">
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="nome">Quantidade</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" required="Prencha o nome" id="nome" placeholder="informe o nome do evento">
                      </div>
                    </div>
                    
                    <div class="form-group" draggable="true">
                      <label class="control-label col-sm-10" for="submit"></label>
                      <div class="col-sm-2">
                        <input type="submit" value="Add">
                      </div>
                    </div>
                  </form>
                </div>


              </div>  
              

            </div>
          </div>
    <!-- </div> -->

    <?php
      include 'footer.php';
    ?>
  
  <script>
      var indice = 0;
      slides();

      function slides() {
          var i;
          var x = document.getElementsByClassName("meuSlide");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none"; 
          }
          indice++;
          if (indice > x.length) {indice = 1} 
          x[indice-1].style.display = "block"; 
          setTimeout(slides, 3000); // Change image every 2 seconds
      }
      
    </script>

</body>
</html>