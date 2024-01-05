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
                #exercício 1
                $a =3;
                $b = "3";
                $r = ($a === $b)?"Sim":"Não";
                echo "As variáveis a e b são iguais? $r";

                #exercício 2
                $nota1 = $_GET["n1"];
                $nota2 = $_GET["n2"];
                $media = ($nota1 + $nota2) / 2;
                echo "<br>A média entre $nota1 e $nota2 é $media";

                $situacao ($media < 6)?"Reprovado":"Aprovado";
                echo "<br> A situação do aluno é $situacao";

                #exercício 3
                $ano_nasc = $_GET["ano"];
                $idade = 2023 - $ano_nasc;
                echo "Quem nasceu em $ano_nasc tem idade de $idade anos";

            ?>
        </div>
    </body>
</html>