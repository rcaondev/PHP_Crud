<?php

include 'conection.php';
$id = $_GET['id'];

$deletar = "DELETE FROM `usuarios` WHERE `id_usuario` = $id";
$fila = mysqli_query($conexao, $deletar);

header("Location: _aprovar_usuario.php");

?>