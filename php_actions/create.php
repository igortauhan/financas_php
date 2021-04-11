<?php
//conexao
require_once 'db_connect.php';

function clear($input) {
	//conexao
	global $connect;

	$var = mysqli_escape_string($connect, $input);
	$var = htmlspecialchars($var);

	return $var;
}

if (isset($_POST['btn-adicionar'])) {
	$descricao = clear($_POST['descricao']);
	$valor = clear($_POST['valor']);
	$data = clear($_POST['data']);

	$sql = "INSERT INTO gestao (descricao, valor, data) VALUES ('$descricao', '$valor', '$data')";

	if(mysqli_query($connect, $sql)) {
		header('Location: ../index.php');
	}
	else {
		header('Location: ../index.php');
	}
}