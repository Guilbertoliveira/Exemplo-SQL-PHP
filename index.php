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
        <h1>Cadastro de usuario</h1>
        <hr><br><br>

        <form method="post" action="processa.php">
            <input type="submit" value="salvar" class="btn">
            <input type="reset" value="Limpar" class="btn">
            <br><br> <!-- quebra de linha !-->

            Nome<br>
            <input type="text" name="nome" class="campo" maxLength="40" required autofocus><br>
            Email<br>
            <input type="email" name="email" class="campo" maxLength="50" ><br>
            profissao<br>
            <input type="text" name="profissao" class="campo" maxLength="40" ><br>


        </form>
    </section>
</div>
</body>
</html>