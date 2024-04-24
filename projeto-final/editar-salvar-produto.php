<?php
$id = $_GET['id'];
$produto = $_POST['produto'];
$tipo = $_POST['tipo'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

include "conexao.php";

$sql = "update cafe set produto = '$produto', tipo = '$tipo', descricao = '$descricao', preco = '$preco' where id= $id  ";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);
header("location:admin.php");



?>