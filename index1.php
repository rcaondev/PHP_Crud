<?php

include 'conection.php';
include 'script/password.php';

$usuario = $_POST['usuario'];
$senhausuario = $_POST['senha'];

$sql = "SELECT `mail_usuario`, `senha_usuario` FROM `usuarios` WHERE `mail_usuario` = '$usuario' and `status` = 'Ativo' ";
$buscar = mysqli_query($conexao, $sql);

$total = mysqli_num_rows($buscar);

while ($array = mysqli_fetch_array($buscar)) {
       $senha = $array['senha_usuario'];

   $senhadecode = sha1($senhausuario);



   if ($total > 0) {

        if($senhadecode == $senha){

            session_start();
            $_SESSION['usuario'] = $usuario;
            header('Location: panel.php');
        } else {
            header('Location: error.php');
        }

    } else {

        header('Location: error.php');
    }

}

?>