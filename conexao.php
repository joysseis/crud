<<<<<<< HEAD
<<?php 
$servername = "localhost";
$database = "estoque";
$username = "root";
$password = "";

$conexao = mysqli_connect($servername, $username, $password, $database);
=======
<?php 
$servername = "localhost";
$database = "estoque";
$username = "root";
$password = "";

$conexao = mysqli_connect($servername, $username, $password, $database);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
>>>>>>> 3a56c9a34616938b4091316ad9c6e78db7f30285
 ?>