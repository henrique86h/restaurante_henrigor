<?php
$pasta = "img/";
$produto = $_POST['produto'];
$tipo = $_POST['tipo'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

$nomeArquivo = $_FILES['imagem']['name'];
$partes = explode("." , $nomeArquivo);
$nomeNovo = round(microtime(true)) . "." . end($partes);

move_uploaded_file($_FILES['imagem']['tmp_name'] , $pasta . $nomeNovo);

include "conexao.php";

$imagem = $nomeNovo;
$sql = "insert into cafe (produto, tipo, descricao, preco, imagem) values('$produto', '$tipo', '$descricao', '$preco', '$imagem')";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);
header("location:admin.php");


?>