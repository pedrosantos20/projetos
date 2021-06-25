<html lang="pt-br">
  <head>
    <title>Exercício 11</title>
    <meta charset="utf-8">
  </head>
  <body>
  <?php 
  
  $s = $_GET['s']; 

  if ($s<550){
    $s = 550;
  }
  echo "O salário final é $s";
  ?>
  </body>
</html>