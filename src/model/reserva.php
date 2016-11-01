<?php

	include_once "../config/conexao.php";
	?>

<?php
	/**
	* 
	*/
	class reserva 
	{
		private $cod_artigo;
		private $cod_cliente;
		private $data;
		private $quant;
		private $cod_funcionario;
		private $cod_fatura;
		private $cod_tipo_reserva;

		public function reserva($cod_artigo,$cod_cliente,$data,$quant,$cod_funcionario,$cod_fatura,$cod_tipo_reserva)
		{	
			$this->cod_artigo=$cod_artigo;
			$this->cod_cliente= $cod_cliente;
			$this->data= $data;
			$this->quant= $quant;
			$this->cod_funcionario= $cod_funcionario;
			$this->cod_fatura= $cod_fatura;
			$this->cod_tipo_reserva=$cod_tipo_reserva;
		}
		function __construct( ){

			

		}
		public function save(){

			
			$conexao=new Conexao();
			echo $this->cod_artigo.'==='.$this->cod_cliente.'==='.
						$this->data.'==='.$this->quant.'==='.$this->cod_funcionario.'==='.$this->cod_fatura.'==='.$this->cod_tipo_reserva;

			$sql="INSERT INTO reserva (cod_artigo,cod_cliente,data,quant,cod_funcionario,cod_factura,cod_tipo_reserva) values('$this->cod_artigo','$this->cod_cliente',
						'$this->data','$this->quant','$this->cod_funcionario',
						'$this->cod_fatura','$this->cod_tipo_reserva')";
                         // values($art,$cliente,$data,$q,$cod_f)";

			if($conexao->conexao->query($sql))
			{
				echo "Gravado com Sucesso! ";
			}else
			{
				echo "Falha ao gravar ".$conexao->error;
			}

		}
		public function selectById($user, $pwd){

			$conexao=new Conexao();
		
			$sql = "SELECT * FROM reserva WHERE cod_artigo='$this->cod_artigo' and cod_cliente='$this->cod_cliente' and data='$this->data' ";
			$result=$conexao->query($sql);//($sql);
			if ($result->num_rows>0) {
				return $conexao->query($sql);//return true;
			}else
				return false;
		}
		public function selectAll(){
			$con=new Conexao();
			$sql="SELECT * FROM reserva";		
			return $con->conexao->query($sql);

		}
		public function update(){
			$conexao=new Conexao();
			$sql = "UPDATE reserva SET quant='$this->quant', cod_funcionario='$this->cod_funcionario',
					cod_fatura='this->cod_fatura',cod_tipo_reserva='$this->cod_tipo_reserva'
					WHERE cod_artigo='$this->cod_artigo' and cod_cliente='$this->cod_cliente' and data='this->data'"; 
			$conexao->query($sql);

		}
		public function remove(){

			$sql="DELETE FROM reserva WHERE cod_artigo=$id and cod_cliente=$cod_cliente and data=$data";
	
		if ($conexao->query($query) === TRUE) {

		    echo "Removido com sucesso";
			} else {
			    echo "Erro ao Remover: " . $query . "<br>" . $conexao->error;
			}


		}
	}



?>