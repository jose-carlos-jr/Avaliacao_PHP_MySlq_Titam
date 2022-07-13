<?php
session_start();
include_once("MySqlBD.php");
$idproduto = filter_input(INPUT_GET, 'idproduto', FILTER_SANITIZE_NUMBER_INT);
$result_produto = "SELECT * FROM produtos WHERE idproduto = '$idproduto'";
$resultado_produto = mysqli_query($conn, $result_produto);
$row_produto = mysqli_fetch_assoc($resultado_produto);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Atualizar/Editar Produtos</title>
        <input type="submit" value="Voltar à pagina principal" onclick="location.href='index.php'">
        <br><hr>		
	</head>
	<body>
		<center><h1>Excluir Produto</h1></center>

		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
        
        $produtos = "SELECT * FROM produtos";
        $resultado_produto = mysqli_query($conn, $produtos);
        while($row_produto = mysqli_fetch_assoc($resultado_produto)){
            echo "ID: " . $row_produto['idproduto'] . "<br>";
            echo "Nome: " . $row_produto['nome'] . "<br>";
            echo "Cor: " . $row_produto['cor'] . "<br>";
            echo "Preço: " . $row_produto['preco'] . "<br>";
            //echo "<a href='add.atualizado.php?idproduto=" . $row_produto['idproduto'] . "'>Editar</a><br>";
            echo "<a href='proce.excluir.php?idproduto=" . $row_produto['idproduto'] . "'>Apagar</a><br><hr>";
        }
		?>

	</body>
</html>