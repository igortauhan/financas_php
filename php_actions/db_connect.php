<?php
//conexao com o banco
$server = "localhost";
$username = "root";
$password = "";
$db_name = "financas";

$connect = mysqli_connect($server, $username, $password, $db_name);
mysqli_set_charset($connect, "utf-8");

if (mysqli_connect_error()) {
	echo "Erro na conexão".mysqli_connect_error();
}