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
                $c = 1;
                do {
                    echo "$c ";
                    $c++;
                } while($c<=10);
            ?>
        </div>
    </body>
</html>