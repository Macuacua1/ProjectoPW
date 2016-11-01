
<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: clienteRegisto.php");//redirect to login page to secure the welcome page without login access.
}

?>


<html><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../css/style.css" rel="stylesheet" type="text/css">
    </head><body>
        <div class="cover">
            <div class="navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand"><span>Brand</span></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active">
                                <a href="home.php">Pagina Inicial</a>
                            </li>
                            <li >
                                <a href="produtos.html">Produtos</a>
                            </li>
                            <li>
                                <a href="eventos.php">Eventos</a>
                            </li>
                            <li>
                                <a href="carrinho.php">Carrinho</a>
                            </li>
                            <li>
                                <a href="sobre.php">Sobre nós&nbsp;</a>
                            </li>
                            <li>
                                <a href="#">Registe-se</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cover-image" style="background-image : url('../Imagens/7129902_orig.jpg')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="text-inverse">IsisArte</h1>
                        <p class="text-inverse">Lorem ipsum dolor sit amet, consectetur adipisici eli.</p>
                        <br>
                        <br>
                        <a class="btn btn-lg btn-primary">Click me</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="fullcarousel-example" data-interval="false" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="https://unsplash.imgix.net/photo-1418479631014-8cbf89db3431?w=1024&amp;q=50&amp;fm=jpg&amp;s=478a9a2196033db7c0bf3c8ba3707f4d">
                                    <div class="carousel-caption">
                                        <h2>Nossos Serviços</h2>
                                        <p>sempre a sua disposição</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="https://ununsplash.imgix.net/photo-1421098518790-5a14be02b243?w=1024&amp;q=50&amp;fm=jpg&amp;s=24665881d66f79925810c2deb7e486b9">
                                    <div class="carousel-caption">
                                        <h2>Title</h2>
                                        <p>Description</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="https://unsplash.imgix.net/photo-1421986527537-888d998adb74?w=1024&amp;q=50&amp;fm=jpg&amp;s=e633562a1da53293c4dc391fd41ce41d">
                                    <div class="carousel-caption">
                                        <h2>Title</h2>
                                        <p>Description</p>
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#fullcarousel-example" data-slide="prev"><i class="icon-prev fa fa-angle-left"></i></a>
                            <a class="right carousel-control" href="#fullcarousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-warning">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-primary">Oferecemos todo tipo de serviço</h1>
                        <h3></h3>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row"></div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="../Imagens/Decoracao de Decoracao de Festas  Infanties com baloes 3.JPG" class="center-block img-circle img-responsive">
                        <h3 class="text-center">Não importa a idade</h3>
                    </div>
                    <div class="col-md-4">
                        <img src="../Imagens/company_28970.jpg" class="center-block img-circle img-responsive">
                        <h3 class="text-center">Local a sua escolha</h3>
                        <p class="text-center">sempre ao seu dispor</p>
                    </div>
                    <div class="col-md-4">
                        <img src="../Imagens/6336821_orig.jpg" class="center-block img-circle img-responsive">
                        <h3 class="text-center">Livre de escolher</h3>
                    </div>
                </div>
            </div>
        </div>
        <footer class="section section-primary">
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
                            <br>
                            <br>
                        </p>
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
    

</body></html>