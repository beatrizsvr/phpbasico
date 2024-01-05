<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8"/>
        <title>Curso de PHP Básico | Operadores Relacionais</title>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <div>
            <?php
                $nota1 = $_GET["n1"];
                $nota2 = $_GET["n2"];
                $media = ($nota1 + $nota2) / 2;
                echo "<br>A média entre $nota1 e $nota2 é $media";

                $situacao = ($media < 6)?"Reprovado":"Aprovado";
                echo "<br> A situação do aluno é $situacao";
            ?>
        </div>
    </body>
</html>