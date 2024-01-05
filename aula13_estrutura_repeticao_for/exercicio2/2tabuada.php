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
                $n = isset($_GET["num"])?$_GET["num"]:1;
                for($i=1; $i<=10; $i++){
                    $r = $n * $i;
                    echo "$n x $i = $r <br/>";
                }
             ?>
            <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
        </div>
    </body>
</html>