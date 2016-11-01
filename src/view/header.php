<?php
  session_start();
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
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

      <style type="text/css">
          li a.active {
              background-color: #4CAF50;
              color: white;
          }

      </style>>
    </head>
    <body>
        
         <div class="navbar navbar-default navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="home.php">Home</a>
            </li>
            <li>
              <a href="eventos.php">Eventos</a>
            </li>
            <li>
              <a href="produtos.php">Produtos</a>
            </li>
            <li>
              <a href="carrinho.php">
                <?php
                        // count products in cart
                $cart_count=0;
                  if(isset($_SESSION['carrinho'])) 
                  {   
                        $cart_count=count($_SESSION['carrinho']);                        
                  }
                  ?>
                        Carrinho <span class="badge" id="comparison-count"><?php echo $cart_count; ?></span>
              </a>
            </li>
            <li>
              <a href="curiosidades.php">Perguntas frequentes</a>
            </li>
            <li>
              <button type="button" class="" data-toggle="modal" data-target="#popUpWindow">Login</button>
            </li>
            <li>
              <a href="contacto.php">Contactos</a>
            </li>
            <li>
              <a href="sobre.php">Sobre nós</a>
            </li>
          </ul>
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
                
                      <form role="form" action="../controller/login.php" method="post" class="login-form">
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


</body>
   


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

</html>