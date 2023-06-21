<?php 

include 'conexao.php';

$numero_produto = $_POST['numero_produto'];
$nome_produto = $_POST['nome_produto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

//echo $numero_produto;// - se quiser testar comenta o include e add o echo abaixo

  $sql = "INSERT INTO `estoque`(`numero_produto`, `nome_produto`, `categoria`, `quantidade`, `fornecedor`) VALUES ('$numero_produto','$nome_produto','$categoria','$quantidade','$fornecedor')";

$inserir = mysqli_query($conexao,$sql);
 ?>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <center>
        <div class="container" style="width: 500px; margin-top: 20px;">

            <h4> ALTERADO COM SUCESSO!</h4>

            <div style="padding-top: 20px;">
                <a href="index.php" role="button" class="btn btn-sm btn-primary"> Cadastrar novo item </a>        
            </div>
        </div>
    </center>