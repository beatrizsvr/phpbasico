<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8"/>
        <title>Curso de PHP Básico | Variáveis de Referência</title>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <div>
            <?php
                $a =3;
                $b = &$a;
                $b += 5;
                echo "A variavel a vale $a";
                echo "<br/>A variavel b vale $b";

            ?>
        </div>
    </body>
</html>