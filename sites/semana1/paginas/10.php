<html lang="pt-br">
  <head>
    <title>Exercício 10</title>
    <meta charset="utf-8">
  </head>
  <body>
  <?php 
  
  $n1 = $_GET['n1']; 

  if ($n1<=0){
    $n1 *= (-1);
  }
  
  echo "O valor é $n1";
  ?>
  </body>
</html>