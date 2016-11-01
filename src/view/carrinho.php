<?php


include_once '../config/conexao.php';
include_once"../model/reserva.php";
include 'header.php';

$page_title="Carrinho";
 
$action = isset($_GET['action']) ? $_GET['action'] : "";
$name = isset($_GET['name']) ? $_GET['name'] : "";
$pwd=isset($_GET['password']) ? $_GET['password'] : "";

if($action=='quantity_updated'){
    echo "<div class='alert alert-info'>";
        echo " A Quantidade de <strong>{$name}</strong> foi Actualizada!";
    echo "</div>";
}elseif($action=='clear'){
        # code...
    echo "<div class='alert alert-danger'>";
    echo "<strong>Produto ".$name."</strong> Removido!";
    echo "</div>";
}
elseif($action=='clear_all' ){
        # code...
    echo "<div class='alert alert-danger'>";
    echo "<strong>Todos Artigos foram removidos</strong> do carrinho!";
    echo "</div>";
}
elseif($action=='quantity_updated' ){
        # code...
    echo "<div class='alert alert-info'>";
    echo "<strong>No products found</strong> in your cart!";
    echo "</div>";
}
elseif($action=='failed' ){
        # code...
    echo "<div class='alert alert-danger'>";
    echo "<strong>Dados Incorretos! Username: {$name} e Password: {$pwd}</strong> !";
    echo "</div>";
}

if(!isset($_SESSION['carrinho']) or count($_SESSION['carrinho'])<1 ){
        # code...
    echo "<div class='alert alert-danger'>";
    echo "<strong>Não existe nenhum artigo </strong> no carrinho!";
    echo "</div>";
}
//para accao Fazer Reserva
    $art=null;
  
    $data=date('Y/m/d');

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
                        echo "<div class='alert alert-info'>";
                            echo "<strong>Reserva efectuda com sucesso </strong>!";
                        echo "</div>";
                }
                unset($_SESSION['carrinho']);  
            }
        }
    }


    


        echo" <div class='section'>
            <div class='container'>
                <div class='row'>
                    <div class='col-md-12'>
                        <div class='panel panel-primary'>
                            <div class='panel-heading'>
                                <h1 class='panel-title'>Carrinho</h1>
                            </div>
                            <div class='panel-body'>
                                <p></p>
                               
                                <table class='table'>
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
                                    <tbody>";
                                    
                                     $total=0;
                                       
                                           
                        if(isset($_SESSION['carrinho'])) {
                                       
                                           

                                                 echo "<tr>";
                                                 
                            if(count($_SESSION['carrinho'])>0){
						 
						    // get the product ids
						    $ids = "";
						    foreach($_SESSION['carrinho'] as $id=>$value){
							 $ids = $ids . $id . ",";

                            }
						 
						    // remove the last comma
						    $ids = rtrim($ids, ',');
                            $con=new conexao();
						    $sql = "select * FROM artigo a join foto f on a.cod_artigo=f.cod_artigo
                                         WHERE f.cod_artigo IN ({$ids}) ORDER BY a.designacao";
                            $result=$con->query($sql);//($sql);
                            if ($result->num_rows>0) {

                            while ($f=$result->fetch_assoc()) {
                                    // $id=cod_artigo;
                                    $quant=intval($_SESSION['carrinho'][$f['cod_artigo']]);
                                    $subtotal=$f['preco_unitario']*$quant;
                                                   

                                    		echo"
                                                    <form action='../controller/operacoesCart.php' method='POST'> 
                                                    <td> <img src=../../Imagens/$f[nome] </td>
                                                    <td> $f[designacao] 		 </td>
                                                    <td>$f[preco_unitario] </td>
                                                    <input type='hidden' name='cod_art' value=$f[cod_artigo] ></input>
                                                    <input type='hidden' name='designacao' value=$f[designacao] ></input>
                                                    <td><input type='number' name='quant' min='1'
                                                         value=".$quant."  ></input>
                                                        <input type='submit' name='alter_quant' value='actualizar' class='btn btn-primary'>
                                                    </td>
                                                    <td>"; echo" Mt ".number_format($subtotal,2,',','.')."</td>
                                                    <td><a href='../controller/operacoesCart.php?accao=clear&id=$f[cod_artigo]&name=$f[designacao]' class='btn btn-danger'>X</a></td>
                                                    </tr>
                                                    </form>";
						//end echo
                                                    $total+=$subtotal;
                                                   
                                                    }

                                                    }else{
                                                }
                                                    
                                            //end foreach
                                            //endif;// endif;//if empty(section)
                                   echo " 
                                    
                                        
                                        
                                    </tbody>
                                    <a href='../controller/operacoesCart.php?ac='clear_all'><input type='submit' name='limpar' class='btn btn-success' value='Limpar todos'>
                                    			   </input>
                                    <a href='produtos.php'><input type='submit' class='btn btn-success' value='Adicionar Mais '></input></a>

                                   <!--  <button type='button' class='btn btn-success' data-toggle='modal'
                                    data-target='#popUpWindow'>Terminar</button> -->

                                    <a href='?accao=reservar'><input type='submit' class='btn btn-success' value='Terminar  '></input>
                                  <!--   <a href='produtos.php'><input type='submit' class='btn btn-success' value='Reservas Mais '>
                                  	</input></a> -->
                                    
                                </table>";}} echo "
                                Total ";echo" Mt ".number_format($total,2,',','.')."
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 ";

?>
<?
    include 'footer.php';
?>
