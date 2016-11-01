<?php
session_start();
 echo "string==>".$_POST['alter_quant'];
 if (isset($_POST['alter_quant'])) {
        $quantity=$_POST['quant'];   
        $cod=$_POST['cod_art'];
        $art= isset($_POST['designacao'])? $_POST['designacao'] : "";
        echo $cod."antes---".$_SESSION['carrinho'][$cod]." --".$art;
    if (!empty($_SESSION['carrinho'][$cod])) {
            # code...
    		echo $cod."aquiii".$art;
            $_SESSION['carrinho'][$cod]=$quantity;
            header('Location: ../view/carrinho.php?action=quantity_updated&id' . $cod . '&name=' . $art);
    }

        # code...
}
// get the product id
$id = isset($_GET['id']) ? $_GET['id'] : "";
$name = isset($_GET['name']) ? $_GET['name'] : "";
$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : "";

if(isset($_GET['ac'])=='clear_all'):
    unset($_SESSION['carrinho']);
	header('Location: ../view/carrinho.php?action=clear_all');

//para accao apagar, apaga um a um
elseif(isset($_GET['accao'])=='clear'):
    $id=intval($_GET['id']);
    if (isset($_GET['id'])) {
        unset($_SESSION['carrinho'][$id]);
       
        header('Location: ../view/carrinho.php?action=clear&id' . $id . '&name=' . $name);

    }
endif;

?>