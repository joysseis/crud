<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #tamanho {
            max-width: 500px;
            -webkit-box-shadow: 10px 86px 153px 0px rgba(87,49,87,1);
            -moz-box-shadow: 10px 86px 153px 0px rgba(87,49,87,1);
            box-shadow: 10px 86px 153px 0px rgba(87,49,87,1);
        }
        .border {
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container" id="tamanho" style="margin-top: 40px; border-radius: 15px; border: 2px solid #f3f3f3;">
        <h5>Login</h5>
        <form>
            <div>
                <label>Nome de usuário</label>
                <input type="text" class="form-control" name="usuario" placeholder="Digite seu nome de usuário">
            </div>
            <div>
                <label>Senha</label>
                <input type="password" class="form-control" name="senha" placeholder="Digite sua senha">
            </div>
            <button type="submit" class="btn btn-primary d-block mx-auto">Entrar</button>
        </form>
        <div class="text-center">
            <img src="caminho_para_a_imagem/cadeado.png" alt="Cadeado" class="img-fluid">
        </div>
    </div>

    <center>
        <small> Você não possui cadastro? Clique <a href="cadastro_usuario_externo.php">aqui </a>  </small>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
