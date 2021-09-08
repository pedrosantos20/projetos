<?php
    require 'conexao.php';

    $emailC = filter_input(INPUT_POST, 'emailC', FILTER_SANITIZE_STRING);
    $senhaC = filter_input(INPUT_POST, 'senhaC', FILTER_SANITIZE_STRING);
    $cpfC = filter_input(INPUT_POST, 'cpfC', FILTER_SANITIZE_STRING);
    $enderecoC = filter_input(INPUT_POST, 'enderecoC', FILTER_SANITIZE_STRING);
    $nomeC = filter_input(INPUT_POST, 'nomeC', FILTER_SANITIZE_STRING);

    global $pdo;

    
    $insert = "INSERT INTO cliente (CPF, Nome, endereco, senha, email)
                VALUES (:cpfC, :nomeC, :enderecoC, :senhaC, :emailC)";
    $sql = $pdo->prepare($insert);
    $sql->bindParam(':cpfC', $cpfC);
    $sql->bindParam(':nomeC', $nomeC);
    $sql->bindParam(':enderecoC', $enderecoC);
    $sql->bindParam(':senhaC', $senhaC);
    $sql->bindParam(':emailC', $emailC);
    $sql->execute();
    header("Location: login.php");
    
?>