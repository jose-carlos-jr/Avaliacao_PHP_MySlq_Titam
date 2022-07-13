<?php
session_start();
include_once("MySqlBD.php");
$idproduto = filter_input(INPUT_GET, 'idproduto', FILTER_SANITIZE_NUMBER_INT);
if(!empty($idproduto)){
	$result_produto = "DELETE FROM produtos WHERE idproduto='$idproduto'";
	$resultado_produto = mysqli_query($conn, $result_produto);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Produto apagado com sucesso</p>";
		header("Location: index.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro o Produto não foi apagado com sucesso</p>";
		header("Location: index.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um Produtoio</p>";
	header("Location: index.php");
}
