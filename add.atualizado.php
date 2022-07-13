<?php
session_start();
include_once("MySqlBD.php");

$idproduto = filter_input(INPUT_GET, 'idproduto', FILTER_SANITIZE_NUMBER_INT);
$result_produto = "SELECT * FROM produtos WHERE idproduto = '$idproduto'";
$resultado_produto = mysqli_query($conn, $result_produto);
$row_produto = mysqli_fetch_assoc($resultado_produto);
?>

<body>
    <form method="POST" name="meucadastro" action="edit_prod.php">
        <input type="hidden" name="idproduto" value="<?php echo $row_produto['idproduto']; ?>">
        
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Nome" value="<?php echo $row_produto['nome']; ?>"><br><br>
        
        <label>Cor: </label>
        <input type="text" name="cor" placeholder="cor" value="<?php echo $row_produto['cor']; ?>"><br><br>

        <label>Preço: </label>
        <input type="text" name="preco" placeholder="preco" value="<?php echo $row_produto['preco']; ?>"><br><br>

        <input type="submit" value="Editar">
	</form>
</body>