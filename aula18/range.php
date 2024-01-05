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
                $c = range(5,20,2);
                foreach ($c as $v){
                    echo "<td>$v ";
                }
            ?>
        </div>
    </body>
</html>