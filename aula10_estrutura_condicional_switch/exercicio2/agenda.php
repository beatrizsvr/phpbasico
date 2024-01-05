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
                $dia = isset($_GET["ds"])?$_GET["ds"]:0;
                switch ($dia) {
                    case 2:
                    case 3:
                    case 4:
                    case 5:
                    case 6:
                        echo "Vai estudar";
                        break;
                    case 7:
                    case 8:
                        echo "Descanse";
                        break;
                }
            ?>
            <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
        </div>
    </body>
</html>