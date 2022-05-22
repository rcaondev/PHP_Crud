<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <div class="container" id="containerForm">
        <h4>Cadastro de Usuário</h4>
        <form action="_insert_usuario.php" method="post">
            <div class="form-group">
                <label>Nome de Usuário</label>
                <input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome Completo">
            </div>

            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="mailusuario" class="form-control" required autocomplete="off" placeholder="Digite seu E-mail">
            </div>

            <div class="form-group">
                <label>Senha de Acesso</label>
                <input id="txtSenha" type="password" name="senhausuario" class="form-control" required autocomplete="off" placeholder="Senha">
            </div>

            <div class="form-group">
                <label>Confirmar sua senha</label>
                <input type="password" name="senhausuario2" class="form-control" required autocomplete="off" placeholder="Confirmar Senha" oninput="validaSenha(this)">
                <small>As senhas precisam ser identicas</small>
            </div>

            <div class="form-group">
                <label>Nível de Acesso:</label>
                <select name="nivelusuario" class="form-control">
                    <option value="1">Administrador</option>
                    <option value="2">Funcionário</option>
                    <option value="3">Conferente</option>
                </select>
            </div>

            <div class="addButton">
                <a href="panel.php" role="button" class="btn btn-secondary">Voltar</a>
                <button type="submit" id="button" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>

    <!--Bootstrap CDN-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        function validaSenha(input) {
            if (input.value != document.getElementById('txtSenha').value) {
                input.setCustomValidity('Digite a senha Corretamente');
            } else {
                input.setCustomValidity('');
            }
        }
    </script>
</body>

</html>