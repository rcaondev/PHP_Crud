<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprovar Usuário</title>

    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>

    <div class="container" id="containerForm">
        <h3>Lista de Usuarios</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome Usuário</th>
                    <th scope="col">E-mail </th>
                    <th scope="col">Nível</th>
                    <th scope="col">Ação:</th>
                </tr>
            </thead>



            <?php
            include 'conection.php';
            $sql = "SELECT * FROM `usuarios` WHERE `status` = 'Inativo'";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {

                $id_usuario = $array['id_usuario'];
                $nomeusuario = $array['nome_usuario'];
                $mail = $array['mail_usuario'];
                $nivel = $array['nivel_usuario'];

            ?>
                <tr>
                    <td><?php echo $nomeusuario ?></td>
                    <td><?php echo $mail ?></td>
                    <td><?php echo $nivel ?></td>
                    
                    <!--td>
                        <form>
                            <div class="form-group">
                                <select name="nivelusuario" class="form-control">
                                    <option value="1">Administrador</option>
                                    <option value="2">Funcionário</option>
                                    <option value="3">Conferente</option>
                                </select>
                            <div>
                        </form>
                    </td-->

                    <td>
                        <a class="btn btn-info btn-sm" href="_aprovado_usuario.php?id=<?php echo $id_usuario ?>
                        &nivel=1" role="button"><i data-feather="user"></i>&nbsp;Administrador</a>
                        <a class="btn btn-info btn-sm" href="_aprovado_usuario.php?id=<?php echo $id_usuario ?>
                        &nivel=2" role="button"><i data-feather="user"></i>&nbsp;Funcionário</a>
                        <a class="btn btn-info btn-sm" href="_aprovado_usuario.php?id=<?php echo $id_usuario ?>
                        &nivel=3" role="button"><i data-feather="user"></i>&nbsp;Conferente</a>

                        <a class="btn btn-danger btn-sm" href="_deletar_usuario.php?id=<?php echo $id_usuario ?>"
                        role="button"><i data-feather="trash-2"></i>&nbsp;Excluir</a>
                    </td>



                </tr>

            <?php } ?>
        </table>

        <div style="text-align:right; margin-top: 30px;">
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