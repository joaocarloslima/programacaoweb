<?php 
session_start();
if (!isset($_SESSION["logado"]) OR !$_SESSION["logado"]){
	header("Location: /");
	exit();
}