<?php

include_once("conexao.php");

$sql = "select * from usuarios"; // filtro
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

        <?php
        print "foram encontrados $registros";
        ?>


        </form>
    </section>
</div>
</body>
</html>