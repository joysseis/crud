<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 
    </script>
</head>
<body>



    <div class="container" style=" width: 400px; margin-top: 40px;" >
    <div style="text-align: right;">
      <a href="menu.php" role="button" class="btn btn-primary">Voltar</a>

    </div>

        <h3>Cadastro de Usuário</h3>
        <form onsubmit="return validarSenha()" method="post" action="insert_usuario_externo.php">
            <div class="form-group">
                <label>Nome de usuário</label>
                <input type="text" name="nomeusuario" class="form-control" id="username" placeholder="Digite seu nome de usuário" required autocomplete="off">
            </div>

            <div class="form-group">
                <label >Email</label>
                <input type="email" name="mailusuario" class="form-control" id="email" placeholder="Digite seu email" required autocomplete="off">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senhausuario" class="form-control" id="txtSenha" placeholder="Digite sua senha" required autocomplete="off">
            </div>
            <div class="form-group">
                <label>Repetir Senha</label>
                <input type="password" class="form-control" name="senhausuario2" placeholder="Repita sua senha" oninput="validesenha(this)" required autocomplete="off">
                <span id="mensagem-erro" style="color: red;"></span>
            </div>

        
             <input type="text" name="nivelusuario" class="form-control" value="0" hidden> 

            <button type="submit" class="btn btn-primary" style="margin-top: 40px;">Cadastrar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function validesenha (input){
            if (input.value != document.getElementById('txtSenha').value) {
                input.setCustomValidity('Repita a senha corretamente');
            } else {
                input.setCustomValidity('');
            }
        }

    </script>
</body>
</html>
