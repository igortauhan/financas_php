<?php
//header
include_once 'includes/header.php';
//conexao
include_once 'php_actions/db_connect.php';
?>

<div class="row">
	<div class="col 12 m6 push-m3">
		<h3>Pesquisa avançada</h3>
		<form action="php_actions/search.php" method="POST">
			<div class="input-field col s12">
				<input type="text" name="data" id="data">
				<label for="campo">Data</label>
			</div>
			<button type="submit" name="btn-procurar" class="btn">Procurar</button>
		</form>
	</div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>