<html lang="pt-br">
  <head>
    <title>Exercício 13</title>
    <meta charset="utf-8">
  </head>
  <body>
  <?php 
  
  $n1 = $_GET['n1']; 

  if ($n1<=0){
    $r = $n1 * (-1);
  } else
  $r = $n1 * 1;

  echo "O valor é $r";
  ?>
  </body>
</html>