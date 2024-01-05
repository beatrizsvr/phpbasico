<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8"/>
        <title>Curso de PHP Básico</title>
        <link rel="stylesheet" href="../../css/style.css"/>
    </head>
    <body>
        <div>
            <?php
                $nome = $_GET["nome"];
                $ano = $_GET["ano"];
                $sexo = $_GET["sexo"];
                $idade = date("Y") - $ano;
                echo "$nome é $sexo e tem $idade anos";
            ?>
            <br/>
            <a href="exercicio2.html">Voltar</a>
        </div>
    </body>
</html>