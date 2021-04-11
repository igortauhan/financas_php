<?php
//header
include_once 'includes/header.php';
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
				<tr>
					<td>Compra</td>
					<td>R$ 50.00</td>
					<td>11/04/2021</td>
					<td><a href="editar.php" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
					<td><a href="deletar.php" class="btn-floating red"><i class="material-icons">delete</i></a></td>
				</tr>
			</tbody>
		</table>
		<br>
		<a href="adicionar.php" class="btn">Adicionar gasto</a>
	</div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>