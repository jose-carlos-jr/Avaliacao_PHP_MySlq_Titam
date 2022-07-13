<?php
session_start();
include_once("MySqlBD.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cor = filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT);

//echo "Nome: $nome <br>";
//echo "Cor: $cor <br>";
//echo "Preço: $preco <br>";

$result_produtos = "INSERT INTO produtos (nome, cor, preco) VALUES ('$nome', '$cor', '$preco')";
mysqli_query ($conn, $result_produtos);

if (mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style = 'color:green;'>Produto cadastrado!</p>";
    header("Location: index.php");
}else{
    $_SESSION['msg'] = "<p style = 'color:red;'>Produto não cadastrado!</p>";
    header("Location: index.php");
}