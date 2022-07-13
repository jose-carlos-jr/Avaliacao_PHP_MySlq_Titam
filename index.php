<?php
session_start();
include_once("MySqlBD.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <center><h2>Pagina principal</h2></center><hr>

    <?php
    if (isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']); // aqui ele "destroi a msg"
    }?>

    <br><hr>
    <input type="submit" value="INSERÇÃO" onclick="location.href='inserir.php'">
    <input type="submit" value="ATUALIZAÇÃO " onclick="location.href='atualizar.php'">
    <input type="submit" value="EXCLUSÃO" onclick="location.href='excluir.php'">
    <input type="submit" value="PESQUISAR" onclick="location.href='filtro.php'">
    <br><hr>

</form>

    <center><h1>Lista de Produtos</h1></center>

    <?php
    $produtos = "SELECT * FROM produtos";
    $resultado_produto = mysqli_query($conn, $produtos);
    ?>

    <center> <table border="3 center"></center>
    <thead>
        <tr>
            <th>PRODUTOS</th>
            <th>COR</th>
            <th>PREÇOS</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($resultado_produto as $item): ?> 
            <tr>
                <td><?= $item['nome']?></td>
                <td><?= $item['cor']?></td>
                <td><?= $item['preco']?></td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
    <hr>

</body>
</html>