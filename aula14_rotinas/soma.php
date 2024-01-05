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
                echo "<p>A soma vale $s</p>";
            }

            soma(3,4);
            soma(8,2);
            ?>
        </div>
    </body>
</html>