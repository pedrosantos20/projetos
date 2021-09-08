<?php

    
    require 'conexao.php';
    require 'usuario.class.php';

    $u = new usuario();
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if($u->login($email, $senha) == true){
        if(isset($_SESSION['user'])){
            header("Location: logado.php");
        }else{
            header("Location: login.php");
        }
    }else{
        header("Location: login.php");
    }
    
?>
