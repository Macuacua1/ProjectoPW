<?php
	class conexao{
	
	
		private $servername="localhost";
		private $username= "root";
		private $database="db_locacao";
		private $password= "";

		public $conexao=null;
		//connect to the db
		function conexao(){

			$this->conexao = new mysqli($this->servername, $this->username, $this->password,$this->database);
				
			
				if($this->conexao->connect_error){
					
					die('connexao falhou '.$this->conexao->connect_error);
					
				}	
		}	


		function query($sql){	return $this->conexao->query($sql);		}

		public function getConeccao(){	return $this->conexao;	}

		public function closeConexao(){	$this->conexao->close();	}
		
	}
 ?>