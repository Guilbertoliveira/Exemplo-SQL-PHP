<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:""; //metodo get do campo filtro para filtros.


$sql = "select * from usuarios where nome like '%$filtro%' order by nome"; // filtro por nome
$consulta = mysqli_query($conexao, $sql); //consultando
$registros = mysqli_num_rows($consulta); // mostrar quantas linhas existem no banco de dados

mysqli_close($conexao);
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
        <h1>consulta</h1>
        <hr><br><br>

        <form method="get" action="">
        Filtrar por Nome <input type="text" name="filtro" class="campo" maxLength="40" required autofocus><br>
        <input type="submit" value="Pesquisar"class="btn">
        <?php
        print "Resultado da pesquisa com a palavra <strong>$filtro</strong> <br>"; // deixando palavra negrito strong
        print "foram encontrados $registros";
        
        
        print "<br></br>";
        while($exibirRegistro = mysqli_fetch_array($consulta)) // mysqli_fetch_array() cria uma array com indice 0 para os campos do sql 
       {
        $codigo = $exibirRegistro[0];
        $nome = $exibirRegistro[1];
        $emai = $exibirRegistro[2];
        $profissao = $exibirRegistro[3];

        print "<div class='con'>";
        print "$codigo<br>";
        print "$nome<br>";
        print "$emai<br>";
        print "$profissao";
        print "<br></br>";
        print "</div>";
       }
        ?>


        </form>
    </section>
</div>
</body>
</html>