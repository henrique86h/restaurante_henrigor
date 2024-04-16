<?php

$produto = $_GET['produto'];
$tipo = $_GET['tipo'];
$descricao = $_GET['descricao'];
$preco = $_GET['preco'];
$imagem = $_GET['imagem'];

include "conexao.php";
$sql = "insert into cafe (produto, tipo, descricao, preco, imagem) values('$produto', '$tipo', '$descricao', '$preco', '$imagem')";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);
header("location:admin.php");


?>