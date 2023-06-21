<?php 
<<<<<<< HEAD
include 'conexao.php';

$id = $_POST['id'];
=======

include 'conexao.php';

$id = $_POST['$id'];

//$numero_produto = $_POST['numero_produto'];
>>>>>>> 3a56c9a34616938b4091316ad9c6e78db7f30285
$nome_produto = $_POST['nome_produto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

<<<<<<< HEAD
$sql = "UPDATE `estoque` SET `nome_produto`='$nome_produto', `categoria`='$categoria', `quantidade`='$quantidade', `fornecedor`='$fornecedor' WHERE id_estoque = '$id'";

$atualizar = mysqli_query($conexao, $sql);
?>

<div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <div class="container" style="width: 400px;">
        <center>
            <h3>Atualizando com sucesso</h3>
            <div style="margin-top: 10px;">
                <a href="listar_produto.php" class="btn btn-sm" style="color: orangered;"> Voltar </a>
            </div>
        </center>
    </div>
</div>
=======
$sql = "UPDATE `estoque` SET `nome_produto`='$nome_produto',`categoria`='$categoria',`quantidade`='$quantidade',`fornecedor`='$fornecedor' WHERE  id_estoque = $id";

	$atualizar = mysqli_query($conexao, $sql);

?>

<div>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"><div class="container" style="width: 400px;">
		<center>
			<h3>Atualizando com sucesso</h3>
			<div style="margin-top: 10px;">
				<a href="listar_produto.php" class="btn btn-sm" style="color: orangered;"> Voltar </a>
				
			</div>
		</center>

	</div>
</div>

 
>>>>>>> 3a56c9a34616938b4091316ad9c6e78db7f30285
