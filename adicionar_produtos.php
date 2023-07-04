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

      <div style="text-align: right;">
      <a href="index.php" role="button" class="btn btn-primary">Voltar</a>
      </div>

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


                <?php 
                  include 'conexao.php';

                  $sql = "SELECT * FROM categoria order by nome_categoria ASC";
                  $buscar = mysqli_query($conexao, $sql);

                  while($array = mysqli_fetch_array($buscar)){
                    
                    echo $id_categoria = $array['id_categoria'];
                    echo $nome_categoria = $array['nome_categoria'];

                  ?>

                  <option> <?php echo $nome_categoria ?></option>


                 <?php } ?> 

<!--              <option>Hardware</option>
                  <option>Periféricos</option>
                  <option>Software</option>
                  <option>Celulares</option> -->
              </select>
          </div>

          <div class="form-group">
              <label>Quantidade:</label>
              <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade de produtos" required>
          </div>

          <div class="form-group">
              <label>Fornecedor:</label>
              <select class="form-control" name="fornecedor">

              <?php 
                  include 'conexao.php';

                  $sql2 = "SELECT * FROM fornecedor order by nome_fornecedor ASC";
                  $buscar2 = mysqli_query($conexao, $sql2);

                  while($array2 = mysqli_fetch_array($buscar2)){
                    
                    echo $id_fornecedor = $array2['id_categoria'];
                    echo $nome_fornecedor = $array2['nome_fornecedor'];

                  ?>

                  <option> <?php echo $nome_fornecedor ?></option>


              <?php } ?> 



<!--              <option>Fornecedor A</option>
                  <option>Fornecedor B</option>
                  <option>Fornecedor C</option>
                  <option>Fornecedor D</option>  -->
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
