<?php 

include "TiposDAO.php";

$acao = $_GET["acao"];

switch ($acao) {
	case 'inserir':
		$tipo = new TiposDAO();
		$tipo->tipo = $_POST["tipo"];
		$tipo->inserir();
		break;

	case 'apagar':
		$tipo = new TiposDAO();
		$id = $_GET["id"];
		$tipo->apagar($id);
		break;

	default:
		echo "acao não reconhecida";
		break;
}




?>