<?php 

include 'conexao.php';

$id = $_GET['id'];
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
		<h4>Formulário de Edição</h4>
		<form action="atualizar_categoria.php" method="post" style="margin-top: 20px">
			<?php 

			$sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";
			$buscar = mysqli_query($conexao, $sql);
			while($array = mysqli_fetch_array($buscar)){

				$id_categoria = $array['id_categoria'];
				$nomecategoria = $array['nome_categoria'];
	
//obs.: $nomecategoria é a variavel nome_categoria é a coluna da tabela
			?>

			<div class="form-group">
				<label for="nome_produto">Nome da Categoria:</label>
				<input type="text" class="form-control" name="nome_categoria"  value=" <?php echo $nomecategoria ?>">
				<input type="text" class="form-control" name="id"  value=" <?php echo $id_categoria ?>" style="display: none;" >

			</div>

			<div style="text-align: right;"> 
				<button type="submit" id="botao" class="green-button"> Atualizar  </button>
			</div>

		<?php } ?>

		</form>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
