<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8"/>
        <title>Curso de PHP Básico</title>
        <link rel="stylesheet" href="../css/style.css"/>
    </head>
    <body>
        <div>
            <?php
                $txt = "Este é um exemplo de string gigantesca que permite que possamos exemplificar a função wordwrap.";
                $resultado = wordwrap($txt, 5, "<br>\n", false);
                echo $resultado;
            ?>
        </div>
    </body>
</html>