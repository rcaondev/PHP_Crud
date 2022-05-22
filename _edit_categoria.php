<?php

include 'conection.php';
 
$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD com PHP - Editar Categoria</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <div class="container" id="containerForm">
        <h4>Formulário de Edição de Categoria</h4>
        <form action="_atualizar_categoria.php" method="post" class="formBox">

        <?php

        $sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";        
        $buscar = mysqli_query($conexao,$sql);
        while ($array = mysqli_fetch_array($buscar)) {

            
            $id_categoria = $array['id_categoria'];
            $nomecategoria = $array['nome_categoria'];
        
        ?>

            <div class="form-group">
                <label>Nome Categoria</label>
                <input type="text" class="form-control" name="nomecategoria" value="<?php echo $nomecategoria ?>">
                <input type="text" class="form-control" name="id" value="<?php echo $id_categoria ?>" style="display:none;" >
            </div>

            <div class="addButton">
                <button type="submit" id="button" class="btn">Salvar Alterações</button>     
            </div>

            <?php } ?>
        </form>
    </div>





    <!--Bootstrap CDN-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>