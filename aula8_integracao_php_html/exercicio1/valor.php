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
                $valor = $_GET ["v"];
                $rq = sqrt($valor);
                echo "A raiz quadrada de $valor é igual a " . number_format($rq,2);
            ?>
        </div>
    </body>
</html>