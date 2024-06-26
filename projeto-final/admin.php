<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/admin.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" href="img/icone-serenatto.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>Serenatto - Admin</title>
</head>
<body>
<main>
  <section class="container-admin-banner">
    <img src="img/logo-serenatto-horizontal.png" class="logo-admin" alt="logo-serenatto">
    <h1>Admistração Serenatto</h1>
    <img class= "ornaments" src="img/ornaments-coffee.png" alt="ornaments">
  </section>
  <h2>Lista de Produtos</h2>

  <section class="container-table">
    <table>
      <thead>
        <tr>
          <th>Produto</th>
          <th>Tipo</th>
          <th>Descricão</th>
          <th>Valor</th>
          <th colspan="3">Ação</th>
        </tr>
      </thead>
      <tbody>

      <?php
      
      include "conexao.php";
      $sql = "select * from cafe order by preco asc";
      $resultado = mysqli_query($conexao, $sql);

      while ($produtos = mysqli_fetch_assoc($resultado)):
      ?>
        
        <tr>
        <td><?php echo $produtos['produto'] ?></td>
        <td><?php echo $produtos['tipo'] ?></td>
        <td><?php echo $produtos['descricao'] ?></td>
        <td> R$<?php echo $produtos['preco'] ?></td>
        <td><img src="img/<?php echo $produtos['imagem'] ?>" width="150"></td>
        <td><a class="botao-editar" href="editar-produto.php?id=<?php echo $produtos['id'] ?>">Editar</a></td>
        <td>
          <form>
            <a href="excluir.php?id=<?php echo $produtos['id'] ?>">
            <input type="button" class="botao-excluir" value="Excluir"></a>
          </form>
        </td>
        </tr>

        <?php
        endwhile;
        ?>
        
      </tbody>
    </table>
  <a class="botao-cadastrar" href="cadastrar-produto.php">Cadastrar produto</a>

  

  <form action="autoload.inc.php" method="post">
    <input type="submit" class="botao-cadastrar" value="Baixar Relatório"/>
  </form>
  </section>
</main>
</body>
</html>