<<<<<<< HEAD
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>


	<div class="container" style="margin-top: 100px;">
		<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Produtos</h5>
        <p class="card-text">Opção adiciona produtos no estoque.</p>
        <a href="adicionar_produtos.php" class="btn btn-primary">Cadastrar Produto</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Produtos</h5>
        <p class="card-text"> Vizualizar, editar e excluir produtos</p>
        <a href="editar_produto.php" class="btn btn-primary">Abrir</a>
      </div>
    </div>
  </div>
</div>

	</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

=======
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
      <h4>Formulário de Cadastro</h4>
      <form action="_inserir_produto.php" method="post" style="margin-top: 20px">
          <div class="form-group">
              <label for="numero_produto">Número do Pedido:</label>
              <input type="number" class="form-control" name="numero_produto" placeholder="Insira o número do pedido" required>
          </div>

          <div class="form-group">
              <label for="nome_produto">Nome do Produto:</label>
              <input type="text" class="form-control" name="nome_produto" placeholder="Insira o nome do produto" required>
          </div>

          <div class="form-group">
              <label>Categoria:</label>
              <select class="form-control" name="categoria">
                  <option>Hardware</option>
                  <option>Periféricos</option>
                  <option>Software</option>
                  <option>Celulares</option>
              </select>
          </div>

          <div class="form-group">
              <label>Quantidade:</label>
              <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade de produtos" required>
          </div>

          <div class="form-group">
              <label>Fornecedor:</label>
              <select class="form-control" name="fornecedor">
                  <option>Fornecedor A</option>
                  <option>Fornecedor B</option>
                  <option>Fornecedor C</option>
                  <option>Fornecedor D</option>
              </select>
          </div>

          <div style="text-align: right;"> 
              <button type="submit" id="botao" class="green-button">Cadastrar</button>
          </div>
      </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
>>>>>>> 3a56c9a34616938b4091316ad9c6e78db7f30285
