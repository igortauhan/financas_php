<?php
//header
include_once 'includes/header.php';
//conexao
include_once 'php_actions/db_connect.php';
//select
if (isset($_GET['id'])) {
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM gestao WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
}
?>

<div class="row">
	<div class="col 12 m6 push-m3">
		<h3>Gestão financeira</h3>
		<form action="php_actions/update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id']?>">
			<div class="input-field col s12">
				<input type="text" name="descricao" value="<?php echo $dados['descricao'] ?>" id="descricao">
				<label for="descricao">Descrição</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="valor" value="<?php echo $dados['valor'] ?>" id="valor">
				<label for="valor">Valor</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="data" value="<?php echo $dados['data'] ?>" id="data">
				<label for="data">Data</label>
			</div>
			<button type="submit" name="btn-atualizar" class="btn"> Atualizar </button>
			<a href="index.php" class="btn green"> Lista de gastos </a>
		</form>
	</div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>