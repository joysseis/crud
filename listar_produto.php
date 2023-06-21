<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listagem de produtos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/1ec9d0b93b.js" crossorigin="anonymous"></script>



</head>
<body>

	<div class="container" style="margin-top: 40px;">
				<div style="text-align: right;">
	      <a href="index.php" role="button" class="btn btn-primary">Voltar</a>
      </div>
      
		<h3> Lista de Produtos</h3>
		<br>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">numero_produto</th>
			      <th scope="col">nome_produto</th>
			      <th scope="col">categoria</th>
			      <th scope="col">quantidade</th>
			      <th scope="col">fornecedor</th>
			    </tr>
			  </thead>

			      	<?php 
			      		include 'conexao.php';
			      		$sql = "SELECT * FROM `estoque`";
			      		$busca = mysqli_query($conexao, $sql);

			      		while ($array = mysqli_fetch_array($busca)) {

			      			$id_estoque = $array['id_estoque'];
			      			$numero_produto = $array['numero_produto'];
			      			$nome_produto = $array['nome_produto'];
			      			$categoria = $array['categoria'];
			      			$quantidade = $array['quantidade'];
			      			$fornecedor = $array['fornecedor'];
			      		?>
			     	<tr>

					     <td><?php echo $numero_produto ?></td>
					     <td><?php echo $nome_produto ?></td>
					     <td><?php echo $categoria ?></td>
					     <td><?php echo $quantidade ?></td>
					     <td><?php echo $fornecedor ?></td>
					     <td><a class="btn btn-warning" style="color: orangered;" href="editar_produto.php?id=<?php echo $id_estoque?>" role="button"> Editar</a>
					     <a class="btn btn-danger" style="color: darkred;" href="deletar_produto.php?id=<?php echo $id_estoque?>" role="button"><i class="fa-sharp fa-solid fa-trash"></i> Excluir</a>

					     </td>



		
			   		</tr>
			    <?php } ?>

			</table>

	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
=======
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listagem de produtos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


</head>
<body>


	<div class="container" style="margin-top: 40px;">
		<h3> Lista de Produtos</h3>
		<br>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">numero_produto</th>
			      <th scope="col">nome_produto</th>
			      <th scope="col">categoria</th>
			      <th scope="col">quantidade</th>
			      <th scope="col">fornecedor</th>
			    </tr>
			  </thead>

			      	<?php 
			      		include 'conexao.php';
			      		$sql = "SELECT * FROM `estoque`";
			      		$busca = mysqli_query($conexao, $sql);

			      		while ($array = mysqli_fetch_array($busca)) {

			      			$id_estoque = $array['id_estoque'];
			      			$numero_produto = $array['numero_produto'];
			      			$nome_produto = $array['nome_produto'];
			      			$categoria = $array['categoria'];
			      			$quantidade = $array['quantidade'];
			      			$fornecedor = $array['fornecedor'];
			      		?>
			     	<tr>

					     <td><?php echo $numero_produto ?><td/>
					     <td><?php echo $nome_produto ?><td/>
					     <td><?php echo $categoria ?><td/>
					     <td><?php echo $quantidade ?><td/>
					     <td><?php echo $fornecedor ?><td/>
					     <td><a class="btn btn-warning" style="color: orangered;" href="editar_produto.php?id=<?php echo $id_estoque?>" role="button">Editar</a></td>
		
			   		</tr>
			    <?php } ?>

			</table>


	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
>>>>>>> 3a56c9a34616938b4091316ad9c6e78db7f30285
</html>