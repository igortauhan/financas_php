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

if (isset($_POST['btn-atualizar'])) {
	$descricao = clear($_POST['descricao']);
	$valor = clear($_POST['valor']);
	$data = clear($_POST['data']);

	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE gestao SET descricao = '$descricao', valor = '$valor', data = '$data' WHERE id = '$id'";

	if(mysqli_query($connect, $sql)) {
		header('Location: ../index.php?sucess');
	}
	else {
		header('Location: ../index.php?error');
	}
}