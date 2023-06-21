<?php 

include 'conexao.php';

$id = $_GET['id'];

    $sql = "DELETE FROM `estoque` WHERE id_estoque = $id";

    $deletar = mysqli_query($conexao,$sql);
 ?>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <center>
        <div class="container" style="width: 500px; margin-top: 20px;">

            <h4> DELETADO COM SUCESSO!</h4>

            <div style="padding-top: 20px;">
                <a href="index.php" role="button" class="btn btn-sm btn-primary"> Cadastrar novo item </a>        
            </div>
        </div>
    </center>