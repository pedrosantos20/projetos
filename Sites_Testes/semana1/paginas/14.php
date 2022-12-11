<html lang="pt-br">
  <head>
    <title>Exercício 14</title>
    <meta charset="utf-8">
  </head>
  <body>
  <?php 
  
  $a1 = $_GET['a1'];
  $a2 = $_GET['a2']; 

  $m = ($a1 + $a2)/2;

  if ($m>=6){
    echo "APROVADO<br>";
  } else if ($m>=3){
    echo "EXAME<br>";
} else {
    echo "REPROVADO<br>";
}
  echo "A média é $m";
  ?>
  </body>
</html>