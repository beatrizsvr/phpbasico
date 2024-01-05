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
                $est = isset($_GET["est"])?$_GET["est"]:"São Paulo";

                switch ($est) {
                    case 1:
                        echo "Você mora na Região Sudeste";
                        break;
                    case 2:
                        echo "Você mora na Região Nordeste";
                        break;
                    case 3:
                        echo " Você mora na Região Norte";
                        break;
                    case 4:
                        echo " Você mora na Região Centro-Oeste";
                        break;
                    case 5:
                        echo "Você mora na Região Sul";
                }
            ?>
            <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
        </div>
    </body>
</html>