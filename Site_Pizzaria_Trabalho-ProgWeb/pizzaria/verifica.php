<?php
require 'conexao.php';

if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
require_once 'usuario.class.php';
$u = new Usuario();
$listLogged = $u->logged($_SESSION['user']);
$nomeUser = $listLogged['Nome'];


}else{
	
	header("location:login.php");
}





?>