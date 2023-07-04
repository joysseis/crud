<?php 

include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$mail = $_POST['mailusuario'];
$senha = $_POST['senhausuario'];
$nivel = $_POST['nivelusuario'];
$status = 'Inativo';

$sql = "INSERT INTO usuarios (nome_usuario, mail_usuario, senha_usuario, nivel_usuario, status) values ('$nomeusuario', '$mail', sha1('$senha'), $nivel, '$status' )";

$inserir =  mysqli_query($conexao,$sql);

 ?>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <center>
        <div class="container" style="width: 500px; margin-top: 20px;">

            <h4> ADICIONADO COM SUCESSO!</h4>

            <div style="padding-top: 20px;">
                <a href="cadastro_usuario_externo.php" role="button" class="btn btn-sm btn-primary"> Cadastrar novo item </a>        
            </div>
        </div>
    </center>