<?php
//header
include_once 'includes/header.php';
//conexao
include_once 'php_actions/db_connect.php';
?>

<div class="row">
	<div class="col 12 m6 push-m3">
		<h3>Gestão financeira</h3>
		<table>
			<thead>
				<tr>
					<th>Descrição</th>
					<th>Valor</th>
					<th>Data</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql = "SELECT * FROM gestao";
				$resultado = mysqli_query($connect, $sql);
				while($dados = mysqli_fetch_array($resultado)){
				?>
				<tr>
					<td><?php echo $dados['descricao'] ?></td>
					<td><?php echo $dados['valor'] ?></td>
					<td><?php echo $dados['data'] ?></td>
					<td><a href="editar.php?id=<?php echo $dados['id'] ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
					<td><a href="deletar.php?id=<?php echo $dados['id'] ?>" class="btn-floating red"><i class="material-icons">delete</i></a></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
		<br>
		<a href="adicionar.php" class="btn">Adicionar gasto</a>
		<a href="procurar.php" class="btn blue">Pesquisar gasto</a>
	</div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>