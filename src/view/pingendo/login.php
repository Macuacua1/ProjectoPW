<?php
session_start();//session starts here

?>



<?php

include("config/conexao.php");

if(isset($_POST['login']))
{
     echo "Acheiiiii o botao";
    $user_email=$_POST['username'];
    $user_pass=$_POST['password'];

    $check_email="select * from utilizador u inner join funcionario f on u.cod_utilizador=f.cod_utilizador WHERE u.username='$user_email'";
     $resultado = $conexao->query($check_email);

    if ($resultado->num_rows > 0) {
        echo "Acheiiiii Funcionario";
        echo "<script>window.open('home.php','_self')</script>";
       $_SESSION['email']=$user_email;// Aqui a sessao e usada e o valor do $user_email e colocado na $_SESSION.


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

    }else
    {
          $check="select * from utilizador u inner join cliente c on u.cod_utilizador=c.cod_utilizador WHERE u.username='$user_email'";
     $resultado = $conexao->query($check);


    if ($resultado->num_rows > 0) {
        echo "Acheiiiii Cliente";
        echo "<script>window.open('home.php','_self')</script>";
       $_SESSION['email']=$user_email;// Aqui a sessao e usada e o valor do $user_email e colocado na $_SESSION.


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
            }}

   
    else
    {
        echo "<script>alert('Email ou password incorrectos!')</script>";
     //header ("location: registarFuncionario.php");
  

    }
    }
    
}
?>