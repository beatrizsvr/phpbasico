<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8"/>
        <title>Curso de PHP Básico | Variável Variante</title>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <div>
            <?php
                $x = "abc";
                $$x = "def";

                echo "Conteudo da variável x é $x";
                echo "<br>A variável criada recebeu o valor $abc";
            ?>
        </div>
    </body>
</html>