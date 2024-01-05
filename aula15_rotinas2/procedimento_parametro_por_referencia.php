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
                function teste($x){
                    $x += 2;
                    echo "O valor de X é $x<br>";
                }

                $a = 3;
                teste($a);
                echo "O valor de A é $a";
            ?>
        </div>
    </body>
</html>