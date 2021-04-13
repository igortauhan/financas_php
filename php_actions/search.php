<?php
//conexao
require_once 'db_connect.php';

//header
include_once '../includes/header.php';

if (isset($_POST['btn-procurar'])) {
	$data = mysqli_escape_string($connect, $_POST['data']);
	$sql = "SELECT * FROM gestao WHERE data = '$data'";

	$resultado = mysqli_query($connect, $sql);
	
	while($dados = mysqli_fetch_array($resultado)) {
	?>
	<div class="row">
		<div class="col 12 m6 push-m3">
			<h3>Resultado</h3>
			<table>
				<thead>
					<tr>
						<th>Descricao</th>
						<th>Valor</th>
						<th>Data</th>
					</tr>
				</thead>
				<tbody>
					<td><?php echo $dados['descricao']; ?></td>
					<td><?php echo $dados['valor']; ?></td>
					<td><?php echo $dados['data']; ?></td>
				</tbody>
			</table>
		</div>
	</div>
	<?php } 
} ?>

<div class="row">
	<div class="col 12 m6 push-m3">
		<a href="../index.php" class="btn"> Lista de gastos </a>
	</div>
</div>

<?php
//footer
include_once '../includes/footer.php';