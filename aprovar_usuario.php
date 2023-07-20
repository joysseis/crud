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

	<div class="container" style="margin-top: 40px;" >
				<div style="text-align: right;">
	      <a href="menu.php" role="button" class="btn btn-primary">Voltar</a>
      </div>
      
		<h3> Lista de Usuários</h3>
		<br>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">Nome </th>
			      <th scope="col">Email </th>
			      <th scope="col">Nível</th>			      
			      <th scope="col">Ação</th>

			    </tr>
			  </thead>

			      	<?php 
			      		include 'conexao.php';
			      		$sql = "SELECT * FROM `usuarios` WHERE status = 'Inativo'";
			      		$busca = mysqli_query($conexao, $sql);

			      		while ($array = mysqli_fetch_array($busca)) {

			      			$id_usuario = $array['id_usuario'];
			      			$nomeusuario = $array['nome_usuario'];
			      			$mail = $array['mail_usuario'];
			      			$nivel = $array['nivel_usuario'];

			      	?>
			     	<tr>


					     <td><?php echo $nomeusuario ?></td>
					     <td><?php echo $mail ?></td>
					     <td><?php echo $nivel ?></td>


					     <!-- <td>
					     	<form action="">
					     	
					     	<div class="form-group">
                					<select class="form-control" name="nivelusuario">
					                    <option value="1">Administrador</option>
					                    <option value="2">Funcionário</option>
					                    <option value="3">Conferente</option>
                					</select>
           					 </div>

					     </form>
					     </td> -->


					     <td>

					     <a class="btn btn-success" style="color: orangered;" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=1" role="button"> Administrador </a>
					     <a class="btn btn-warning" style="color: orangered;" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=2" role="button"> Funcionário </a>
					     <a class="btn btn-dark" style="color: orangered;" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=3" role="button"> Conferente </a>

					     <a class="btn btn-danger" style="color: darkred;" href="deletar_usuario.php?id=<?php echo $id_usuario ?>" role="button"><i class="fa-sharp fa-solid fa-trash"></i> Excluir</a>

					     </td>



		
			   		</tr>
			    <?php } ?>

			</table>

	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>