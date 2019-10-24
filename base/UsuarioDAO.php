<?php 

class UsuarioDAO{
	public $nome;
	public $email;
	public $senha;

	public $con;

	function __construct(){
		$this->con = mysqli_connect("localhost", "root", "", "projetopw");
	}

	public function inserir(){
		$sql = "INSERT INTO usuarios VALUES (0, '$this->nome', '$this->email', '$this->senha')";
		$rs = $this->con->query($sql);
		if ($rs) 
			header("Location: usuarios.php");
		else 
			echo $this->con->error;
	}

	public function buscar(){
		$sql = "SELECT * FROM usuarios ORDER BY nome";
		$rs = $this->con->query($sql);
		$listaUsuarios = array();
		if ($rs) {
			while ($registro = $rs->fetch_object()) $listaUsuarios[] = $registro;
		}else{
			echo $this->con->error;
		}
		return $listaUsuarios;
	}

	public function apagar(){
		$sql = "DELETE FROM usuarios WHERE idUsuario=$this->id";
		$rs = $this->con->query($sql);
		if ($rs) 
			header("Location: usuarios.php");
		else 
			echo $this->con->error;
	}

	public function alterarSenha($novaSenha){
		$sql = "UPDATE usuarios SET senha='$novaSenha' WHERE idUsuario=$this->id";
		$rs = $this->con->query($sql);
		if ($rs) 
			header("Location: usuarios.php");
		else 
			echo $this->con->error;
	}
}

?>