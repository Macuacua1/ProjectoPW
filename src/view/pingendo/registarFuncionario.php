<?php


if(isset($_POST["registar"]))
{
    $nome=$_POST["nome"];
    $bi=$_POST["bi"];
    $email=$_POST["email"];
   $nuit=$_POST["nuit"];
    $cell=$_POST["cell"];
    $senha=$_POST["senha"];
    $bairro=$_POST["bairro"];
    $quarteirao=$_POST["quarteirao"];
    $avenida=$_POST["avenida"];
    $casa=$_POST["nr_casa"];

include_once("config/conexao.php");
 
   $check_email="select * from utilizador WHERE username='$email'";
     $resultado = $conexao->query($check_email);

    if ($resultado->num_rows > 0) {
echo "<script>alert('Funcionario ja existente, use outro email!')</script>";
header("Location: funcionario_registo.php");
exit();
    } 
   
   $check_email_query="select * from utilizador WHERE username='".$email."'";
     $resultado = $conexao->query($check_email_query);

    if ($resultado->num_rows > 0) {
echo "<script>alert('Funcionario ja existente, use outro email!')</script>";
echo "Funcionario ja existente, use outro email!";
exit();
    }
     
 $endereco = "INSERT INTO endereco (bairro,quarteirao,avenida_rua,nr_casa)
        VALUES ('".$bairro."', '".$quarteirao."', '".$avenida."','".$casa."')";
         
      
        if ($conexao->query($endereco) === TRUE) {
    echo "Salvo com sucesso";
} else {
    echo "Erro ao salvar endereco: " . $endereco . "<br>" . $conexao->error;
}
 $utilizador = "INSERT INTO utilizador (username,password)
        VALUES ('".$email."', '".$senha."')";
         

        if ($conexao->query($utilizador) === TRUE) {
    echo "Salvo com sucesso";
} else {
    echo "Erro ao salvar: " . $utilizador . "<br>" . $conexao->error;
}

  $IdEndereco=mysqli_insert_id($conexao);
  $IdUtilizador=mysqli_insert_id($conexao);
  echo $IdEndereco;
  echo $IdUtilizador;

  $funcionario = "INSERT INTO funcionario (nome,bi,nuit,email,telefone1,cod_endereco,cod_utilizador)
        VALUES ('".$nome."', '".$bi."', '".$nuit."','".$email."','".$cell."','".$IdEndereco."','".$IdUtilizador."')";

if ($conexao->query($funcionario) === TRUE) {
    echo "Salvo com sucesso";
} else {
    echo "Erro ao salvar: " . $funcionario . "<br>" . $conexao->error;
}

$conexao->close();
}

?>