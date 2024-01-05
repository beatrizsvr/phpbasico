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
                $ano_nasc = $_GET["ano"];
                $idade = 2023 - $ano_nasc;
                echo "Quem nasceu em $ano_nasc tem idade de $idade anos";

                $tipo = ($idade >= 18 && $idade <= 64)?"obrigatório":"não obrigatório";
                echo "<br> Seu voto é $tipo";
            ?>
        </div>
    </body>
</html>