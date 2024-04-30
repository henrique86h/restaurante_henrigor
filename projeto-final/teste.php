<?php
   include "conexao.php";
   $sql = "select * from cafe order by preco asc";
   $resultado = mysqli_query($conexao, $sql);

   while ($produtos = mysqli_fetch_assoc($resultado)):


// include autoloader
require_once 'dompdf/autoload.inc.php';

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($documentTemplate);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

   endwhile;
  ?>