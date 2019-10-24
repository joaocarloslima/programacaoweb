<?php 

if (!isset($_SERVER["PATH_INFO"])) {
	echo "inicio";
	exit();
}

switch ($_SERVER["PATH_INFO"]) {

 	case '/usuarios':
 		require("usuarios.php");
 		break;
 	
 	case '/questoes':
 		require("questoes.php");
 		break;

 	default:
 		echo "Erro 404 - página não encontrada";
 		break;
 } 
?>
