<?php
// cadastrando

include_once("conexao.php"); // pegando tudo da conexao e inserindo aqui

$nome = $_POST['nome']; //pegando os dados do formulario utilizando method: post e o name passado no index
$email = $_POST['email'];
$profissao = $_POST['profissao'];

$sql = "insert into usuarios (nome, email, profissao) value ('$nome', '$email', '$profissao')"; // insira nos usuarios nos campos (nome, email, profissao) os valores recebidos do nome email e profissao
$salvar = mysqli_query($conexao, $sql); //passa a conexao e a variavel sql


$linhas = mysqli_affected_rows($conexao); // verificando se a linha foi afetada no mysql
mysqli_close($conexao); // variavel veio da conexao.

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conexao banco de dados</title>
    <link rel="stylesheet" href="css/index.css"> <!-- importando o css !-->
</head>
<body>

<div class="container">
    <nav>
        <ul class="menu">
            <a href="index.php"><li>Cadastro</li></a>
            <a href="consulta.php"><li>Consultas</li></a>
        </ul>
    </nav>
    <section>
        <h1>Cadastro realizado</h1>
        <hr><br><br>

        <?php

        if($linhas==1){ //verificando linha foi afetada ou nao (se foi adicionado algum dado nela)
            print "cadastro realizado com sucesso";
        }
        else{
            print "cadastro nao realizado";
        }
        ?>
    </section>
</div>
</body>
</html>