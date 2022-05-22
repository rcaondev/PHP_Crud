<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD com PHP</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <div class="container" id="containerForm">
        <h4>Formulário de Cadastro</h4>
        <form action="_insert_product.php" method="post" class="formBox">
            <div class="form-group">
                <label>N° Produto</label>
                <input type="number" class="form-control" name="nroproduto" placeholder="Insira o número do Produto" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Nome Produto</label>
                <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do Produto" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoria">

                    <?php

                    include 'conection.php';
                    $sql = "SELECT * FROM categoria order by nome_categoria ASC";
                    $buscar = mysqli_query($conexao, $sql);

                    while ($array = mysqli_fetch_array($buscar)) {
                        $id_categoria = $array['id_categoria'];
                        $nome_categoria = $array['nome_categoria'];
                    
                    ?>

                    <option><?php echo $nome_categoria?></option>

                    <?php } ?>

                </select>
            </div>

            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" placeholder="Insira o número do Produto" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor">
                
                <?php

                include 'conection.php';
                $sql2 = "SELECT * FROM fornecedor";
                $buscar2 = mysqli_query($conexao, $sql2);
                
                while ($array2 = mysqli_fetch_array($buscar2)) {
                    $id_fornecedor = $array2['id_forn'];
                    $nome_fornecedor = $array2['nome_forn'];
                

                ?>        
                    <option><?php echo $nome_fornecedor ?></option>

                    <?php } ?>
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
</body>

</html>