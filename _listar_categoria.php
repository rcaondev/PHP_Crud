<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>

    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>

    <div class="container" id="containerForm">
        <h3>Lista de Produtos</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome Categoria</th>
                    <th scope="col">Ação:</th>
                </tr>
            </thead>



            <?php
            include 'conection.php';
            $sql = "SELECT * FROM `categoria` ";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {

                $id_categoria = $array['id_categoria'];
                $nomecategoria = $array['nome_categoria'];

            ?>
                <tr>
                    <td><?php echo $nomecategoria ?></td>
                    
                    <td>
                        <a class="btn btn-primary btn-sm" href="_edit_categoria.php?id=<?php
                        echo $id_categoria ?>" role="button"><i data-feather="edit"></i>&nbsp;Editar Categoria</a>

                        <a class="btn btn-danger btn-sm" href="_deletar_categoria.php?id=<?php
                        echo $id_categoria ?>" role="button"><i data-feather="trash-2"></i>Excluir Categoria</a>
                    </td>

                    

                </tr>

            <?php } ?>
        </table>

        <div style="text-align:right; margin-top: 30px;" >
            <a href="panel.php" role="button" class="btn btn-secondary">Voltar</a>
        </div>
    </div>

    <!--Bootstrap CDN-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <script>
        feather.replace()
    </script>
</body>

</html>