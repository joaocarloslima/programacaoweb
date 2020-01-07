<?php 
include "config.php";

class TiposDAO{
	public $id;
	public $tipo;

	private $con;

	function __construct(){
		$this->con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	}

	public function apagar($id){
		$sql = "DELETE FROM tipo_questao WHERE idTipoQuestao=$id";
		$rs = $this->con->query($sql);
		if ($rs) {
			session_start();
			$_SESSION["success"] = "Tipo excluído com sucesso";
			header("Location: /tipos");
		}
		else {
			session_start();
			$_SESSION["danger"] = "Erro ao apagar tipo.";
			header("Location: /tipos");
		}

	}

	public function inserir(){
		$sql = "INSERT INTO tipo_questao VALUES (0, '$this->tipo' )";
		$rs = $this->con->query($sql);

		if ($rs){
			session_start();
			$_SESSION["success"] = "Tipo cadastrado com sucesso";
			header("Location: /tipos");
		} 
		else 
			echo $this->con->error;
	}

	public function buscar(){
		$sql = "SELECT * FROM tipo_questao";
		$rs = $this->con->query($sql);
		$listaDeTipos = array();
		while ($linha = $rs->fetch_object()){
			$listaDeTipos[] = $linha;
		}
		return $listaDeTipos;
	}

}


?>