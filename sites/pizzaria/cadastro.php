<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title> Cadastro de Usuário</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" href="css/cadastro.css">

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
	  <label class="mr-3"> Já tem uma Conta?</label>
      <a href="login.php" style="text-decoration:none"> ACESSO</a>
      </div>
    </div>
  </div>
</nav>
        <body>
<div class="cadastro">
            <h1 style="text-align:center">Cadastro:</h1>
            <p style="text-align:center">Complete o cadastro com suas informações para poder fazer o pedido</p>
            <form action="http://localhost/pizzaria/cadastrar.php" method="POST">
                <div class="textbox"> 
                    <label>Nome Completo</label><br>
                    <input type="text" name="nomeC" id="nomeC" required=”true”> 
                    <br>
                    <br>
                    <label>CPF</label><br>
                    <input type="number" name="cpfC" id="cpfC" required=”true” maxlength="11">
                    <br>
                    <br>
                    <label>Email</label>   <br> 
                    <input type="email" name="emailC" id="emailC" required=”true”>
                    <br>
                    <br>
                    <label>Senha</label>    <br>
                    <input type="text" name="senhaC" id="senhaC" required=”true”>
                    <br>
                    <br>
                    <label>Endereço</label>   <br> 
                    <input type="text" name="enderecoC" id="enderecoC" required=”true”>
                <br> <br> 
                <button class="btn btn-danger" type="submit">CADASTRAR</button>
                
                </div>
            </form>
            </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
   
</html>