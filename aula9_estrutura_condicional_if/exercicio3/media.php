<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8"/>
        <title>Curso de PHP Básico</title>
        <link rel="stylesheet" href="../../css/style.css"/>
        <style>
            span.texto{
                color: #7e050c;
                font-weight: bold;
            }

            span.botao{
                background-color: #273747;
            }

            .botao {
                background-color: #273747;
            }
        </style>
    </head>
    <body>
        <div>
            <?php
                $nota1 = $_GET["n1"];
                $nota2 = $_GET["n2"];
                $media = ($nota1 + $nota2) / 2;

                echo "A média entre <span class='texto'>$nota1</span> e <span class='texto'>$nota2</span> é igual a <span class='texto'>$media</span><br/>";

                if($media >=6){
                    $situacao = "APROVADO";
                } else {
                    $situacao = "REPROVADO";
                }

                echo "Situação do aluno: <span class='texto'>$situacao</span><br/><br/>";
            ?>
            <a href="exercicio3.html"><span class='botao'>Voltar</span></a>
        </div>
    </body>
</html>