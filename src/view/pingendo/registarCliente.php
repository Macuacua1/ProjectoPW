

<?php


if(isset($_POST["registar"]))
{
    $nome=$_POST["nome"];
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
header("Location: clienteRegisto.php");
exit();
    } 
    echo "<script>alert('Funcionario ja existente, use outro email!')</script>";
   
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

  $cliente = "INSERT INTO cliente (nome,nuit,email,telefone1,cod_endereco,cod_utilizador)
        VALUES ('".$nome."', '".$nuit."','".$email."','".$cell."','".$IdEndereco."','".$IdUtilizador."')";

if ($conexao->query($cliente) === TRUE) {
    echo "Salvo com sucesso";
} else {
    echo "Erro ao salvar: " . $cliente . "<br>" . $conexao->error;
}

$conexao->close();
}

?>