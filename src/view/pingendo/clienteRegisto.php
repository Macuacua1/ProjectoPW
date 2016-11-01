<?php
require "validaLogin.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registo do Cliente | </title>

    <!-- Bootstrap -->
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
  
  h1{
       text-align: center; 
      }
      .navbar{
        clear: both;
      }
      .contentor{
        padding-top: 120px;
      }

</style>

  </head>

  <body >
     <!-- MODAL -->
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
                          <label class="sr-only" for="form-username">Username</label>
                            <input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="form-password">Password</label>
                            <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                          </div>
                           <p>
                                            <label for="remember">
                                                <input type="checkbox" name="remember" id="remember" value="1" /> Remember me
                                            </label>
                                         </p>
                          <button type="submit" name="login" class="btn">Sign in!</button>
                      </form>
                      
              </div>
              
            </div>
          </div>

          <?php include_once('header.php'); ?>
        <!-- page content -->

        <div class="contentor" >

          <div class="">
       
            <div class="clearfix"></div>
            

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">

                    <form class="form-horizontal " method="post" action="header.php" novalidate>
                      <div height="120" margin-botton="250" ></div>

                      <div class=" col-md-4">
                      <hr color="black">
                        <hr color="black">
                      </div>
                      <div class=" col-md-4">
                       <span class="section"><em><h2 align="center">Registo do Cliente</h2></em></span>
                      
                      </div>
                      <div class=" col-md-4">
                        <hr color="black">
                         <hr color="black">
                      </div>
                      <div class="clearfix"></div>
                     <div class=" col-md-6">

                      <div class="item form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome <span class="obrigatorio">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nome" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nome" placeholder="Nome e Sobrenome" required="required" type="text">
                        </div>
                      </div>
                         <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nuit">NUIT <span class="obrigatorio">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nuit" type="text" name="nuit" required="required"  data-validate-minmax="9,9"  class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cell">Telefone <span class="obrigatorio">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="tel" id="cell" name="cell" required="required" data-validate-length-range="9,13" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="obrigatorio">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                     
                     
                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Senha<span class="obrigatorio">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" type="password" name="senha" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Confirma Senha<span class="obrigatorio">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                   
                      </div>

                       <div class=" col-md-6">


                      <div class="item form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bairro">Bairro <span class="obrigatorio" >*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="bairro" class="form-control col-md-7 col-xs-12" data-validate-length-range="15" data-validate-words="8" name="bairro" placeholder="" required="required"  type="text">
                        </div>
                      </div>

                      <div class="item form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="quarteirao">Quarteirao <span class="obrigatorio">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="quarteirao" class="form-control col-md-7 col-xs-12" data-validate-length-range="4" data-validate-words="2" name="quarteirao" placeholder="" required="required" type="text">
                        </div>
                      </div>

                      <div class="item form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="avenida">Avenida|Rua <span class="obrigatorio">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="avenida" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="avenida" placeholder="" required="required" type="text">
                        </div>
                      </div>

                      <div class="item form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nr_casa">Nr casa<span class="obrigatorio">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nr_casa" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nr_casa" placeholder="" required="required" type="number">
                        </div>
                      </div>
                         <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                         <button id="registar" name="registar" value="Registar" type="submit" class="btn btn-success">Registar</button>
                        </div>
                      </div>
                      </div>

                   </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      
        </div>
     
  <!--<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a> -->
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
      // initialize the validator function
      validator.message.date = 'not a real date';

      // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
      $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

      $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

      $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
          submit = false;
        }

        if (submit)
          this.submit();

        return false;
      });
    </script>
    <!-- /validator -->
                  <section id="footer" class="section footer">
    <div class="container">
      <div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
        <div class="col-sm-12 align-center">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>       
        </div>
      </div>

      <div class="row align-center copyright" color="white">
          <div class="col-sm-12" ><p >Copyright &copy; 2016 IsisArte </p></div>
                   
      </div>
    </div>
    </section>
        <!-- /footer content -->
        <script src="../lib/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  
  <script src="../lib/js/jquery.isotope.min.js"></script>
  <script src="../lib/js/jquery.nicescroll.min.js"></script>
  <script src="../lib/js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="../lib/js/skrollr.min.js"></script>   
  <script src="../lib/js/jquery.scrollTo-1.4.3.1-min.js"></script>
  <script src="../lib/js/jquery.localscroll-1.2.7-min.js"></script>
  <script src="../lib/js/stellar.js"></script>
  <script src="../lib/js/jquery.appear.js"></script>
 <!-- <script src="js/validate.js"></script>-->
    <script src="../lib/js/main.js"></script>
   
  </body>
</html>