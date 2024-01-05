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
            function soma($a, $b){
                $s = $a + $b;
                return $s;
            }
            $x = 3;
            $y = 4;
            $r = soma($x, $y);
            echo "A soma entre $x e $y é igual a $r";
            ?>
        </div>
    </body>
</html>