<?php 

if (!isset($_SERVER["PATH_INFO"])) {
	require("login.php");
	exit();
}

switch ($_SERVER["PATH_INFO"]) {

 	case '/usuarios':
 		require("usuarios.php");
 		break;
 	
 	case '/questoes':
 		require("questoes.php");
 		break;

 	case '/alternativas':
 		require("alternativas.php");
 		break;

 	default:
 		echo "Erro 404 - página não encontrada";
 		break;
 } 
?>
