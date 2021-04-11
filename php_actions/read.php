<?php
$sql = "SELECT * FROM gestao";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
while($dados = mysqli_fetch_array($resultado)){
?>
<tr>
<td><?php echo $dados['descricao'] ?></td>
<td><?php echo $dados['valor'] ?></td>
<td><?php echo $dados['data'] ?></td>
<td><a href="editar.php" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
<td><a href="deletar.php" class="btn-floating red"><i class="material-icons">delete</i></a></td>
</tr>
<?php } ?>