<?php
session_start();
include_once ("MySqlBD.php");   

echo "<a href='index.php" . "'>voltar</a><br><hr>";

$pesquisar = $_POST['pesquisar'];
$result = "SELECT * FROM produtos WHERE nome LIKE '%$pesquisar%' LIMIT 5";
$resultado = mysqli_query($conn, $result);
	
if ($rows_pessquisa = mysqli_fetch_array($resultado)){
    echo "Nome do produto: ".$rows_pessquisa['nome']."<br>";

}else{
    $_SESSION['msg'] = "<p style = 'color:red;'>Produto não encontrado!</p>";
    header("Location: index.php");
}
?>

<h3>Pesquisar Produto por Nome</h3>
<form method="POST" action="filtro.php">
	Pesquisar:<input type="text" name="pesquisar" placeholder="PESQUISAR">
	<input type="submit" value="ENVIAR">
</form>
