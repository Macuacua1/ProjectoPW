<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../../lib/css/contact.css" rel="stylesheet" type="text/css">
    <link href="../../css/styleForm.css" rel="stylesheet" type="text/css">
  </head><body>
    
     <?php include ("header.php"); ?>
    <div class="section">
      <div class="container">
        <div class="panel panel-success">
          <div class="panel-heading">Deixe a sua Opinião</div>
          <div class="panel-body">
            <div class="container-fluid" id="section4">
              <form class="form-horizontal" action="?accao=enviar" method="post" role="form">
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

          </div>
        </div>
      </div>
    </div>
    

    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
           <?php include "map.php";?>
          </div>
        </div>
      </div>
    </div>
    <?php
      include 'footer.php';
    ?>


  

</body>
</html>
 <?php
          if($_SERVER['REQUEST_METHOD'] == 'POST'){
            include_once("../controller/contacte_controller.php");
       }
       ?>