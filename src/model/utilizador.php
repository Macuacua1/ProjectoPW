<?php

	include_once "../config2/conexao.php";
	?>

<?php	

/**
* 
*/
$con=null;
class utilizador
{
	private $username;
	private $password;
	private $id;
	
	
	public function utilizador(){	}	

	public function registar(){
		$con=new Conexao();
		$sql="INSERT INTO utilizador(username,password) VALUES ('$this->username', '$this->password')";
		if($con->conexao->query($sql))
		{
			header("Location: index.php");
		}else
		{
			echo "Falha ao gravar ".$conexao->error;
		}
	}

	public function listar(){
		$con=new Conexao();
		$sql="SELECT * FROM utilizador";		
			return $con->conexao->query($sql);
		
	}

	public function actualizar($id){
		$conexao=new Conexao();
		$sql = "UPDATE utilizador SET username='$username', password='$password'
				WHERE id='$id'"; 
		$conexao->query($sql);

	}
	public function pegarUser($user, $pwd){

		$conexao=new Conexao();
		
		$sql = "SELECT username, password FROM utilizador WHERE username='$user' and password='$pwd'";
		$result=$conexao->query($sql);//($sql);
		if ($result->num_rows>0) {
			return $conexao->query($sql);//return true;
		}else
			return false;
	}
	public function removers($id){
		$sql="DELETE FROM utilizador WHERE id=$id";
	
		if ($conexao->query($query) === TRUE) {

		    echo "Removido com sucesso";
		} else {
		    echo "Erro ao Remover: " . $query . "<br>" . $conexao->error;
		}
	}

	public function getUsername(){	return $this->username;}

	public function getPassword(){	return $this->password;}

	public function getCodigo(){	return $this->id;}

	public function setUsername($username){	$this->username=$username;}

	public function setPassword($password){	$this->password=$password;}

	}

?>