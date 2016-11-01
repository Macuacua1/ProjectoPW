<?php
session_start();//session starts here

include("../config/conexao.php");

if(isset($_POST['login']))
{
    //redirada de caracteres esp
    $user_email = isset($_POST["username"]) ? addslashes(trim($_POST["username"])) : FALSE; 
    // Recupera a senha, a criptografando em MD5 
    $user_pass = isset($_POST["password"]) ? (trim($_POST["password"])) : FALSE;
    //md5(trim($_POST["password"])) : FALSE; ===para encriptacao da password, 

    echo $user_pass."=====".$user_email;

    if(!$user_email || !$user_pass) 
    { 
      header('Location: ../view/carrinho.php?action=failed&email' . $user_email . '&password=' . $user_pass);
    }


    $conexao=new Conexao();
    $sql1="select * from utilizador u join funcionario f on u.cod_utilizador=f.cod_utilizador WHERE u.username='$user_email' and password='$user_pass'";
    $sql2="select * from utilizador u join cliente c on u.cod_utilizador=c.cod_utilizador WHERE u.username='$  user_email' and password='$user_pass'";
    if($conexao->query($sql2)) {
        $resultado = $conexao->query($sql2);
        if ($resultado->num_rows > 0) {      
           $_SESSION['user']=$user_email;
           $_SESSION['password']=$user_pass;
           header('Location: ../view/carrinho.php?action=sucesso');// Aqui a sessao e usada e o valor do $user_email e colocado na $_SESSION.

        } elseif ($resultado = $conexao->query($sql1)) {

            if ($resultado->num_rows > 0) {
              echo $user_email."--2--kheee--2--".$user_email;
              $_SESSION['email']=$user_email;// Aqui a sessao e usada e o valor do $user_email e colocado na $_SESSION.
              $_SESSION['password']=$user_pass;              
            header('Location:../view/pingendo/header.php?action=sucesso');
            //check to see if remember, ie if cookie
                
              }
      # code...
    }else
    {
        echo "<script>alert('Email ou password incorrectos!')</script>";
        header('Location: ../view/carrinho.php?action=failed&email' . $user_email . '&password=' . $user_pass);
     //header ("location: registarFuncionario.php");
  

    }


    }
    else{
      echo $user_email."--2--sweee--2--".$user_pass;
        $check="select * from utilizador u inner join cliente c on u.cod_utilizador=c.cod_utilizador WHERE u.username='$user_email' and password='$user_pass'";
          if ($resultado = $conexao->query($check)) {

            if ($resultado->num_rows > 0) {
              echo $user_email."--2--kheee--2--".
              $_SESSION['email']=$user_email;// Aqui a sessao e usada e o valor do $user_email e colocado na $_SESSION.
              $_SESSION['password']=$user_pass;
              header('Location: ../view/carrinho.php?action=sucesso');
            //check to see if remember, ie if cookie
                if(isset($this->post['remember'])) {
                    //set the cookies for 1 day, ie, 1*24*60*60 secs
                    //change it to something like 30*24*60*60 to remember user for 30 days
                    setcookie('email', $user_email, time() + 1*24*60*60);
                    setcookie('pass', $user_pass, time() + 1*24*60*60);
                } else {
                    //destroy any previously set cookie
                    setcookie('email', '', time() - 1*24*60*60);
                    setcookie('pass', '', time() - 1*24*60*60);
                }
              }
      # code...
    }else
    {
        echo "<script>alert('Email ou password incorrectos!')</script>";
        header('Location: ../view/carrinho.php?action=failed&email' . $user_email . '&password=' . $user_pass);
     //header ("location: registarFuncionario.php");
  

    }
  }
    
 }
    

?>