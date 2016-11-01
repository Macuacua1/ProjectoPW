<?php
session_start();
 
// get the product id
$id = isset($_GET['id']) ? $_GET['id'] : "";
$name = isset($_GET['name']) ? $_GET['name'] : "";
$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : "";
 
/*
 * check if the 'cart' session array was created
 * if it is NOT, create the 'cart' session array
 */
if(!isset($_SESSION['carrinho'])){
    $_SESSION['carrinho'] = array();
}
 
if(array_key_exists($id, $_SESSION['carrinho'])){
    // redirect to product list and tell the user it was added to cart
	$_SESSION['carrinho'][$id]=$_SESSION['carrinho'][$id]+1;
	echo $id."string".$name;
    header('Location: ../view/produtos.php?action=exists&id' . $id . '&name=' .$name);
} 
// else, add the item to the array
else{
    $_SESSION['carrinho'][$id]=1;
 	echo $id."string".$name;

    // redirect to product list and tell the user it was added to cart
    header('Location:  ../view/produtos.php?action=added&id' . $id . '&name=' . $name);
}


?>
