<?php
//header
include_once 'includes/header.php';
?>

<div class="row">
	<div class="col 12 m6 push-m3">
		<h3>Adicionar gasto</h3>
		<form action="create.php" method="POST">
			<div class="input-field col s12">
				<input type="text" name="descricao" id="descricao">
				<label for="descricao">Descrição</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="valor" id="valor">
				<label for="valor">Valor</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="data" id="data">
				<label for="data">Data</label>
			</div>
			<button type="submit" name="btn-adicionar" class="btn"> Adicionar </button>
			<a href="index.php" class="btn green"> Lista de gastos </a>
		</form>
		<br>
	</div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>