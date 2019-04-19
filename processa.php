<?php
// cadastrando

include_once("conexao.php"); // pegando tudo da conexao e inserindo aqui

$nome = $_POST['nome']; //pegando os dados do formulario utilizando method: post e o name passado no index
$email = $_POST['email'];
$profissao = $_POST['profissao'];

$sql = "insert into usuarios (nome, email, profissao) value ('$nome', '$email', '$profissao')"; // insira nos usuarios nos campos (nome, email, profissao) os valores recebidos do nome email e profissao
$salvar = mysqli_query($conexao, $sql); //passa a conexao e a variavel sql

mysqli_close($conexao); // variavel veio da conexao.

?>