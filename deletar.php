<?php
//header
include_once 'includes/header.php';
//conexao
include_once 'php_actions/db_connect.php';

if (isset($_GET['id'])) {
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM gestao WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
}
?>

<div class="row">
	<div class="col 12 m6 push-m3">
		<h1>Deletar registro de gasto?</h1>
		<form action="php_actions/delete.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
			<button type="submit" name="btn-deletar" class="btn red">DELETAR</button>
			<a href="index.php" class="btn green"> Cancelar </a>
		</form>
	</div>
</div>

<?php
include_once 'includes/footer.php';