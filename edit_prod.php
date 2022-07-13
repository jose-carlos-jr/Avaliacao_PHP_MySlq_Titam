<?php
session_start();
include_once("MySqlBD.php");

$idproduto = filter_input(INPUT_POST, 'idproduto', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cor = filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT);

$result_produtos = "UPDATE produtos SET nome='$nome', cor='$cor', preco='$preco' WHERE idproduto='$idproduto'";
mysqli_query($conn, $result_produtos);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Produto editado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Produto não foi editado com sucesso</p>";
	header("Location: atualizar.php?idproduto=$idproduto");
}
