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
                $produto = "leite";
                $preco = 4.5;

                //echo "O $produto custa R$ " . number_format($preco,2);
                printf("O %s custa R$  %.2f", $produto, $preco);
            ?>
        </div>
    </body>
</html>