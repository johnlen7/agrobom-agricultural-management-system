<?php
ob_start();
require 'conexao.php';

//URL
$url = $mysqli->real_escape_string($_POST['url']);

//validadores
$comando = $mysqli->real_escape_string($_POST['zerar']);
$validador = $mysqli->real_escape_string($_POST['4123431242zerando11']);

if (isset($validador) AND $validador == '2315412552352343' AND isset($comando) AND $comando == 'Execultar'){

	$execultor = "UPDATE usuarios SET pontos_carreira = '0'";
	$execultor_final = $mysqli->query($execultor);

	header('location: '.$url.'?con=Alterações Salvas Com Sucesso');
} 
?>