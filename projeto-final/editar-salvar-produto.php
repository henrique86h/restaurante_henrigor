<?php
$pasta = "img/";
$id = $_GET['id'];
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
if($nomeArquivo == ""){
    
    $sql = "update cafe set produto = '$produto', tipo = '$tipo', descricao = '$descricao', preco = '$preco' where id= $id  ";

}else{
    
    $sql = "update cafe set produto = '$produto', tipo = '$tipo', descricao = '$descricao', preco = '$preco', imagem = '$imagem' where id= $id  ";

}


$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);
header("location:admin.php");



?>