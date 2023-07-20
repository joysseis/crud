<?php



include 'conexao.php';
include 'script/password.php';



$usuario = $_POST['usuario'];
$senhausuario = $_POST['senha'];


$sql = "SELECT mail_usuario, senha_usuario FROM usuarios WHERE mail_usuario = '$usuario'";
$buscar = mysqli_query($conexao,$sql);
$total = mysqli_num_rows($buscar);


do {

$senha = $array['senha_usuario'];
$senhadecodificada = sha1($senhausuario);

if ($total > 0) {

if($senhadecodificada == $senha) {

header('Location: menu.php');

} else {

header('Location: erro.php');

}


} else {

header('Location: erro.php');

}

} while ($array = mysqli_fetch_array($buscar))



/*
 < ?php

include 'conexao.php';
include 'script/password.php';

$usuario = $_POST['usuario'];
$senhausuario = $_POST['senha'];

$sql = "SELECT mail_usuario, senha_usuario FROM usuarios WHERE mail_usuario = '$usuario'";
$buscar = mysqli_query($conexao, $sql);

$total = mysqli_num_rows($buscar);

while ($array = mysqli_fetch_array($buscar)) {
		$senha = $array['senha_usuario'];

	$senhaDecodificada = sha1($senhausuario);

	if ($total > 0) {

		if ($senhaDecodificada == $senha) {
			header('Location: menu.php');

		} else {
			header('Location: erro.php');
		}
	}
	else {
		header('Location:erro.php');
	}
}    



  ?>  -->*/


include 'conexao.php';

$sql = "SELECT nivel_usuario FROM usuarios WHERE mail_usuario = $usuario and status = 'Ativo';";
$buscar = mysqli_query($conexao, $sql);

$array = mysqli_fetch_array($buscar);
$nivel = $array['nivel_usuario'];

 
<?php

session_start();
include 'conexao.php';
include 'script/password.php';
 
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
 
 
$sql = "SELECT * FROM usuarios WHERE mail_usuario = '$usuario'";
$busca = mysqli_query($conexao, $sql);
 
#Buscar senha
 
$dados = mysqli_fetch_array($busca);
$senhabd = $dados['senha_usuario'];
 
$senhaVerificada = md5($senha);
 
 
#verifica se existe o usuário
 
$linha = mysqli_affected_rows($conexao);
 
if ($linha == 1) { #existe usuário
 
if($senhabd == $senhaVerificada) {#senha é igual?
 
$_SESSION['usuario'] = $usuario;
header("Location: menu.php");
 
} else {
header('Location: login.php?id=1');
}
 
} else {
header('Location: login.php?id=2');
}
 