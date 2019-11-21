<?php 
function mostrarAlerta($tipo){
	if (isset($_SESSION[$tipo])){
		echo "<div class='alert alert-$tipo'>$_SESSION[$tipo]</div>";
		unset($_SESSION[$tipo]);
	}
}
