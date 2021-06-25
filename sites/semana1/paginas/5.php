<html lang="pt-br">
  <head>
    <title>Exercício 5</title>
    <meta charset="utf-8">
  </head>
  <body>
  <?php 

  $idp = $_GET['idp'];
  $idm = $_GET['idm'];
  $idf = $_GET['idf'];

  $m = ($idp + $idm + $idf) / 3;
  echo "A média de idade da família é: $m"; 
  ?>
  </body>
</html>