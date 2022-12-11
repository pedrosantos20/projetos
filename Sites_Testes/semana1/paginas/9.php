<html lang="pt-br">
  <head>
    <title>Exercício 9</title>
    <meta charset="utf-8">
  </head>
  <body>
  <?php 
  
  $n1 = $_GET['n1']; 

  $positivo = "positivo.";
  if ($n1<0){
     $positivo = "negativo.";
  }
  echo "O valor é $positivo";
  ?>
  </body>
</html>