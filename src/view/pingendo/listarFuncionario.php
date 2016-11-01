<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Listagem de Funcionarios | </title>


    <!-- css -->
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,700,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../lib/css/menu.css" />
    
<!-- js -->
<script src="js/classie.js"></script>

  
   <link href="../lib/css/datatable/bootstrap.min.css" rel="stylesheet">
  <link href="../lib/css/datatable/dataTables.bootstrap.min.css" rel="stylesheet">
    <!--Teste de css-->
<!-- Custom Theme Style -->
    <link href="../lib/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
  <!--novos-->
  <link rel="stylesheet" href="../lib/css/bootstrap-theme.css">
        <link rel="stylesheet" href="../lib/css/style.css">
    <!-- skin -->
    <link rel="stylesheet" href="../lib/css/skin/default.css">
     <script src ="../lib/js/bootstrap.min.js" type="text/javascript"></script>
    <script src ="../lib/js/jquery.min.js" type="text/javascript"></script>


    <style type="text/css">
    @import "media/css/demo_table.css"
    .bs-example,.produtos{
      margin: 20px;
    }
    table,tr,td{
        border: 1px solid black;
        }
      td{text-align: center;}
      h1{
       text-align: center; 
      }
      .navbar{
        clear: both;
      }
      .contentor{
        padding-top: 130px;
      }
      
      .menus{
        margin-right: 80px;
      }
      #logo{
        margin-left: 10px;
      }


</style>

</head>

<body >
<?php
include_once("config/conexao.php");
?>

     <?php include_once('header.php'); ?>
                   

     <div class="contentor">
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">
                    <div class=" col-md-12">
                    <span class="section"><em><h2 align="center">Listagem de  Funcionarios</h2></em></span>


<?php
      
      $sql = "SELECT * FROM funcionario f inner join endereco e where f.cod_endereco=e.cod_endereco";
        $resultado = $conexao->query($sql);
        echo
        '<table  id="datatable" class="table table-striped table-bordered">
          <thead>
              <tr>
             <th>Nome</th> <th>Email</th>  <th>Nuit</th> <th>Telefone</th>
             <th>Bairro</th>   <th>Nr_casa</th>   <!--<th>Actions</th>-->
          </tr>
          </thead>';
        if ($resultado->num_rows > 0) {
            
            while($row = $resultado->fetch_assoc()) {
           
            $id=$row["cod_funcionario"];
            echo   '<tr> <td> '. $row["nome"].' </td> 
          <td> '. $row["email"].'  </td> 
           <td> '. $row["nuit"].'  </td> 
            <td> '. $row["telefone1"].'  </td> 
             <td> '. $row["bairro"].' </td>  
            <td> '. $row["nr_casa"].'  </td> 
               <!-- <td class="actions">
                                                    <a href="#">
                                                        <button class="btn btn-sm btn-primary">
                                                            <i class="glyphicon glyphicon-pencil"></i>
                                                            Edit
                                                        </button>
                                                    </a>
                                                    <a href="#">
                                                        <button class="btn btn-sm btn-success">
                                                            <i class="glyphicon glyphicon-ok-sign"></i>
                                                            Confirm
                                                        </button>
                                                    </a>
                                                    <a href="#">
                                                        <button class="btn btn-sm btn-warning">
                                                            <i class="glyphicon glyphicon-bell"></i>
                                                            Notify
                                                        </button>
                                                    </a>
                                                    <a href="#">
                                                        <button class="btn btn-sm btn-danger">
                                                            <i class="glyphicon glyphicon-trash"></i>
                                                            Delete
                                                        </button>
                                                    </a>
                                                </td>
          
          <td> -->
          </tr>';
          
            }
        } else {
              echo "0 results";
          }
        

      ?>      
      </table>

    <?php
        
      $conexao->close();
    ?>  
        


                      </div>


        
                         </div>
                </div>
              </div>
            </div>
           

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

          
  </div>
  
  <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a> 
       
 <!-- Modal scripts-->
        <script src="../lib/js/custom.js"></script>
      
          <script src="../lib/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
         <script src="../lib/js/fancybox/jquery.fancybox.pack.js"></script>
          <script src="../lib/js/skrollr.min.js"></script>   
          <script src="../lib/js/jquery.localscroll-1.2.7-min.js"></script>
        <script src="../lib/js/jquery.appear.js"></script>
          <script src="../lib/js/main.js"></script>


          <!--Query da datatable-->
          <script src="../lib/js/datatable/dataTables.bootstrap.min.js"></script>

 
 <!-- <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('.table').dataTable();
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
      });
    </script>-->

<script src="../lib/js/datatable/jquery.js" type="text/javascript"></script>
  <script src="../lib/js/datatable/jquery.dataTables.js" type="text/javascript"></script>
<script>
 $(document).ready(function() {
    $('#datatable').DataTable({
      "oLanguage":{
        "sUrl":"../lib/css/datatable/portugues.txt"
      }
    });
});
</script>
<script>
    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 300,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
            }
        });
    }
    window.onload = init();
</script>




   
  </body>
</html>