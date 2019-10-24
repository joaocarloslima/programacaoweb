<?php 

include "UsuarioDAO.php";

switch ($_GET["acao"]) {
	case 'novo':
		$usuario = new UsuarioDAO();
		$usuario->nome = $_POST["nome"];
		$usuario->email = $_POST["email"];
		$usuario->senha = $_POST["senha"];
		$usuario->inserir();
		break;
	
	case 'apagar':
		$usuario = new UsuarioDAO();
		$usuario->id = $_GET["id"];
		$usuario->apagar();
		break;
	
	case 'senha':
		$usuario = new UsuarioDAO();
		$usuario->id = $_POST["id"];
		$usuario->alterarSenha($_POST["senha"]);
		break;

	default:
		break;
}


?>