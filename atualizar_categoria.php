<?php 
include 'conexao.php';

$id = $_POST['id'];
$nomecategoria = $_POST['nome_categoria'];


$sql = "UPDATE `categoria` SET  `nome_categoria`='$nomecategoria' WHERE id_categoria = '$id'";

$atualizar = mysqli_query($conexao, $sql);
?>

<div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <div class="container" style="width: 400px;">
        <center>
            <h3>Atualizado com sucesso</h3>
            <div style="margin-top: 10px;">
                <a href="listar_categoria.php" class="btn btn-sm" style="color: orangered;"> Voltar </a>
            </div>
        </center>
    </div>
</div>
