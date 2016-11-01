<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
  	<link rel="stylesheet" type="text/css" href="../../lib/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../lib/js/bootstrap.min.js">
  </head>
  <body>
     <?php include ("header.php"); ?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="bs-example jumbotron col-md-12">
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Disponibilidade</a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <p>Segunda a sexta-feira: 9h-12h e 13h30min-18h</p>
                    <p>Sábado: 9h-12h</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"> Reserva de Material</a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Aconselhamos que a reserva seja feita assim que o cliente definir os itens
                      de sua locação, pois</p>
                    <p>não podemos prever prazos para a disponibilidade dos materiais. A reserva
                      é válida mediante</p>
                    <p>pagamento de pelo menos 25% do valor do pedido, devidamente confirmado/comprovado,
                      devendo</p>
                    <p>o saldo ser quitado até a data do evento.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> Quantidade Mínima de locação</a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Não existe quantidade mínima de artigos a serem locados. Entretanto, a
                      locação está sujeita à</p>
                    <p>disponibilidade no momento da reserva</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"> Devolução do material</a>
                  </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>O material deve ser devolvido no prazo acordado, nas embalagens de entrega,
                      limpo (com exceção de</p>
                    <p>tecidos) e na presença de um responsável para sua conferência. No caso
                      de louças em geral</p>
                    <p>serem devolvidas sujas ou mal lavadas, cobraremos uma taxa de limpeza.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"> Forma de pagamento</a>
                  </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Para efetivação da reserva é necessário o pagamento de pelo menos 25%
                      do pedido. Neste momento, se</p>
                    <p>o cliente não quiser pagar o valor integral do pedido, poderá pagar apenas
                      a reserva, devendo</p>
                    <p>o saldo ser quitado até 72h antes da entrega, ou a partir deste momento
                      poderá parcelar o</p>
                    <p>valor total do pedido. Formas disponíveis: dinheiro, cheque, cartão (Visa
                      e Mastercard) e depósito</p>
                    <p>bancário (Bradesco)</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix"> Transporte</a>
                  </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>O valor do transporte é calculado em função dos materiais e suas quantidades,
                      endereço de entrega</p>
                    <p>coleta, assim como acessibilidade do local.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Fim de-container deo conteudo-->
      </div>
    </div>
    
    <?
      include_once 'footer.php';
    ?>
  

</body></html>