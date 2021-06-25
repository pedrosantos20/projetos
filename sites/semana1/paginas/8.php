<html lang="pt-br">
  <head>
    <title>Exercício 8</title>
    <meta charset="utf-8">
  </head>
  <body>
  <?php 
  
  $n1 = $_GET['n1']; 
  $n2 = $_GET['n2'];

  $soma = $n1 + $n2;
  $sub1 = $n1 - $n2;
  $sub2 = $n2 - $n1;
  $mult = $n2 * $n1;
  $div1 = $n2 / $n1;
  $div2 = $n1 / $n2;

  echo "Soma = $soma <br>";
  echo "Subtração 1 = $sub1 <br>";
  echo "Subtração 2 = $sub2 <br>";
  echo "Multiplicação = $mult <br>";
  echo "Divisão 1 = $div1 <br>";
  echo "Divisão 2 = $div2";
  ?>
  </body>
</html>