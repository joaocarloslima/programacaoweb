<?php 

include "AlternativasDAO.php";

$acao = $_GET["acao"];

switch ($acao) {
	case 'inserir':
		$alternativa = new AlternativasDAO();
		$alternativa->texto = $_POST["texto"];
		$alternativa->idQuestao = $_POST["idQuestao"];
		$alternativa->imagem = "NULL";
		if (isset($_POST["correta"])) $alternativa->correta = 1;
		else $alternativa->correta = 0;
		if(isset($_FILES['imagem'])){
		    $ext = strtolower(substr($_FILES['imagem']['name'],-4)); //Pegando extensão do arquivo
		    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
		    $dir = './imagens/'; //Diretório para uploads 
		    move_uploaded_file($_FILES['imagem']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
			$alternativa->imagem = $dir.$new_name;
		} 
		$alternativa->inserir();
		break;

	case 'apagar':
		$alternativa = new AlternativasDAO();
		$id = $_GET["id"];
		$idQuestao = $_GET["idQuestao"];
		$alternativa->apagar($id, $idQuestao);
		break;

	case 'editar':
		$alternativa = new AlternativasDAO();
		$alternativa->id = $_POST["id"];
		$alternativa->texto = $_POST["texto"];
		$alternativa->tipo = $_POST["tipo"];
		$alternativa->editar();
		break;

	default:
		echo "acao não reconhecida";
		break;
}




?>