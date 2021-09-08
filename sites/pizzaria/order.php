<?php
require 'verifica.php';
?>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title> PIZZARIA DON FALCONES - CONFIRMAÇÃO </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" href="css/order.css">
</head>
<body style="margin-left: 10%; margin-right:10%; text-align:center">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" >PIZZARIA DON FALCONES</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">INICIO</a>
        </li> 
      </ul>
      <div class="form-inline my-2 my-lg-0">
	  <label class="mr-3"> <?php echo $nomeUser; ?></label>
      <a href="index.php" style="text-decoration:none"> SAIR</a>
      </div>
    </div>
  </div>
</nav>
<body style="margin-left: 10%; margin-right:10%; text-align:center">
    <h1><u>Pizzaria Don Falcones - Confirmação</u></h1>
    <div class="orderbox">
    <div class="box">
    <?php
        $preco = 0;
        $calabresa = $_GET['calabresa'];
        $frango = $_GET['frango'];
        $queijo = $_GET['queijo'];
        $coca = $_GET['coca'];
        $guarana = $_GET['guarana'];
        if ($calabresa>0){
            echo "$calabresa X Pizzas de Calabresa <br>";
            $preco += ($calabresa * 20);
        }
        if ($frango>0){
            echo "$frango X Pizzas de Frango com Catupiry <br>";
            $preco += ($frango * 20);
        }
        if ($queijo>0){
            echo "$queijo X Pizzas de Quatro-queijos <br>";
            $preco += ($queijo * 19);
        }
        if ($coca>0){
            echo "$coca X Coca Cola 2L <br>";
            $preco += ($coca * 7.5);
        }
        if ($guarana>0){
            echo "$guarana X Guaraná 2L <br>";
            $preco += ($guarana * 8.5);
        }
        echo "Total a pagar: R$ $preco</h4>";
    ?>
    </div>
    </div>
    <h1><u>Obrigado pela preferência. Volte sempre!</u></h1>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>