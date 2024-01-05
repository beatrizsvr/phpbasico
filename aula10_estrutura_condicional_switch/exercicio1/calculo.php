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
                $n = isset($_GET["num"])?$_GET["num"]:0;
                $op = isset($_GET["oper"])?$_GET["oper"]:1;

                switch ($op){
                    case 1:
                        $resultado = $n * 2;
                        break;
                    case 2:
                        $resultado = $n ^ 3;
                        break;
                    case 3:
                        $resultado = sqrt($n);
                }
                echo "O resultado da operação é <span class='foco'>$resultado</span>";
            ?>
            <br><br>
            <a href="exercicio1.html" class="botao">Voltar</a>
        </div>
    </body>
</html>