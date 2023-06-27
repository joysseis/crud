<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


		<style type="text/css">
		#botao {
	        background-color: indianred;
	        color: black;

      	}
    	</style>
</head>
<body>

	<div class="container" style="margin-top: 40px; width: 500px;">
		<h4>Cadastro de Fornecedor</h4>
		
		 <form action="_inserir_fornecedores.php" method="post" style="margin-top: 20px">
		    <div class="form-group">
              <input type="text" class="form-control" name="fornecedor" placeholder="Insira a fornecedor" autocomplete="off">
          	</div>

			<div style="text-align: left; margin-top: 20px"> 
				<button type="submit" id="botao" class="green-button"> Cadastrar  </button>
			</div>

          	<div class="container" style="margin-top: 40px;">
				<div style="text-align: right;">
	      <a href="index.php" role="button" class="btn btn-primary">Voltar</a>
      </div>
	</div>

	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


</body>
</html>