<?php 

include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Resto do código aqui
} 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulário de Cadastro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

	<style type="text/css">

		#tamanhoContainer {
			width: 500px;
		}

		#botao {
			background-color: indianred;
			color: black;

		}
	</style>

</style>
</head>
<body>
	<div class="container" id="tamanhoContainer" style="margin-top: 40px;">
		<h4>Formulário de Cadastro</h4>
		<form action="_inserir_produto.php" method="post" style="margin-top: 20px">
			<?php 

			$sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
			$buscar = mysqli_query($conexao, $sql);
			while($array = mysqli_fetch_array($buscar)){

				$id_estoque = $array['id_estoque'];
				$numero_produto = $array['numero_produto'];
				$nome_produto = $array['nome_produto'];
				$categoria = $array['categoria'];
				$quantidade = $array['quantidade'];
				$fornecedor = $array['fornecedor'];

			?>
			<div class="form-group">
				<label for="numero_produto">Número do Pedido:  <?php echo "$numero_produto";  ?> </label>
				<input type="number" class="form-control" name="numero_produto" value=" <?php echo $numero_produto ?>" disabled >
			</div>

			<div class="form-group">
				<label for="nome_produto">Nome do Produto:</label>
				<input type="text" class="form-control" name="nome_produto"  value=" <?php echo $nome_produto ?>">
			</div>

			<div class="form-group">
				<label>Categoria:</label>
				<select class="form-control" name="categoria" value="<?php echo $categoria ?>" >
					<option>Hardware</option>
					<option>Periféricos</option>
					<option>Software</option>
					<option>Celulares</option>
				</select>
			</div>

			<div class="form-group">
				<label>Quantidade:</label>
				<input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
			</div>

			<div class="form-group">
				<label>Fornecedor:</label>
				<select class="form-control" name="fornecedor" value="<?php echo $fornecedor ?>" >
					<option>Fornecedor A</option>
					<option>Fornecedor B</option>
					<option>Fornecedor C</option>
					<option>Fornecedor D</option>
				</select>
			</div>

			<div style="text-align: right;"> 
				<button type="submit" id="botao" class="green-button">Atualizar  <?php echo "$numero_produto";  ?></button>
			</div>
		<?php } ?>
		</form>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
