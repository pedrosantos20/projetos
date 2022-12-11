<?php

session_start();

$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "pizzaria_don_falcones";

global $pdo;
try{
    //Criando a Conexão
    $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $passw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}
?>