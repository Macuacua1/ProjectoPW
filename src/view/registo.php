<html>
<head>
  <title>Registo de Cliente</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../../lib/css/contact.css" rel="stylesheet" type="text/css">
    <link href="../../lib/css/styleForm.css" rel="stylesheet" type="text/css">
  </head><body>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <a class="navbar-brand" href="#"><span>Isis Arte</span></a>
          </div>
        </div>
      </div>
    </div>
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
              <a href="carrinho.php">Carrinho</a>
            </li>
            <li>
              <a href="curiosidades.php">Perguntas frequentes</a>
            </li>
            <li>
              <a href="registo.php">Registe-se</a>
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

    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <div class="section">
      <div class="container">
        <h1>Deixe a sua Opinião</h1>
      </div>
    </div>
    <div class="container-fluid" id="section4">
      <form class="form-horizontal" role="form">
        <div class="form-group">
          <label class="control-label col-sm-2" for="nome">Nome</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" required="Prencha o nome" id="nome" placeholder="informe o nome do evento">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="exemplo@gmail.com">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="data">Comentário</label>
          <div class="col-sm-10">
            <textarea type="text" class="form-control" rows="7" cols="40" id="comentario" placeholder="comente"></textarea>
          </div>
        </div>
        <div class="form-group" draggable="true">
          <label class="control-label col-sm-2" for="submit"></label>
          <div class="col-sm-10">
            <input type="submit" value="Enviar">
          </div>
        </div>
      </form>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <img class="img-responsive" src="http://maps.googleapis.com/maps/api/staticmap?center=Tombouctou,Mali&amp;zoom=12&amp;size=200x200&amp;sensor=false">
          </div>
        </div>
      </div>
    </div>    
    </div><!--Fim do registo-->
    <div class="col-md-4"></div>
    </div>
    <footer class="section section-warning">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1>Isis Arte&nbsp;</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
          <div class="col-sm-6">
            <p class="text-info text-right">
              <br>Telefonr: 002588829919</p>
            <div class="row">
              <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 hidden-xs text-right">
                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  

</body>
</html>