<?php

$produto = $_POST['produto'];
$tipo = $_POST['tipo'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$imagem = $_POST['imagem'];

include "conexao.php";
$sql = "insert into cafe (produto, tipo, descricao, preco, imagem) values('$produto', '$tipo', '$descricao', '$preco', '$imagem')";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);
header("location:admin.php");


?>