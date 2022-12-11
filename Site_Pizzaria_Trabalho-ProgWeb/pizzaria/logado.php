<?php
require 'verifica.php';
?>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title> Página Inicial - Pedido </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" href="css/cadastro.css">
</head>
<body style="margin-left: 10%; margin-right:10%; text-align:center">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PIZZARIA DON FALCONES</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">INICIO</a>
        </li>
        
        
        
      </ul>
      <div class="form-inline my-2 my-lg-0">
	  <label class="mr-3"> <?php echo $nomeUser; ?></label>
      <a href="index.php" style="text-decoration:none"> SAIR</a>
      </div>
    </div>
  </div>
</nav>
    <h1><u>Pizzaria Don Falcones - Página inicial</u></h1>
    <form action="http://localhost/pizzaria/order.php" method="get">
    <h2>Customize seu pedido: </h2>
    <h3>Pizzas</h3>
    <input type="number" name="calabresa" id="calabresa" value="0" max="10" min="0"><label for="calabresa"> Calabresa.....................(+R$ 20,00) </label><br>
    <input type="number" name="frango" id="frango" value="0" max="10" min="0"><label for="frango"> Frango com Catupiry...(+R$ 20,00) </label><br>
    <input type="number" name="queijo" id="queijo" value="0" max="10" min="0"><label for="peixe"> Quatro-queijos.............(+R$ 19,00)</label><br>
    <h3>Bebidas</h3>
    <input type="number" name="coca" id="coca" value="0" max="10" min="0"><label for="coca"> Coca-Cola 2L..................(+R$ 7,50) </label><br>
    <input type="number" name="guarana" id="guarana" value="0" max="10" min="0"><label for="limao"> Guaraná 2L......................(+R$ 8,50) </label><br>
    <br>
   
    <button class="btn btn-danger" type="submit">Confirmar Pedido</button>
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>

