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

<?php

session_start();

$usuario = $_SESSION['usuario'];

if(!isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

include 'conection.php';

$sql = "SELECT `nivel_usuario` FROM `usuarios` WHERE `mail_usuario` = '$usuario' and `status` = 'Ativo' ";
$buscar = mysqli_query($conexao, $sql);
$array = mysqli_fetch_array($buscar);
$nivel = $array['nivel_usuario'];

?>


    <div class="container" id="menu_container">
        
        <div class="row">

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adcionar Produto</h5>
                        <p class="card-text">Adcionar um Produto em nosso estoque</p>
                        <a href="adicionar_product.php" class="btn btn-primary">Adcionar Produto</a>
                    </div>
                </div>
            </div>

         
        
     

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Categoria</h5>
                        <p class="card-text">Adcione uma categoria de produto </p>
                        <a href="_adicionar_categoria.php" class="btn btn-primary">Adcionar Categoria</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Fornecedor</h5>
                        <p class="card-text">Adcionar fornecedores de produtos</p>
                        <a href="_adicionar_fornecedor.php" class="btn btn-primary">Adcionar Fornecedor</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Usuário</h5>
                        <p class="card-text">Adcionar usuários no sistema</p>
                        <a href="_cadastro_usuario.php" class="btn btn-primary">Adcionar Usuário</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lista de Produtos</h5>
                        <p class="card-text">Visualizar Lista de Produtos Cadastrados</p>
                        <a href="_listar_product.php" class="btn btn-primary">Produtos</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lista de Categorias</h5>
                        <p class="card-text">Visualizar Lista de Categorias Cadastradass</p>
                        <a href="_listar_categoria.php" class="btn btn-primary">Categorias</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Aprovar Usuários</h5>
                        <p class="card-text">Aprovar Usuários Cadastrados</p>
                        <a href="_aprovar_usuario.php" class="btn btn-primary">Ver Usuários</a>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <!--Bootstrap CDN-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>